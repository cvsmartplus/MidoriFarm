<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\PenjualanLaporan;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = Penjualan::where('id_greenhouse', Auth::user()->id_greenhouse)
        ->select('id', 'price', 'quantity', 'subtotal', 'date')
        ->get();
        $produk = Product::where('id_greenhouse', Auth::user()->id_greenhouse)
        ->pluck('name_product', 'id');

    return view('penjualan.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Product::where('id_greenhouse', Auth::user()->id_greenhouse)
                    ->pluck('name_product', 'id');

        $penjualan = Penjualan::with('produk')
                    ->where('id_greenhouse', Auth::user()->id_greenhouse)
                    ->get();

        return view('penjualan.create', compact('produk', 'penjualan'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('penjualan.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
