@extends('layouts.lecteurs')

@section('titre', 'Nouveau')

@section('option')
	<label for="porte_id">Porte : </label>
	<select id="porte_id" name="porte_id">
		<option value="">Aucune</option>
    	@foreach ($portes as $porte)
        	<option value="{{ $porte->id }}">{{ $porte->nom }}</option>
        @endforeach
    </select>
@endsection