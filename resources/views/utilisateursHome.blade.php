@extends('layouts.navigation')

@section('titre', 'Utilisateurs')

@section('content')
  <h1 class="text-center">Accueil utilisateurs</h1>
  <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Compte</th>
      <th scope="col">Email</th>
      <th scope="col">Actif</th>
      <th scope="col">Role</th>
      <th scope="col">Date d'expiration</th>
      <th scope="col">Dernière connexion</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($users as $user)
      <tr>
        <th scope='row'>{{ $user->id }}</th>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->enabled }}</td>
        <td>{{ $user->roles }}</td>
        <td>{{ $user->expire_at }}</td>
        <td>{{ $user->last_login }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
