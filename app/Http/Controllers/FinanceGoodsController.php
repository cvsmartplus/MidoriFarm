<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceGoodsController extends Controller
{
    public function FinanceGoods(){

        return view('FinanceGoods/goodsEdit');
    }
    public function goodsList() {
        return view('FinanceGoods/goodsList');
    }
    public function goodsPreview() {
        return view('FinanceGoods/goodsPreview');
    }
    
   
}
