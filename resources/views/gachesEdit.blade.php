@extends('layouts.gaches')

@section('titre', $gache->nom)

@section('ip', $gache->ip)
@section('mac', $gache->mac)
@section('nom', $gache->nom)

@section('type')
	@if ($gache->type === "prd4")
		<span class="ml-3" name="nom">Type : PoE rail DIN 4 voies</span>
	@else
		<span class="ml-3" name="nom">Type : PoE boitier 3 voies</span>
	@endif
@endsection

@section('supprimer')
	<br/><br/>
	<a href="{{ route('GâchesDelete', ['n' => $gache->id]) }}"><button>Supprimer</button></a>
@endsection