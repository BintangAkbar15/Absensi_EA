<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginAuth(Request $request){
        $data = $request->onlu('username','password');

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('/home');
        }else{
            return back()->with('error','Login Gagal');
        }
    }
}
