<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function addUser()
    {
        return view('users/addUser');
    }
    public function addSupplier()
    {
        return view('users/addSupplier');
    }
    
    public function usersList()
    {
        return view('users/usersList');
    }
    public function supplierList()
    {
        return view('users/supplierList');
    }
    
    public function viewProfileCustomer()
    {
        return view('users/viewProfileCustomer');
    }

    public function viewProfileSupplier()
    {
        return view('users/viewProfileSupplier');
    }
}
