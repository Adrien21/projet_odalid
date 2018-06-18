@extends('layouts.navigation')

@section('titre', 'Utilisateurs')

@section('content')
    <h1 class="text-center">Utilisateur - $user->username</h1>
    <form name="modif" action="" method="POST">
        <p>
            <label for="username">Nom* : </label>
            <input type="text" id="username" name="username" value="{{ $user->username }}" required>
            <label for="email">Email* : </label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>

            <label for="roles">Role* : </label>
            @include('UtilisateursRole')

            <label for="expire_at">Expire le : </label>
            <input type="date" id="expire_at" name="expire_at" value="{{ $user->expire_at }}">

            <label for="enabled">Actif : </label>
            <input type="checkbox" id="enabled" name="enabledOn" @if($user->enabled){{ 'checked' }}@endif>
        </p>

        {{ csrf_field() }}
        <input type="submit" value="Valider">
    </form>
    <br/><br/><br/>
    <a href="{{ route('Utilisateurs') }}"><button>Retour</button></a>
@endsection
