<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FurimaController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function index2()
    {
        return view('login');
    }
    
}
