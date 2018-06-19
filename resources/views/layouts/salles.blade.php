@extends('layouts.navigation')

@section('titre', 'Salles')

@section('content')
<div class="espace" style="height:13vh;"></div>
<div class="card mx-auto" style="width: 87vw; height:81vh">
<div class="card-header">
    <h1 class="text-center">Salles - @yield('titre')</h1>
</div>
    <form name="modif" action="" method="POST">
        <p>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" name="nom" value="@yield('nom')" required>
            <label for="zone_id">Zone* : </label>
            <select id="zone_id" name="zone_id">
                @yield('option')
            </select>
        </p>

        {{ csrf_field() }}
        <input type="submit" value="Valider">
    </form>
    @yield('supprimer')
    <br/><br/><br/>
    <a href="{{ route('Salles') }}"><button>Retour</button></a>
  </div>
@endsection
