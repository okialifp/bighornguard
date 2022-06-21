<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Auth;

class LoginController extends Controller
{
    public function loginpage(){
        return view('home.login.landing');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/admin');
        }   
        return redirect('/');
    }
}
