<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function forgotPassword()
    {
        return view('authentication/forgotPassword');
    }

    public function signIn()
    {
        return view('authentication/signIn');
    }
    public function signInPost(Request $request)
    {
    $credentials = [
        'email' => $request->email,
        'password' => $request->password
    ];
if (Auth::attempt($credentials)) {
return redirect('/')->with('success','Login Berhasil');
}
return back()->with('error', 'Email atau Password Salah');
}
}
