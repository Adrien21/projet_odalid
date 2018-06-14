@extends('layouts.gaches')

@section('titre', 'Nouveau')

@section('type')
	<label for="type">Type* : </label>
		<select id="type" name="type" required>
			<option value="prd4">PoE rail DIN 4 voies</option>
			<option value="pb3">PoE boitier 3 voies</option>
		</select>
@endsection