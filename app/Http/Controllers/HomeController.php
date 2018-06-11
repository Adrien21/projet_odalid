<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function test(){
        return view('index');
    }

    // Redirection gestion lecteurs dans infrastructure
    public function historique() {
        // Requête NORMALEMENT fonctionnelle pour récupérer l'historique
        // A tester avec le bon squelette de BDD
        // Résultat attendu : "nom de la salle - nom de la porte - date dans l'historique - nom de la personne - prenom de la personne"

        // $historiques = DB::table('od_historique')
        //                     ->join('od_identite', 'od_historique.identite_id', '=', 'od_identite.id')
        //                     ->join('od_lecteur', 'od_historique.lecteur_id', '=', 'od_lecteur.id')
        //                     ->join('od_porte', 'od_lecteur.porte_id', '=', 'od_porte.id')
        //                     ->join('od_salle', 'od_porte.salle_id', '=', 'od_salle.id')
        //                     ->select('od_salle.nom', 'od_porte.nom', 'od_historique.date', 'od_identite.nom', "od_identite.prenom")
        //                     ->get()
        // 


        return view('historiqueHome'); // Ajouter cette partie dans la parenthèse pour récupérer le résultat de la requête dans la vue historiqueHome.blade.php: ", ['historiques' => $historiques]"
    }

    // Redirection gestion zones dans infrastructure
    public function zones() {
        return view('zonesHome');
    }

    // Redirection gestion portes dans infrastructure
    public function portes() {
        return view('portesHome');
    }

    // Redirection gestion relais dans infrastructure
    public function relais() {
        return view('relaisHome');
    }

    // Redirection gestion gaches dans infrastructure
    public function gaches() {
        return view('gachesHome');
    }

    // Redirection gestion lecteurs dans infrastructure
    public function lecteurs() {
        return view('lecteursHome');
    }
}
