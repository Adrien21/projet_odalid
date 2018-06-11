@extends('layouts.navigation')

@section('titre', 'Relais')

@section('content')
  <h1 class="text-center">Accueil historique</h1>

  <!-- Normalement l'historique peut se récupérer grâce à un foreach

      exemple pour récupérer que les prénoms des personnes ayant ouvert une porte
      foreach ($historiques as $historique) {
        echo $historique->prenom;
      }
  -->
@endsection