<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use App\Models\AssetKelola;
use Illuminate\Http\Request;
use App\Models\PengeluaranKelola;
use App\Models\PengeluaranKategori;
use Illuminate\Support\Facades\Auth;

class PengeluaranKelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asset = AssetKelola::where('id_greenhouse', Auth::user()->id_greenhouse)->get();

        $pemasok = Pemasok::where('id_greenhouse', Auth::user()->id_greenhouse)->get();

        $kategori = PengeluaranKategori::where(function ($query) {
            $query->where('id_greenhouse', Auth::user()->id_greenhouse)
                ->orWhereNull('id_greenhouse')
                ->orderBy('id', 'desc');
        })->get();
        $pengeluaran = PengeluaranKelola::with('kategori')->with('asset')->with('pemasok')->with('user')->where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('pengeluaran.kelola.index', compact('kategori', 'asset', 'pengeluaran', 'pemasok'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->kategori == 1) {
            
            $pengeluaran = PengeluaranKelola::create([
                'date' => $request->date,
                'id_greenhouse' => Auth::user()->id_greenhouse,
                'id_cat_exp' => 1,
                'description' => 'Pembelian ' . $request->qty . ' ' . $request->name . ' dengan harga beli Rp. ' . $request->price,
                'subtotal' => $request->subtotal,
                'id_user' => Auth::user()->id,
                'id_asset' => $request->id_asset,
                'id_supplier' => $request->id_supplier
            ]);
        } else {
            $expense = PengeluaranKelola::create([
                'date' => $request->date,
                'id_greenhouse' => Auth::user()->id_greenhouse,
                'id_cat_exp' => $request->kategori,
                'description' => $request->description,
                'total' => $request->jumlah,
                'id_user' => Auth::user()->id,
                'id_supplier' => $request->id_supplier
            ]);
        }
        
        if($expense){
            return redirect()->back()->with("success","Pengeluaran berhasil ditambahkan");
        } else{
            return redirect()->back()->with("error","Pengeluaran Gagal ditambahkan");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengeluaran = PengeluaranKelola::findOrFail($id);
        $pengeluaran->update($request->all());
        if($pengeluaran){
            return redirect()->back()->with('success', 'Data berhasil diubah');
        } else{
            return redirect()->back()->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengeluaran = PengeluaranKelola::findOrFail($id);
        $pengeluaran->delete();
        if($pengeluaran){
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } else{
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }
}
