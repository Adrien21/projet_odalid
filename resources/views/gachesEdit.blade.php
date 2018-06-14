@extends('layouts.gaches')

@section('titre', $gache->nom)

@section('ip', $gache->ip)
@section('mac', $gache->mac)
@section('nom', $gache->nom)
@section('type', $gache->type)

@section('option')
		@if ($gache->type === 'prd4')
    		<option value="{{ $gache->type }}" selected>PoE rail DIN 4 voies</option>
    		<option value="pb3" disabled>PoE boitier 3 voies</option>
    	@else
    		<option value="{{ $gache->type }}" selected>PoE boitier 3 voies</option>
    		<option value="prd4" disabled>PoE rail DIN 4 voies</option>
    	@endif
@endsection