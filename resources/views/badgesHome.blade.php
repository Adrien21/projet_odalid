@extends('layouts.navigation')

@section('titre', 'Badges')

@section('content')
<div class="espace" style="height:13vh;"></div>
<div class="card mx-auto" style="width: 87vw; height:81vh">
  <div class="card-header">
    <h1 class="text-center">Badges</h1>
      <a href="{{ route('BadgesNew') }}"><i class="fa fa-plus" aria-hidden="true"></i> <i class="fa fa-address-card" aria-hidden="true"></i></a>
  </div>
  <div class="card-body" style=" overflow: auto; height:70vh;">

      <table class="table table-striped" >
        <thead>
          <tr>
            <th scope="col">Editer</th>
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

          @foreach ($badges as $badge)
              <tr>
                  <th scope='row'><a href="{{ route('BadgesEdit', ['n' => $badge->id]) }}"><i class="fa fa-edit deep-orange-text" aria-hidden="true"></i></a></th>
                <td>{{ $badge->nom }}</td>
                <td>{{ $badge->prenom }}</td>
                <td>{{ $badge->sexe }}</td>
                <td>{{ $badge->numeroID }}</td>
                <td>{{ $badge->dateDeValidite }}</td>
                <td>{{ $badge->type }}</td>
                <td>{{ $badge->email }}</td>
                <td>{{ $badge->dateDeNaissance }}</td>
                <td>{{ $badge->numeroIdentite }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
  <div class="mx-auto mt-2">{{ $badges->links() }}</div>
</div>
@endsection
