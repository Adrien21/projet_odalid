@extends('layouts.zones')

@section('titre', $zone->nom)

@section('nom', $zone->nom)

@section('supprimer')
	<br/><br/>
	<a href="{{ route('ZonesDelete', ['n' => $zone->id]) }}" class="d-flex justify-content-end"><button class="btn btn-danger" style="bottom: -49px;">Supprimer</button></a>
@endsection
