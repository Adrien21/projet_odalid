@extends('layouts.navigation')

@section('titre', 'Badges')

@section('content')
  <h1 class="text-center">Badges</h1>
  <a href="{{ route('BadgesNew') }}">+</a>
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

        @foreach ($badges as $badge)
            <tr>
                <th scope='row'><a href="{{ route('BadgesEdit', ['n' => $badge->id]) }}">{{ $badge->id }}</a></th>
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
  {{ $badges->links() }}

@endsection
