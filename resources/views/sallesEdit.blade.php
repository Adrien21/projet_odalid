@extends('layouts.salles')

@section('titre', $salle->nom)

@section('id', $salle->id)
@section('nom', $salle->nom)

@section('option')
	@foreach ($zones as $zone)
		@if ($zone->id === $salle->zone_id)
    		<option value="{{ $zone->id }}" selected>{{ $zone->nom }}</option>
    	@else
    		<option value="{{ $zone->id }}">{{ $zone->nom }}</option>
    	@endif
    @endforeach
@endsection