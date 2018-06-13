@extends('layouts.navigation')

@section('titre', 'Gâches')

@section('content')
    <h1 class="text-center">Gâches - @yield('titre')</h1>
<form name="modif" action="" method="POST">
    <p>@yield('id')</p>
    <p>
        <label for="ip">IP* : </label>
        <input type="text" id="ip" name="ip" value="@yield('ip')" required>
        <label for="mac">Mac* : </label>
        <input type="text" id="mac" name="mac" value="@yield('mac')" required>
        <label for="nom">Nom* : </label>
        <input type="text" id="nom" name="nom" value="@yield('nom')" required>
        <label for="type">Type* : </label>
        <!-- Compléter avec <select> dynamique -->
    </p>

    {{ csrf_field() }}
    <input type="submit" value="Valider">
</form>
@endsection
