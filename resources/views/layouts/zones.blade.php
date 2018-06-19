@extends('layouts.navigation')

@section('titre', 'Zones')

@section('content')
<div class="espace" style="height:29vh;"></div>
<!-- <div class="card mx-auto" style="width: 30vw; height:40vh">
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


	</form> -->
  <div class="card mx-auto" style="width: 39vw; height:40vh">
<div class="card-header">

    <h1 class="text-center">Zone - @yield('titre')</h1>
    </div>
<form name="modif" action="" method="POST">
    @csrf
    <br>
      <div class="form-group row">
          <label for="nom" class="col-md-4 col-form-label text-md-right">Nom </label>
          <div class="col-md-6">
              <input id="nom" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="nom"  value="@yield('nom')" required autofocus>
              @if ($errors->has('name'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>


    {{ csrf_field() }}
    <div class="form-group row">
        <div class="col-md-4 col-form-label  mx-auto">
            <button type="submit" class="btn btn-primary btn-md">Valider</button>
        </div>
    </div>
</form>

    @yield('supprimer')
    <br/><br/><br/>
  	<a href="{{ route('Zones') }}"><button class="btn btn-blue-grey">Retour</button></a>
  </div>
@endsection
