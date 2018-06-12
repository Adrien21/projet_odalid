@extends('layouts.navigation')

@section('titre', 'Utilisateurs')

@section('content')
  <h1 class="text-center">Accueil utilisateurs</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Sexe</th>
          <th scope="col">Numéro ID</th>
          <th scope="col">Date de Validité</th>
          <th scope="col">Type</th>
          <th scope="col">Email</th>
          <th scope="col">Date de Naissance</th>
          <th scope="col">Numéro d'identité</th>
        </tr>
      </thead>
      <tbody>

<?php foreach ($utilisateurs as $utilisateur) {

    echo "<br/></br/>
            <tr>
            <th scope='row'>" . $utilisateur->id . "</th>";
               echo "<td>".$utilisateur->Nom ."</td>";
               echo "<td>".$utilisateur->Prenom ."</td>";
                echo "<td>".$utilisateur->Sexe ."</td>";
               echo "<td>".$utilisateur->NumeroID ."</td>";
               echo "<td>".$utilisateur->DateDeValidite ."</td>";
               echo "<td>".$utilisateur->Type ."</td>";
               echo "<td>".$utilisateur->Email ."</td>";
               echo "<td>".$utilisateur->DateDeNaissance ."</td>";
               echo "<td>".$utilisateur->NumIdentite ."</td>
          </tr>";
             }
?>
      </tbody>
    </table>


@endsection
