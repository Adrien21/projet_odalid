@extends('layouts.navigation')

@section('titre', 'Lecteurs')

@section('content')
  <h1 class="text-center">Gestion des lecteurs</h1>

	<div class="col-8 offset-2">

		@foreach ($lecteurs as $lecteur)
			<a href="#" class="d-inline-flex justify-content-center mt-2">
				<div class="card bg-light">
					<div class="card-body">
						<p>{{ $lecteur->nom }}</p>
					</div>
				</div>
			</a>
        @endforeach
        
	</div>

@endsection