@extends('layouts.navigation')

@section('titre', 'Badges')

@section('content')
  <h1 class="text-center">Accueil badges</h1>
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

<?php foreach ($badges as $badge) {

    echo "<br/></br/>
            <tr>
            <th scope='row'>" . $badge->id . "</th>";
               echo "<td>".$badge->Nom ."</td>";
               echo "<td>".$badge->Prenom ."</td>";
                echo "<td>".$badge->Sexe ."</td>";
               echo "<td>".$badge->NumeroID ."</td>";
               echo "<td>".$badge->DateDeValidite ."</td>";
               echo "<td>".$badge->Type ."</td>";
               echo "<td>".$badge->Email ."</td>";
               echo "<td>".$badge->DateDeNaissance ."</td>";
               echo "<td>".$badge->NumIdentite ."</td>
          </tr>";
             }
?>
      </tbody>
    </table>


@endsection
