<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class LogPseudoController extends Controller
{
    public function authentificate(Request $request){

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->away('/');
        }
        else{
            return redirect()->away('/login');
        }
    }
}
