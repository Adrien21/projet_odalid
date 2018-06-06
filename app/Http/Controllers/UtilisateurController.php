<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UtilisateurRequest;
use App\Utilisateur;

class UtilisateurController extends Controller
{
    public function form_connexion() {
    	return view('connexion');
    }

    public function connexion(UtilisateurRequest $request) {
    	Utilisateur::create($request->all());
    	echo $request->input('identifiant');
    }
}
