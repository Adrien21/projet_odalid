<?php

namespace App\Http\Controllers;

use App\Badge;
use App\Gache;
use App\Lecteur;
use App\Porte;
use App\Relais;
use App\Salle;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BadgeRequest;
use App\Http\Requests\GacheRequest;
use App\Http\Requests\LecteurRequest;
use App\Http\Requests\PorteRequest;
use App\Http\Requests\RelaisRequest;
use App\Http\Requests\SalleRequest;
use App\Http\Requests\ZoneRequest;

class CreateController extends Controller
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
    public function badges(BadgeRequest $req) {
        $requete = Badge::create($req->all());
        $n = DB::getPdo()->lastInsertId();
        return redirect()->route('BadgesEdit', ['n' => $n]);
    }

    // Redirection utilisateurs
    public function utilisateurs() {
        $users = User::get();
        return view('utilisateursEdit');
    }

    // Redirection gestion zones dans infrastructure
    public function zones(ZoneRequest $req) {
        $requete = Zone::create($req->all());
        $n = DB::getPdo()->lastInsertId();
        return redirect()->route('ZonesEdit', ['n' => $n]);
    }

    // Redirection gestion portes dans infrastructure
    public function portes() {
        return view('portesEdit');
    }

    // Redirection gestion salles dans infrastructure
    public function salles(SalleRequest $req) {
        $requete = Salle::create($req->all());
        $n = DB::getPdo()->lastInsertId();
        return redirect()->route('SallesEdit', ['n' => $n]);
    }

    // Redirection gestion gaches dans infrastructure
    public function gaches() {
        return view('gachesEdit');
    }

    // Redirection gestion lecteurs dans infrastructure
    public function lecteurs() {
        return view('lecteursEdit');
    }
}
