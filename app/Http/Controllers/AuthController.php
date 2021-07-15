<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function postlogin(Request $request)
    {

        // dd($request);
        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password])) {
            return redirect('/dashboard');
        }

        return redirect('/login')->with('salah','username atau password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
