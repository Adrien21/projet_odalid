@extends('layouts.navigation')

@section('titre', 'Zones')

@section('content')
    <h1 class="text-center">Zones - @yield('titre')</h1>
<form name="modif" action="" method="POST">
    <p>
        <label for="nom">Nom* : </label>
        <input type="text" id="nom" name="nom" value="@yield('nom')" required>
    </p>

    {{ csrf_field() }}
    <input type="submit" value="Valider">
</form>
@endsection
