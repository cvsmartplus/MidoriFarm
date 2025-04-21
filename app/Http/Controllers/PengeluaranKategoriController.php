<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengeluaranKategori;
use Illuminate\Support\Facades\Auth;

class PengeluaranKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = PengeluaranKategori::where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('pengeluaran.kategori.index', ['name_category' => $kategori], compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new PengeluaranKategori();
        $kategori->id_greenhouse = Auth::user()->id_greenhouse;
        $kategori->name_category = $request->name_category;
        // $kategori = ProdukKategori::create([
        //     'id_greenhouse' => Auth::user()->id_greenhouse,
        //     'name_category' => $request->name_category,
        // ]);
        $kategori->save();
        if($kategori){
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
        $kategori = PengeluaranKategori::find($id);
        $kategori->update($request->all());
        $kategori->save();
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = PengeluaranKategori::findOrFail($id);
        $kategori->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
