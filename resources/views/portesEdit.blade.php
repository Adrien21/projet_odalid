@extends('layouts.portes')

@section('titre', $porte->nom)

@section('id', $porte->id)
@section('nom', $porte->nom)

@section('option_salle')
	@foreach ($salles as $salle)

		@if ($salle->id === $porte->salle_id)
    		<option value="{{ $salle->id }}" selected>{{ $salle->nom }}</option>
    	@else
    		<option value="{{ $salle->id }}">{{ $salle->nom }}</option>
    	@endif
    @endforeach
@endsection

@section('option_relais')
	@foreach ($gaches as $gache)
		<optgroup label="{{ $gache->nom }}">
			@foreach ($relais_entier as $relais)
				@if ($porte->relais_id === $relais->id)
		    		<option value="{{ $relais->id }}" selected>{{ $relais->numero }}</option>
		    	@else
		    		<option value="{{ $relais->id }}">{{ $relais->numero }}</option>
		    	@endif
		    @endforeach
	    </optgroup>
	@endforeach
@endsection