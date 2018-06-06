<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ConnexionRequest;
use App\Connexion;

class ConnexionController extends Controller
{
    public function form_connexion() {
    	return view('connexion');
    }

    public function connexion(ConnexionRequest $request) {
    	Connexion::create($request->all());
    	echo $request->input('identifiant');
    }
}
