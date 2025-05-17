<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Penjualan;
use App\Models\PenjualanItem;
use App\Models\Product;
use App\Models\Pelanggan;

class PenjualanController extends Controller
{
    public function index()
    {
        $laporan = PenjualanItem::with(['penjualan.customer', 'produk'])
            ->where('id_greenhouse', Auth::user()->id_greenhouse)
            ->get();

        return view('penjualan.index', compact('laporan'));
    }

    public function create()
    {
        $produk = Product::where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        $pelanggan = Pelanggan::where('id_greenhouse', Auth::user()->id_greenhouse)->get();

        return view('penjualan.create', compact('produk', 'pelanggan'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_customer'         => 'required|exists:customers,id',
            'items'               => 'required|array|min:1',
            'items.*.product_id'  => 'required|exists:products,id',
            'items.*.price'       => 'required|integer|min:0',
            'items.*.quantity'    => 'required|integer|min:1',
        ]);

        DB::beginTransaction();

        try {
            $grandTotal = collect($data['items'])
                ->sum(fn($r) => $r['price'] * $r['quantity']);

            $sale = Penjualan::create([
                'id_greenhouse' => Auth::user()->id_greenhouse,
                'id_customer'   => $data['id_customer'],
                'subtotal'      => $grandTotal,
                'total'         => $grandTotal,
            ]);

            foreach ($data['items'] as $row) {
                $sale->items()->create([
                    'id_greenhouse' => Auth::user()->id_greenhouse,
                    'id_customer'   => $data['id_customer'],
                    'id_product'    => $row['product_id'],
                    'price'         => $row['price'],
                    'quantity'      => $row['quantity'],
                    'subtotal'      => $row['price'] * $row['quantity'],
                ]);
            }

            DB::commit();

            return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal menyimpan: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $user = Auth::user();

        $gh = $user->gh()->first();

        $sale = Penjualan::with(['customer', 'items.produk'])
            ->where('id_greenhouse', $user->id_greenhouse)
            ->findOrFail($id);

        return view('penjualan.show', compact('sale', 'gh'));
    }

    public function update(Request $request, $id)
    {
        abort(404); // belum implementasi
    }

    public function destroy($id)
    {
        Penjualan::where('id', $id)
            ->where('id_greenhouse', Auth::user()->id_greenhouse)
            ->delete();

        return back()->with('success', 'Penjualan dihapus.');
    }
}

?>
