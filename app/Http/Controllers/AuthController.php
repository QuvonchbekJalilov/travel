<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $creadentials = $request->only('email', 'password');

        if(Auth::attempt($creadentials)){
            if(auth()->user()->role == 'admin'){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->back()->with('error', 'Invalid password or username');
            }
        }
        return redirect()->back()->with('error', 'please enter a password and username');
    }

    public function logout(){
        Auth::logout(); 
        return redirect()->route('index');
    }
}
