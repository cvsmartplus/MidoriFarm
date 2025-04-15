<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetKategori;
use Illuminate\Support\Facades\Auth;

class AssetKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = AssetKategori::where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('asset.kategori.index', ['name_category' => $kategori], compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new AssetKategori();
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
        $kategori = AssetKategori::find($id);
        $kategori->update($request->all());
        $kategori->save();
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = AssetKategori::findOrFail($id);
        $kategori->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
