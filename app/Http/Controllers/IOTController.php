<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IOTController extends Controller
{
    public function index() 
    {
        return view('iot.index');
    }
    public function laporan() 
    {
        return view("iot.laporan");
    }
    public function monitoring() 
    {
        return view("iot.monitoring");
    }
}
