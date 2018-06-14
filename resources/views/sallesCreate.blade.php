@extends('layouts.salles')

@section('titre', 'Nouveau')

@section('option')
	@foreach ($zones as $zone)
    		<option value="{{ $zone->id }}">{{ $zone->nom }}</option>
    @endforeach
@endsection