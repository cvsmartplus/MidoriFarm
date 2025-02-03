<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceGoodsController extends Controller
{
    public function goodsEdit(){
        return view('FinanceGoods/goodsEdit');
    }
    public function produkBarang() {
        return view('FinanceGoods/produkBarang');
    }
    public function goodsPreview() {
        return view('FinanceGoods/goodsPreview');
    }
    
   
}
