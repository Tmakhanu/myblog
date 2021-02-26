<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        return view('auth.register');
    }
    public function register(Request $request){
        //validate input
        $this->validate ($request,[
            'username'=> 'required|min:4|max:255',
            'email'=> 'required|email|max:255|unique:users',
            'password'=> 'required|min:8|max:255|confirmed',
        ]);

    }
}
