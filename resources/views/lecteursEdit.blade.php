@extends('layouts.lecteurs')

@section('titre', $lecteur->nom)

@section('id', $lecteur->id)
@section('ip', $lecteur->ip)
@section('mac', $lecteur->mac)
@section('nom', $lecteur->nom)

@section('option')
	@foreach ($portes as $porte)

		@if ($lecteur->porte_id === $porte->id)
    		<option value="{{ $porte->id }}" selected>{{ $porte->nom }}</option>
    	@else
    		<option value="{{ $porte->id }}">{{ $porte->nom }}</option>
    	@endif
    @endforeach
@endsection