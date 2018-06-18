<?php

namespace App\Http\Controllers;

use App\Badge;
use App\Zone;
use App\Porte;
use App\Salle;
use App\Gache;
use App\Lecteur;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\BadgeRequest;
use App\Http\Requests\ZoneRequest;
use App\Http\Requests\PorteRequest;
use App\Http\Requests\SalleRequest;
use App\Http\Requests\GacheRequest;
use App\Http\Requests\LecteurRequest;
use App\Http\Requests\RelaisRequest;

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
        $requete = Badge::find($n)->update($req->all());
        return redirect()->route('BadgesEdit', ['n' => $n]);
    }

    // Redirection utilisateurs
    public function utilisateurs($n, Request $req) {
        // on transforme ON du checkbox (si cochée) en 1, ou, 0 si decochée
        if($req->enabledOn == 'on') $enabled = 1;
        else $enabled = 0;

        $users = User::find($n)->update([$req->all(), 'enabled' => $enabled]);
        //dd($req->all());
        return redirect()->route('UtilisateursEdit', ['n' => $n]);
    }

    // Redirection gestion zones dans infrastructure
    public function zones($n, ZoneRequest $req) {
        $requete = Zone::find($n)->update($req->all());
        return redirect()->route('ZonesEdit', ['n' => $n]);
    }

    // Redirection gestion portes dans infrastructure
    public function portes($n, ZoneRequest $req) {
        $requete = Porte::find($n)->update($req->all());
        if (isset($req->id_lecteur)) {
            $requete2 = Lecteur::where('porte_id', $n)->update(['porte_id' => null]);
            $requete3 = Lecteur::find($req->id_lecteur)->update(['porte_id' => $n]);
        } else {
            $requete2 = Lecteur::where('porte_id', $n)->update(['porte_id' => null]);
        }
        return redirect()->route('PortesEdit', ['n' => $n]);
    }

    // Redirection gestion salles dans infrastructure
    public function salles($n, ZoneRequest $req) {
        $requete = Salle::find($n)->update($req->all());
        return redirect()->route('SallesEdit', ['n' => $n]);
    }

    // Redirection gestion gaches dans infrastructure
    public function gaches($n, ZoneRequest $req) {
        $requete = Gache::find($n)->update($req->all());
        return redirect()->route('GachesEdit', ['n' => $n]);
    }

    // Redirection gestion lecteurs dans infrastructure
    public function lecteurs($n, ZoneRequest $req) {
        $requete = Lecteur::find($n)->update($req->all());
        return redirect()->route('LecteursEdit', ['n' => $n]);
    }
}
