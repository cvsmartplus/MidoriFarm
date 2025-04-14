<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemasok = Pemasok::where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('pemasok.index', ['pemasok' => $pemasok]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pemasok = new Pemasok();
        $pemasok->id_greenhouse = Auth::user()->id_greenhouse;
        $pemasok->name = $request->name;
        $pemasok->address = $request->address;
        $pemasok->email = $request->email;
        $pemasok->phone_number = $request->phone_number;
        $pemasok->save();
        if($pemasok){
            return redirect()->back()->with("Pemasok berhasil di tambahkan");
        } else{
            return redirect()->back()->with("Pemasok Gagal di tambahkan");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pemasok = Pemasok::find($id);
        return response()->json($pemasok);
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
        $pemasok = Pemasok::find($id);
        $pemasok->update($request->all());
        $pemasok->save();

        return redirect()->back()->with('success', "Pemasok berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pemasok = Pemasok::find($id);
        $pemasok->delete();

        return redirect()->back()->with('success', "Pemasok berhasil dihapus");
    }
}
