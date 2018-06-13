<?php

namespace App\Http\Controllers;

use App\Badge;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home');
    }

    public function test(){
        return view('index');
    }

    // Redirection vers badges
    public function badges($n) {
        $badge = Badge::where('id', $n)->first();
        return view('badgesEdit')->with('badge', $badge);
    }

    // Redirection utilisateurs
    public function utilisateurs() {
        $users = User::get();
        return view('utilisateursEdit');
    }

    // Redirection gestion zones dans infrastructure
    public function zones() {
        return view('zonesEdit');
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
    }
}
