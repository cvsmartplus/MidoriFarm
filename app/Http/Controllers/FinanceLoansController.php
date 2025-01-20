<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceLoansController extends Controller
{
    // public function FinanceLoans() {
    //     return view('FinanceLoans/FinanceLoans');
    // }
    public function LoansEdit() {
        return view('FinanceLoans/LoansEdit');
    }
    public function LoansList() {
        return view('FinanceLoans/LoansList');
    }
    public function LoansPreview() {
        return view('FinanceLoans/LoansPreview');
    }
}

