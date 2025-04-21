<?php

namespace App\Http\Controllers;

use App\Models\AssetKategori;
use App\Models\AssetKelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AssetKelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = AssetKategori::where('id_greenhouse', Auth::user()->id_greenhouse)->pluck('name_category', 'id');
        $asset = AssetKelola::with('category')->where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('asset.kelola.index', compact('asset', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asset = new AssetKelola();
        $asset->id_greenhouse = Auth::user()->id_greenhouse;
        $asset->id_cat_asset = $request->id_cat_product;
        $asset->name_product = $request->name_product;
        $asset->purchase = $request->purchase;
        $asset->save();
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $asset = AssetKelola::find($id);
        $asset->update($request->all());
        $asset->save();
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asset = AssetKelola::finOrFail($id);
        $asset->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
