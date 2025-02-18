<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barangEdit(){
        return view('barang-barang/barangEdit');
    }
    public function barangList() {
        return view('barang-barang/barangList');
    }
    public function barangPreview() {
        return view('barang-barang/barangPreview');
    }
    
   
}
