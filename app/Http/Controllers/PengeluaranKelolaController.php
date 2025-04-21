<?php

namespace App\Http\Controllers;

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
        $kategori = PengeluaranKategori::where('id_greenhouse', Auth::user()->id_greenhouse)->pluck('name_category', 'id');
        $pengeluaran = PengeluaranKelola::with('category')->where('id_greenhouse', Auth::user()->id_greenhouse)->get(); 
        return view('pengeluaran.kelola.index', ['pengeluaran' => $pengeluaran], compact('kategori'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengeluaran = new PengeluaranKelola();
        $pengeluaran->id_greenhouse = Auth::user()->id_greenhouse;
        $pengeluaran->id_cat_exp = $request->id_cat_exp;
        $pengeluaran->subtotal = $request->subtotal;
        $pengeluaran->description = $request->description;
        $pengeluaran->date = $request->date;
        $pengeluaran->save();
        if($pengeluaran){
            return redirect()->back()->with('success', 'Data berhasil disimpan');
        } else{
            return redirect()->back()->with('error', 'Data gagal disimpan');
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
