@extends('layouts.zones')

@section('titre', $zone->nom)

@section('nom', $zone->nom)

@section('supprimer')
	<br/><br/>
	<a href=""><button>Supprimer</button></a>
@endsection