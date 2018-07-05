@extends('layouts.navigation')

@section('titre', 'Utilisateurs')

@section('content')
<div class="espace" style="height:15vh;"></div>
<div class="card mx-auto" style="width: 87vw; height:81vh">
  <div class="card-header">
    <h1 class="text-center">Accueil utilisateurs</h1>
    @if (Auth::user()->roles == 'superadmin' || Auth::user()->roles == 'admin')
      <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Ajouter un utilisateur</a>
    @endif
  </div>
  <div class="card-body" style="overflow: auto;">
    <table class="table table-striped">
        <thead>
        <tr>

          	@if (Auth::user()->roles == 'superadmin' || Auth::user()->roles == 'admin')
          		<th scope="col">Editer</th>
          	@endif
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
          	@if (Auth::user()->roles == 'superadmin' || Auth::user()->roles == 'admin')
            	<th scope='row'><a href="{{ route('UtilisateursEdit', ['n' => $user->id ]) }}"><i class="fa fa-edit deep-orange-text" aria-hidden="true"></i></a></th>
    		@endif
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
    </div>
</div>
@endsection
