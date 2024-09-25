<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function submitLogin(Request $request){
        $data = $request->only('username','password');

        if(Auth::guard('guru')->attempt($data)){
            $request->session()->regenerate();
            return redirect('/home');
        }else{
            return back()->with('error','Login Gagal');
        }
    }
}
