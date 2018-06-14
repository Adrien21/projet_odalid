@extends('layouts.lecteurs')

@section('titre', $lecteur->nom)

@section('ip', $lecteur->ip)
@section('mac', $lecteur->mac)
@section('nom', $lecteur->nom)

@section('option')
	@foreach ($portes as $porte)

		@if ($lecteur->porte_id === $porte->id)
    		<option value="{{ $porte->id }}" selected>{{ $porte->nom }}</option>
    	@else
    		@foreach ($lecteur_portes as $lecteur_prit)
    			@if ($lecteur_prit->porte_id === $porte->id)
    				<option value="{{ $porte->id }}" disabled>{{ $porte->nom }}</option>
    			@else
    				<option value="{{ $porte->id }}">{{ $porte->nom }}</option>
    			@endif
    		@endforeach
    	@endif
    @endforeach
@endsection