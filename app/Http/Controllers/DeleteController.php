<?php

namespace App\Http\Controllers;

use App\Badge;
use App\Zone;
use App\Salle;
use App\Gache;
use App\Relais;
use App\Porte;
use App\Lecteur;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Redirection vers badges
    public function badges($id) {
        $requete = Badge::find($id)->delete();
        return redirect()->route('Badges');
    }

    // Redirection utilisateurs
    public function utilisateurs() {
        return redirect()->route('Utilisateurs');
    }

    // Redirection gestion zones dans infrastructure
    public function zones($id) {
        $requete = Salle::where('zone_id', $id)->update(['zone_id' => null]);
        $requete2 = Zone::find($id)->delete();
        return redirect()->route('Zones');
    }

    // Redirection gestion portes dans infrastructure
    public function portes($id) {
        $requete = Porte::find($id)->delete();
        return redirect()->route('Portes');
    }

    // Redirection gestion salles dans infrastructure
    public function salles($id) {
        $requete = Porte::where('salle_id', $id)->update(['salle_id' => null]);
        $requete2 = Salle::find($id)->delete();
        return redirect()->route('Salles');

    }

    // Redirection gestion gaches dans infrastructure
    public function gaches($id) {
        $requete_relais = Relais::where('gache_id', $id)->get();
        foreach ($requete_relais as $id_relais) {
            $requete_portes = Porte::where('relais_id', $id_relais->id)->update(['relais_id' => null]);
        }
        $supp_relais = Relais::where('gache_id', $id)->delete();
        $supp_gache = Gache::find($id)->delete();
        return redirect()->route('Gâches');
    }

    // Redirection gestion lecteurs dans infrastructure
    public function lecteurs($id) {
        $requete = Lecteur::find($id)->delete();
        return redirect()->route('Lecteurs');
    }

}
