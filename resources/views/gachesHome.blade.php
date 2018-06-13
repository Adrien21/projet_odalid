@extends('layouts.navigation')

@section('titre', 'Gâches')

@section('content')
  <h1 class="text-center">Gestion des gaches</h1>

	<div class="col-8 offset-2">

		@foreach ($gaches as $gache)
			<a href="gaches/edit/{{ $gache->id }}" class="d-inline-flex justify-content-center mt-2">
				<div class="card bg-light">
					<div class="card-body">
						<p>{{ $gache->nom }}</p>
					</div>
				</div>
			</a>
        @endforeach
        
	</div>

@endsection