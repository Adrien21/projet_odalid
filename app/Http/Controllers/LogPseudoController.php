<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class LoginController extends Controller
{
    public function authentificate(Request $request){

        $credentials = $request->only('name', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('index');
        }
        else{
            return redirect()->intended('index');
        }
    }
}
