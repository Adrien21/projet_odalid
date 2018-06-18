@extends('layouts.zones')

@section('titre', $zone->nom)

@section('nom', $zone->nom)

@section('supprimer')
	<br/><br/>
	<a href="{{ route('ZonesDelete', ['n' => $zone->id]) }}"><button>Supprimer</button></a>
@endsection