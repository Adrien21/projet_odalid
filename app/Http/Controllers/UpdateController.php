<?php

namespace App\Http\Controllers;

use App\Badge;
use App\Zone;
use App\Porte;
use App\Salle;
use App\Gache;
use App\Lecteur;
use App\User;
use App\DateExpiration;
use App\PlageHoraire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BadgeRequest;
use App\Http\Requests\ZoneRequest;
use App\Http\Requests\PorteRequest;
use App\Http\Requests\SalleRequest;
use App\Http\Requests\GacheRequest;
use App\Http\Requests\LecteurRequest;
use App\Http\Requests\RelaisRequest;
use App\Http\Requests\DateExpirationRequest;
use App\Http\Requests\PlageHoraireRequest;

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
        $groupe = new Badge;
        $groupe = $groupe->verifGroupe($req);
        $requete = Badge::find($n)->update(['nom' => $req->nom,
                                             'prenom' => $req->prenom,
                                             'email' => $req->email,
                                             'dateDeNaissance' => $req->dateDeNaissance,
                                             'numeroIdentite' => $req->numeroIdentite,
                                             'sexe' => $req->sexe,
                                             'type' => $req->type,
                                             'groupe' => $req->groupe,
                                             'dateDeValidite' => $req->dateDeValidite
                                            ]);
        // ajoute automatiquement le user au groupe si type (referent) est renseigné
        $requete = Badge::find($n)->update(['groupe' => $groupe]);
        // Ajout autorisation
        for ($i = 1; $i <= (Zone::count()); $i++) {
            $datedebut = 'dateDebut_' .$i;
            $datefin = 'dateFin_' .$i;
            $heuredebut = 'heureDebut_' .$i;
            $heurefin = 'heureFin_' .$i;
            $ligne_bdd = DateExpiration::where('zone_id', $i)
                                        ->where('identite_id', $n);

            if (!($ligne_bdd->exists()) && $req->$datedebut != null) {
                $requete2 = DateExpiration::create(['dateDebut' => $req->$datedebut,
                                                    'dateFin' => $req->$datefin,
                                                    'identite_id' => $n,
                                                    'zone_id' => $i
                                                    ]);

                $lastid_identitezone = DB::getPdo()->lastInsertId();
                for ($j = 0; $j <= 6; $j++) {
                    $requete3 = PlageHoraire::create(['heureDebut' => '00:00:00',
                                                      'heureFin' => '23:59:00',
                                                      'nom' => $j,
                                                      'identiteZone_id' => $lastid_identitezone
                                                    ]);
                }
            } else {
                $requete2 = DateExpiration::where('zone_id', $i)
                                            ->where('identite_id', $n)
                                            ->update(['dateDebut' => $req->$datedebut,
                                                      'dateFin' => $req->$datefin
                                                    ]);
                $test = DB::table('od_identitezone')->join('od_jour', 'od_identitezone.id', '=', 'od_jour.identiteZone_id')->select('od_jour.*', 'od_identitezone.*')->get();
                dd($test);
                for ($j = 0; $j <= 6; $j++) {
                    $requete3 = PlageHoraire::where('identite');
                }
            }
        }
        return redirect()->route('BadgesEdit', ['n' => $n]);
        
    }

    // Redirection utilisateurs
    public function utilisateurs($n, Request $req) {
        // on transforme ON du checkbox (si cochée) en 1, ou, 0 si decochée
        if($req->enabledOn == 'on') $enabled = 1;
        else $enabled = 0;

        $users = User::find($n)->update(['username' => $req->username,
                                         'email' => $req->email,
                                         'roles' => $req->roles,
                                         'enabled' => $enabled
                                        ]);
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
