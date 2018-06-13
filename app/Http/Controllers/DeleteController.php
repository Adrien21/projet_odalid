<?php

namespace App\Http\Controllers;

use App\Badge;
use App\Zone;
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
    public function zones() {
        return redirect()->route('Zones');
    }

    // Redirection gestion portes dans infrastructure
    public function portes() {
        return redirect()->route('Portes');
    }

    // Redirection gestion salles dans infrastructure
    public function salles() {
        return redirect()->route('Salles');

    }

    // Redirection gestion gaches dans infrastructure
    public function gaches() {
        return redirect()->route('Gâches');
    }

    // Redirection gestion lecteurs dans infrastructure
    public function lecteurs() {
        return redirect()->route('Lecteurs');
    }

}
