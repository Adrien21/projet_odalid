@extends('layouts.navigation')

@section('titre', 'Zones')

@section('content')
<div class="espace" style="height:30vh;"></div>
<div class="card mx-auto" style="width: 30vw; height:40vh">
<div class="card-header">
    <h1 class="text-center">Zones - @yield('titre')</h1>
  </div>
	<form name="modif" action="" method="POST">
	    <p>
	        <label for="nom">Nom* : </label>
	        <input type="text" id="nom" name="nom" value="@yield('nom')" required>
	    </p>

	    {{ csrf_field() }}
	    <input type="submit" value="Valider">
	</form>
    @yield('supprimer')
    <br/><br/><br/>
  	<a href="{{ route('Zones') }}"><button>Retour</button></a>
  </div>
@endsection
