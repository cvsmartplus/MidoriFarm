<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function forgotPassword()
    {
        return view('authentication.forgotPassword');
    }

    public function loginPage()
    {
        return view(view: 'authentication.login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ],[
            'email.required' => 'Email Wajib Diisi!',
            'password.required' => 'Password Wajib Diisi!',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if(Auth::attempt($infologin)) {
            $role = Auth::user()->role;
            return match ($role) {
                'admin' => redirect()->route('admin.blogStat'),
                'owner' => redirect()->route('owner.sensor'),
                'petani' => redirect()->route('petani.sensor'),
                'akuntan' => redirect()->route('akuntan.keuangan'),
            };
        } else {
            return redirect()->route('login')->with('error', 'Email atau Password salah!')->withInput();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with(['logout' => 'Anda telah logout!']);
    }
}