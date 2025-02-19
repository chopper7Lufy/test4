<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function profile(RegisterRequest $request)
    {
        $form = $request->all();
        User::create($form);
        return view('profile',compact('form'));
    }

    public function login(RegisterRequest $request)
    {
        $form = $request->all();
        User::create($form);
        return view('login');
    }

    public function mylist()
    {
        return view('mylist');
    }
}
