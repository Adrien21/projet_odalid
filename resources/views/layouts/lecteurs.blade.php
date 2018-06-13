@extends('layouts.navigation')

@section('titre', 'Lecteurs')

@section('content')
    <h1 class="text-center">Lecteurs - @yield('titre')</h1>
<form name="modif" action="" method="POST">
    <p>@yield('id')</p>
    <p>
        <label for="ip">IP* : </label>
        <input type="text" id="ip" name="ip" value="@yield('ip')" required>
        <label for="mac">Mac* : </label>
        <input type="text" id="mac" name="mac" value="@yield('mac')" required>
        <label for="nom">Nom* : </label>
        <input type="text" id="nom" name="nom" value="@yield('nom')" required>
        <label for="porte_id">Porte* : </label>
        <!-- Compléter avec <select> dynamique -->
            <!-- test -->
            <select id="porte_id" name="porte_id" required>
                @yield('option')
            </select>
    </p>

    {{ csrf_field() }}
    <input type="submit" value="Valider">
</form>
@endsection
