<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function tampilLogin(){
        return view('login');
    }

    function submitLogin(Request $request){
        $data = $request->only('username','password');

        if(Auth::guard('guru')->attempt($data)){
            $request->session()->regenerate();
            return redirect('/');
        }else{
            return back()->with('error','Login Gagal');
        }
    }

    function logout(){
        Auth::guard('guru')->logout();
        return redirect()->route('login.tampil');
    }
}
