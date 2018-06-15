@extends('layouts.portes')

@section('titre', $porte->nom)
@section('nom', $porte->nom)

<!-- Affichage de toutes les salles -->
@section('option_salle')
	@foreach ($salles as $salle)

		@if ($salle->id === $porte->salle_id)
    		<option value="{{ $salle->id }}" selected>{{ $salle->nom }}</option>
    	@else
    		<option value="{{ $salle->id }}">{{ $salle->nom }}</option>
    	@endif
    @endforeach
@endsection

<!-- Affichage du nom des gâches et des relais en conséquences -->
@section('option_relais')
	<!-- Chaque gâche -->
	@foreach ($gaches as $gache)
		<optgroup label="{{ $gache->nom }}">
			<!-- Chaque relais -->
			@foreach ($relais as $relais_seul)
				<!-- Si l'id gâche du relais = l'id de la gache de la boucle en cours -->
				@if ($relais_seul->gache_id === $gache->id)
					<!-- Si l'id relais de la porte = l'id du relais de la boucle en cours -->
					@if ($porte->relais_id === $relais_seul->id)
			    		<option value="{{ $relais_seul->id }}" selected>Voie {{ $relais_seul->numero }}</option>
			    	@else
			    		<!-- Sinon boucle des portes avec id relais != de celle modifiée -->
			    		@foreach ($relais_portes as $relais_prit)
			    			<!-- Si l'id relais = l'id d'un relais quelconque, on désactive (car déjà utilisé) -->
			    			@if ($relais_prit->relais_id === $relais_seul->id)
			    				<option value="{{ $relais_prit->relais_id }}" disabled>Voie {{ $relais_seul->numero }}</option>
			    				<!-- Sinon on affiche seulement le relais selectable -->
			    			@else
			    				<option value="{{ $relais_seul->id }}">Voie {{ $relais_seul->numero }}</option>
			    			@endif
			    		@endforeach
			    	@endif
			    @endif
		    @endforeach
	    </optgroup>
	@endforeach
@endsection