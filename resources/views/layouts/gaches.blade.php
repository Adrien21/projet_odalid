@extends('layouts.navigation')

@section('titre', 'Gâches')

@section('content')
<div class="espace" style="height:13vh;"></div>
<div class="card mx-auto" style="width: 87vw; height:81vh">
<div class="card-header">
    <h1 class="text-center">Gâches - @yield('titre')</h1>
</div>
    <form name="modif" action="" method="POST">
        <p>
            <label for="ip">IP* : </label>
            <input type="text" id="ip" name="ip" value="@yield('ip')" required>
            <label for="mac">Mac* : </label>
            <input type="text" id="mac" name="mac" value="@yield('mac')" required>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" name="nom" value="@yield('nom')" required>
            @yield('type')
        </p>

        {{ csrf_field() }}
        <input type="submit" value="Valider">
    </form>
    @yield('supprimer')
    <br/><br/><br/>
  <a href="{{ route('Gaches') }}"><button>Retour</button></a>
</div>
@endsection
