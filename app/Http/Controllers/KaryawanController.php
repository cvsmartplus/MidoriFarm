<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\KaryawanRequest;
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
    public function store(KaryawanRequest $request)
{
    // Ambil password asli buat nanti ditampilin
    $plainPassword = $request->password;

    // Simpan user baru
    $user = User::create([
        'id_greenhouse' => Auth::user()->id_greenhouse,
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($plainPassword),
        'role' => $request->role,
    ]);

    // Cek hasil dan redirect
    if ($user) {
        // Assign role menggunakan Spatie
        $user->assignRole($request->role);
        
        // Simpan password asli untuk ditampilkan sekali di view
        session()->flash('plain_password', $plainPassword);

        return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
    } else {
        return redirect()->back()->with(['error' => 'Data gagal ditambahkan']);
    }
}


    /**
     * Update the specified resource in storage.
     */
    public function update(KaryawanRequest $request, User $karyawan)
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

        return redirect()->back()->with(['success' => 'Data berhasil dihapus']);
    }
}
