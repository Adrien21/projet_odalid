@extends('layouts.navigation')

@section('titre', 'Utilisateurs')

@section('content')
  <h1 class="text-center">Accueil utilisateurs</h1>

  <!-- Normalement les infos utilisateurs peuvent se récupérer grâce à un foreach

      exemple pour récupérer que les noms des personnes, leur date de début et de fin de droit
      foreach ($utilisateurs as $utilisateur) {
        echo "Prénom: " .$utilisateur->prenom .", date de début de droit: " .$utilisateur->datedebut .", date de fin de droit: " .$utilisateur->datefin;
      }
  -->
@endsection