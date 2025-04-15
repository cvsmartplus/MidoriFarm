<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukKategori;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProdukKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = ProdukKategori::where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('produk.kategori.index', ['name_category' => $kategori], compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new ProdukKategori();
        $kategori->id_greenhouse = Auth::user()->id_greenhouse;
        $kategori->name_category = $request->name_category;
        $kategori->save();
            return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = ProdukKategori::find($id);
        $kategori->update($request->all());
        $kategori->save();
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = ProdukKategori::findOrFail($id);
        $kategori->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
