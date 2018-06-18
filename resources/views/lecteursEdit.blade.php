@extends('layouts.lecteurs')

@section('titre', $lecteur->nom)

@section('ip', $lecteur->ip)
@section('mac', $lecteur->mac)
@section('nom', $lecteur->nom)

@section('option')
    	@foreach ($portes as $porte)
    		@if ($lecteur->porte_id === $porte->id)
        		<span class="ml-3" name="porte_id">Porte : {{ $porte->nom }}</span>
        	@endif
        @endforeach
@endsection

@section('supprimer')
	<br/><br/>
	<a href=""><button>Supprimer</button></a>
@endsection