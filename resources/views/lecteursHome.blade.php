@extends('layouts.navigation')

@section('titre', 'Lecteurs')

@section('content')
  <h1 class="text-center">Gestion des lecteurs</h1>
  <a href="lecteurs/create"><button>Nouveau lecteur</button></a>

	<div class="col-8 offset-2">

		@foreach ($lecteurs as $lecteur)
			<a href="lecteurs/edit/{{ $lecteur->id }}" class="d-inline-flex justify-content-center mt-2">
				<div class="card bg-light">
					<div class="card-body">
						<p>{{ $lecteur->nom }}</p>
					</div>
				</div>
			</a>
        @endforeach
        
	</div>

@endsection