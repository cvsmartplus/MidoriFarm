<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use App\Models\TagihanPemasok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagihanPemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemasok = Pemasok::where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        $tagihanpemasok = TagihanPemasok::with('supplier')
        ->where('id_greenhouse', Auth::user()->id_greenhouse)
        ->get();


        return view('tagihan.pemasok.index', compact('pemasok', 'tagihanpemasok'));
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
        $tagihanpemasok = new TagihanPemasok();
        $tagihanpemasok->id_greenhouse = Auth::user()->id_greenhouse;
        $tagihanpemasok->id_supplier = $request->id_supplier;
        $tagihanpemasok->amount = $request->amount;
        $tagihanpemasok->debt_date = $request->debt_date;
        $tagihanpemasok->due_date = $request->due_date;
        $tagihanpemasok->status = $request->status;
        $tagihanpemasok->save();
        if($tagihanpemasok){
            return redirect()->back()->with('success', 'Data berhasil disimpan');
        } else{
            return redirect()->back()->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view ('tagihan.pemasok.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('tagihan.pemasok.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tagihanpemasok = TagihanPemasok::findOrFail($id);
        $tagihanpemasok->update($request->all());
        if($tagihanpemasok){
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
        $tagihanpemasok = TagihanPemasok::select('id')->where('id', $id)->delete();
        return redirect()->back()->with('succes', 'Data berhasil dihapus');
    }
}
