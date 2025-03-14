<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function tagihanEdit() {
        return view('tagihan.tagihanEdit');
    }
    public function tagihanList() {
        return view('tagihan.tagihanList');
    }
    public function tagihanPreview() {
        return view('tagihan.tagihanPreview');
    }
}

