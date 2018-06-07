<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Utilisateur;

class ZonesController extends Controller
{
    public function zonesHome() {
    	return view('zonesHome');
    }


}
