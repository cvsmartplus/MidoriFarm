<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard/index');
    }
    public function sensor()
    {
        return view('dashboard/sensor');
    }
    public function index10()
    {
        return view('dashboard/index10');
    }
}
