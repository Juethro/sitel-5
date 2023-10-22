<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('Login.app'); 
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('home');
    }

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        
        // Otentikasi role login
        if (Auth::attempt($credentials)){

            $request->session()->regenerate();
            if (Auth::user()->role == 'admin' ){
                return redirect()->route('admin');
            } else if (Auth::user()->role == 'receptionist') {
                return redirect()->route('receptionist.index');
            } else if (Auth::user()->role == 'hrd'){
                return redirect()->route('staff.index');
            } else if (Auth::user()->role == 'roomservice'){
                return redirect()->route('room.index');
            } else {
                dd('error leh!, siapa anda');
            }
        } else {
            Session::flash('message', 'Username atau Password Salah!');
            return redirect()->route('login');
        };
    }
}
