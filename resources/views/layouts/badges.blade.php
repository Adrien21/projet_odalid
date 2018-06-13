@extends('layouts.navigation')

@section('titre', 'Badges')

@section('content')
    <h1 class="text-center">Badges - @yield('titre')</h1>
<form name="modif" action="" method="POST">
    <p>@yield('id')</p>
    <p>
        <label for="nom">Nom* : </label>
        <input type="text" id="nom" name="nom" value="@yield('nom')">
    </p>

    {{ csrf_field() }}
    <input type="submit" value="Valider">
</form>
@endsection
