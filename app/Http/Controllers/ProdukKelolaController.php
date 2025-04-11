<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProdukKelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = CategoryProduct::where('id_greenhouse', Auth::user()->id_greenhouse)
        ->pluck('name_category', 'id');
        $produk = Product::with('category')->where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('produk.kelola.index', ['produk' => $produk], compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Product();
        $produk->id_greenhouse = Auth::user()->id_greenhouse;
        $produk->id_cat_product = $request->id_cat_product;
        $produk->name_product = $request->name_product;
        $produk->selling_price = $request->selling_price;
        $produk->save();
        if($produk){
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
        $produk = Product::findOrFail($id);
        $produk->update($request->all());
        if($produk){
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
        $produk = Product::select('id')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
