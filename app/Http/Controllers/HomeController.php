<?php

namespace App\Http\Controllers;

use App\User;
use App\Badge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    // Redirection vers badges
    public function badges() {
        // Requête NORMALEMENT fonctionnelle pour récupérer l'utilisateur et ses droits
        // A tester avec le bon squelette de BDD
        // Résultat attendu : "nom de l'utilisateur - prénom de l'utilisateur - date de validité - nom de zone - date début et fin de permission de zone - heure de début et fin de permission d'accès"

        // !!! Vérifier les majuscules sur la bonne BDD !!!

        $badges = Badge::select('od_identite.id','od_identite.nom', 'od_identite.prenom','od_identite.sexe','od_identite.numeroID', 'od_identite.dateDeValidite','od_identite.type', 'od_identite.email', 'od_identite.dateDeNaissance', 'od_identite.numeroIdentite')
                               ->paginate(50);


           return view('badgesHome', ['badges' => $badges]);
        // return view('utilisateursHome');
        // Ajouter cette partie dans la parenthèse pour récupérer le résultat de la requête dans la vue usersHome.blade.php: ", ['badges' => $badges]"
    }

    // Redirection utilisateurs
    public function utilisateurs() {
        $users = User::get();
        return view('utilisateursHome')->with('users', $users);
    }

    // Redirection vers l'historique
    public function historique(Request $search) {
        // Requête NORMALEMENT fonctionnelle pour récupérer l'historique
        // A tester avec le bon squelette de BDD
        // Résultat attendu : "nom de la salle - nom de la porte - date dans l'historique - nom de la personne - prenom de la personne"

        // !!! Vérifier les majuscules sur la bonne BDD !!!
        $search = '%'.$search->search.'%';
        $historiques = DB::table('od_historique')
                            ->select('od_historique.id', 'od_identite.nom as identite_nom', 'od_historique.dateEvenement', 'od_porte.nom as porte_nom', 'od_historique.etatEvenement')
                            ->join('od_identite', 'od_historique.identite_id', '=', 'od_identite.id')
                            ->join('od_lecteur', 'od_historique.lecteur_id', '=', 'od_lecteur.id')
                            ->join('od_porte', 'od_lecteur.porte_id', '=', 'od_porte.id')
                            ->join('od_salle', 'od_porte.salle_id', '=', 'od_salle.id')
                            ->where('od_identite.nom','like', $search)
                            ->paginate(25);



        return view('historiqueHome', ['historiques' => $historiques]); // Ajouter cette partie dans la parenthèse pour récupérer le résultat de la requête dans la vue historiqueHome.blade.php: ", ['historiques' => $historiques]"
    }

    // Redirection gestion zones dans infrastructure
    public function zones() {
        $zones = DB::table('od_zone')->get();

        return view('zonesHome', ['zones' => $zones]);
    }

    // Redirection gestion portes dans infrastructure
    public function portes() {
        $portes = DB::table('od_porte')->get();

        return view('portesHome', ['portes' => $portes]);
    }

    // Redirection gestion salles dans infrastructure
    public function salles() {
        $salles = DB::table('od_salle')->get();

        return view('sallesHome', ['salles' => $salles]);
    }

    // Redirection gestion gaches dans infrastructure
    public function gaches() {
        $gaches = DB::table('od_gache')->get();

        return view('gachesHome', ['gaches' => $gaches]);
    }

    // Redirection gestion lecteurs dans infrastructure
    public function lecteurs() {
        $lecteurs = DB::table('od_lecteur')->get();

        return view('lecteursHome', ['lecteurs' => $lecteurs]);
    }
}
