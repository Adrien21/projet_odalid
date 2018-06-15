@extends('layouts.navigation')

@section('titre', 'Zones')

@section('content')
	<h1 class="text-center">Gestion des zones</h1>
  	<a href="zones/create"><button>Nouvelle zone</button></a>

	<div class="col-8 offset-2">

		@foreach ($zones as $zone)
			<a href="zones/edit/{{ $zone->id }}" class="d-inline-flex justify-content-center mt-2">
				<div class="card bg-light">
					<div class="card-body">
						<p>{{ $zone->nom }}</p>
					</div>
				</div>
			</a>
        @endforeach
        
	</div>

@endsection
