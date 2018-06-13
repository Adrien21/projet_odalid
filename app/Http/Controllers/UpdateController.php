<?php

namespace App\Http\Controllers;

use App\Badge;
use App\Zone;
use Illuminate\Http\Request;
use App\Http\Requests\BadgeRequest;
use App\Http\Requests\ZoneRequest;

class UpdateController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // Redirection vers badges
    public function badges($n, BadgeRequest $req) {
        $requete = Badge::find($n)->update(['nom' => $req->nom]);
        return redirect()->route('BadgesEdit', ['n' => $n]);
    }

    // Redirection utilisateurs
    public function utilisateurs() {
        $users = User::get();
        return view('utilisateursEdit');
    }

    // Redirection gestion zones dans infrastructure
    public function zones($n, ZoneRequest $req) {
        $requete = Zone::find($n)->update(['nom' => $req->nom]);
        return redirect()->route('ZonesEdit', ['n' => $n]);
    }

    // Redirection gestion portes dans infrastructure
    public function portes() {
        return view('portesEdit');
    }

    // Redirection gestion relais dans infrastructure
    public function relais() {
        return view('relaisEdit');
    }

    // Redirection gestion gaches dans infrastructure
    public function gaches() {
        return view('gachesEdit');
    }

    // Redirection gestion lecteurs dans infrastructure
    public function lecteurs() {
        return view('lecteursEdit');
    }}
