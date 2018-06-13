@extends('layouts.navigation')

@section('titre', 'Zones')

@section('content')
	<h1 class="text-center">Gestion des zones</h1>

	<div class="col-8 offset-2">

		@foreach ($zones as $zone)
		<div class="card bg-light mb-3" style="max-width: 18rem;">
			<div class="card-body">
            <a href="#" class="d-inline-flex justify-content-center border">
            	<p>{{ $zone->nom }}</p>
            </a>
        </div>
        </div>
        @endforeach

	</div>

@endsection
