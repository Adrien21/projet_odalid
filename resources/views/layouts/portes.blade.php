@extends('layouts.navigation')

@section('titre', 'Portes')

@section('content')
    <h1 class="text-center">Portes - @yield('titre')</h1>
    <form name="modif" action="" method="POST">
        <p>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" name="nom" value="@yield('nom')" required>
            <label for="salle_id">Salle* : </label>
            <select id="salle_id" name="salle_id">
                @yield('option_salle')
            </select>
            <label for="relais_id">Relais* : </label>
            <select id="relais_id" name="relais_id">
                @yield('option_relais')
            </select>
            @yield('option_lecteur')
        </p>

        {{ csrf_field() }}
        <input type="submit" value="Valider">
    </form>
    @yield('supprimer')
    <br/><br/><br/>
    <a href="{{ route('Portes') }}"><button>Retour</button></a>
@endsection
