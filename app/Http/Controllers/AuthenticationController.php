<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthenticationController extends Controller
{
    public function forgotPassword()
    {
        return view('authentication.forgotPassword');
    }

    public function loginPage()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            return match ($role) {
                'admin' => redirect()->route('admin.blogStat'),
                'owner' => redirect()->route('owner.sensor'),
                'petani' => redirect()->route('petani.sensor'),
                'akuntan' => redirect()->route('akuntan.keuangan'),
            };
        }
        return view(view: 'authentication.login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ],[
            'email.required' => 'Email Wajib Diisi!',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password Wajib Diisi!',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if(Auth::attempt($credentials, $remember)) {
            // regenerate session id
            $request->session()->regenerate();

            // kalo "ingat saya" dicentang
            if ($remember) {
                // ambil nama dan lama session expire
                $name = config('session.cookie');
                $minutes = config('session.lifetime');

                Cookie::queue(
                    Cookie::make(
                        $name,
                        $request->session()->getId(),
                        $minutes // expire dalam N menit
                    )
                );
            }
            
            // redirect sesuai role
            $role = Auth::user()->role;
            return match ($role) {
                'admin' => redirect()->route('admin.blogStat'),
                'owner' => redirect()->route('owner.sensor'),
                'petani' => redirect()->route('petani.sensor'),
                'akuntan' => redirect()->route('akuntan.keuangan'),
            };
        } else {
            return redirect()->route('login')
            ->with('error', 'Email atau Password salah!')
            ->withInput();
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with(['logout' => 'Anda telah logout!']);
    }
}