<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Utilisateur;

class UsersController extends Controller
{
    public function usersHome() {
    	return view('usersHome');
    }


}
