<?php

namespace App\Http\Controllers;

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
        $asset = AssetKelola::where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('asset.kelola.index',['assets' => $asset], compact('asset'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asset = AssetKelola::create($request->all());
        $asset->id_greenhouse = Auth::user()->id_greenhouse;
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
