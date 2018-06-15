@extends('layouts.navigation')

@section('titre', 'Salles')

@section('content')
  <h1 class="text-center">Gestion des salles</h1>
  <a href="{{ route('SallesNew') }}"><button>Nouvelle salle</button></a>

	<div class="col-8 offset-2">

		@foreach ($salles as $salle)
			<a href="salles/edit/{{ $salle->id }}" class="d-inline-flex justify-content-center mt-2">
				<div class="card bg-light">
					<div class="card-body">
						<p>{{ $salle->nom }}</p>
					</div>
				</div>
			</a>
        @endforeach

	</div>

@endsection
