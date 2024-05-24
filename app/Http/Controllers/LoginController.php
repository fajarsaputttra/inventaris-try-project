<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login_proses(Request $request){
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if(Auth::attempt($data)){
            return view('welcome')->with('success','Anda Berhasil Login');
        }else{
            return redirect()->route('login')->with('failed','Email atau Password Salah');
        };
    }
}

//return view proses!
//return redirect()->route('dashboard');
