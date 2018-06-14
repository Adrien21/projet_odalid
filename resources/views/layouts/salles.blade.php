@extends('layouts.navigation')

@section('titre', 'Salles')

@section('content')
    <h1 class="text-center">Salles - @yield('titre')</h1>
<form name="modif" action="" method="POST">
    <p>
        <label for="nom">Nom* : </label>
        <input type="text" id="nom" name="nom" value="@yield('nom')" required>
        <label for="zone_id">Zone* : </label>
        <select id="zone_id" name="zone_id" required>
            @yield('option')
        </select>
    </p>

    {{ csrf_field() }}
    <input type="submit" value="Valider">
</form>
@endsection
