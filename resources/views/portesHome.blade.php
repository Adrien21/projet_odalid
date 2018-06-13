@extends('layouts.navigation')

@section('titre', 'Portes')

@section('content')
  <h1 class="text-center">Gestion des portes</h1>

	<div class="col-8 offset-2">

		@foreach ($portes as $porte)
			<a href="#" class="d-inline-flex justify-content-center mt-2">
				<div class="card bg-light">
					<div class="card-body">
						<p>{{ $porte->nom }}</p>
					</div>
				</div>
			</a>
        @endforeach
        
	</div>

@endsection