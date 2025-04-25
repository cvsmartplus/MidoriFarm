<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\TagihanPelanggan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TagihanPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::where('id_greenhouse', Auth::user()->id_greenhouse)
        ->pluck('name', 'id');
        $tagihanpelanggan = TagihanPelanggan::with('customer')
        ->where('id_greenhouse', Auth::user()->id_greenhouse)
        ->get();

        return view("tagihan.pelanggan.index", compact('pelanggan', 'tagihanpelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tagihanpelanggan = new TagihanPelanggan();
        $tagihanpelanggan->id_greenhouse = Auth::user()->id_greenhouse;
        $tagihanpelanggan->name = $request->name;
        $tagihanpelanggan->amount = $request->amount;
        $tagihanpelanggan->status = $request->status;
        $tagihanpelanggan->date = $request->date;
        $tagihanpelanggan->due_date = $request->due_date;
        $tagihanpelanggan->save();
        if($tagihanpelanggan){
            return redirect()->back()->with('success', 'Data berhasil disimpan');
        } else{
            return redirect()->back()->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view("tagihan.pelanggan.show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("tagihan.pelanggan.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tagihanpelanggan = TagihanPelanggan::findOrFail($id);
        $tagihanpelanggan->update($request->all());
        if($tagihanpelanggan){
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
        $tagihanpelanggan = TagihanPelanggan::select('id')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
