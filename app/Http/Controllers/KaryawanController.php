<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    public function index()
    {
        $user = User::where('id_greenhouse', Auth::user()->id_greenhouse)->get();
        return view('karyawan.index', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $user = new User();
    $user->id_greenhouse = Auth::user()->id_greenhouse;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role = $request->role;
    $user->save();
     if($user){
            return redirect()->back()->with('success', 'Data berhasil di simpan');
        } else{
            return redirect()->back()->with('error', 'Data gagal di tambahkan');
        }
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $karyawan)
{
    $karyawan->update($request->all());

    return redirect()->back()->with('success', 'Data berhasil diubah');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $user = User::findOrFail($id);
       $user->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
