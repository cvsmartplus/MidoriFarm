<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AssetKelola;
use App\Models\PengeluaranKelola;
use App\Models\PenjualanItem;       // <— import model item
use App\Models\TagihanPelanggan;
use App\Models\TagihanPemasok;

class KeuanganController extends Controller
{
    public function index(Request $request)
    {
        $n = (int) $request->query('limit', 5);
        $greenhouseId = Auth::user()->id_greenhouse;
        
        // Tagihan pemasok
        $tpemasok = TagihanPemasok::with('supplier')
        ->where('id_greenhouse', $greenhouseId)
        ->orderBy('due_date', 'asc')
        ->limit($n)
        ->get();
        
        // Tagihan pelanggan
        $tpelanggan = TagihanPelanggan::with('customer')
        ->where('id_greenhouse', $greenhouseId)
        ->orderBy('due_date', 'asc')
        ->limit($n)
        ->get();
        // dd($count);

        // Pengeluaran
        $pengeluaran = PengeluaranKelola::with('category')
            ->where('id_greenhouse', $greenhouseId)
            ->orderBy('date', 'desc')
            ->limit($n)
            ->get();

        // Penjualan Terbaru: query langsung ke PenjualanItem agar filter & limit di level item
        $penjualanItems = PenjualanItem::with('produk')
            ->where('id_greenhouse', $greenhouseId)
            ->orderBy('created_at', 'desc')  // urut berdasarkan waktu item dibuat
            ->limit($n)
            ->get()
            ->map(fn($item) => [
                'produk'   => $item->produk?->name_product ?? '-',
                'quantity' => $item->quantity,
                'subtotal' => $item->subtotal,
            ]);

        // Asset
        $asset = AssetKelola::with('category')
            ->where('id_greenhouse', $greenhouseId)
            ->orderBy('name_product')
            ->limit($n)
            ->get();

        return view('keuangan.index', compact(
            'tpemasok',
            'tpelanggan',
            'pengeluaran',
            'penjualanItems',
            'asset',
            'n'
        ));
    }
}
