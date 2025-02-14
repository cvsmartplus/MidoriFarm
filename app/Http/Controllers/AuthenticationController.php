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
}
