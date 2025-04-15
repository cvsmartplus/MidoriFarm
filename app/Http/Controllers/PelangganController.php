<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('pelanggan.index', ['pelanggan' => $pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelanggan = new Pelanggan();
        $pelanggan->id_greenhouse = Auth::user()->id_greenhouse;
        $pelanggan->name = $request->name;
        $pelanggan->address = $request->address;
        $pelanggan->email = $request->email;
        $pelanggan->phone_number = $request->phone_number;
        $pelanggan->save();
        if($pelanggan){
            return redirect()->back()->with('success', 'Pelanggan berhasil di simpan');
        } else{
            return redirect()->back()->with('error', 'Pelanggan gagal di tambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        return response()->json($pelanggan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect()->route('pelanggan.index'); // atau tampilkan modal di frontend
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($request->all());
        $pelanggan->save();
        return redirect()->back()->with('success', 'Pelanggan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->back()->with('success', 'Pelanggan berhasil dihapus');
    }
}
