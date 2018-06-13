@extends('layouts.navigation')

@section('titre', 'Historique')

@section('content')
  <h1 class="text-center">Accueil historique</h1>

  <!-- Normalement l'historique peut se récupérer grâce à un foreach

      exemple pour récupérer que les prénoms des personnes ayant ouvert une porte et la date
      foreach ($historiques as $historique) {
        echo "Prénom: " .$historique->prenom .", date: " .$historique->date;
      }
  -->
  <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Date Evenement</th>
      <th scope="col">Porte</th>
      <th scope="col">Etat</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($historiques as $historique)
      <tr>
        <th scope='row'>{{ $historique->id }}</th>
        <td>{{ $historique->identite_nom }}</td>
        <td>{{ $historique->dateEvenement }}</td>
        <td>{{ $historique->porte_nom }}</td>
        <td>{{ $historique->etatEvenement }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{ $historiques->links() }}
@endsection