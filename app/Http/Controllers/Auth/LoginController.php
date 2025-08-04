<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('pages.auth.index');
    }

    public function authenticate(Request $request){
        if (Auth::attempt($request->only('name', 'password'))){
            return redirect()->route('dashboard');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
