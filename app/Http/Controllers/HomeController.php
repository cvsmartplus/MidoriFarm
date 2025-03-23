<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function calendar()
    {
        return view('calendar');
    }
    
    public function email()
    {
        return view('email');
    }

    public function error()
    {
        return view('error');
    }

    public function widgets()
    {
        return view('widgets');
    }

    public function blankPage()
    {
        return view('blankPage');
    }

    public function comingSoon()
    {
        return view('comingSoon');
    }
    
    public function testimonials()
    {
        return view('testimonials');
    }
    
    public function maintenance()
    {
        return view('maintenance');
    }

}
