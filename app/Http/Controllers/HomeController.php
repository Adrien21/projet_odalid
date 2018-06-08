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
