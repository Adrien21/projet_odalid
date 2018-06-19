@extends('layouts.badges')

@section('titre', $badge->nom)

@section('id', $badge->id)
@section('nom', $badge->nom)
@section('prenom', $badge->prenom)
@section('email', $badge->email)
@section('dateDeNaissance', $badge->dateDeNaissance)
@section('numeroIdentite', $badge->numeroIdentite)
@section('sexe', $badge->sexe)
@section('type', $badge->type)
@section('dateDeValidite', $badge->dateDeValidite)

@section('delete')
    <p>
        <a href="{{ route('BadgesDelete', ['n' => $badge->id]) }}">Supprimer</a>
    </p>
@endsection

@section('restriction')
	<ul class="nav nav-tabs nav-justified indigo" role="tablist">
	@foreach ($zones as $zone)
		<li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel{{ $zone->id }}" role="tab">{{ $zone->nom }}</a>
      </li>
			
	@endforeach
	</ul>
	<div class="tab-content">
	    @foreach ($zones as $zone)
			<div class="tab-pane fade" id="panel{{ $zone->id }}" role="tabpanel">
				<br/>
				@if (isset($dates_expirations) && $dates_expirations != null)
					@foreach($id_tablezone as $idzone)
							@if(!$dates_expirations->contains('zone_id', $idzone->id) && $idzone->id == $zone->id)
								<label for="dateDebut">Date de début : </label>
					    		<input type="date" id="dateDebut" name="dateDebut" value="">
								<label for="dateFin">Date de fin : </label>
					    		<input type="date" id="dateFin" name="dateFin" value="">
					    	@endif
					@endforeach
					@foreach ($dates_expirations as $date_permission)
						@if ($date_permission->zone_id === $zone->id)
							<label for="dateDebut">Date de début : </label>
						    <input type="date" id="dateDebut" name="dateDebut" value="{{ $date_permission->dateDebut }}">
							<label for="dateFin">Date de fin : </label>
						    <input type="date" id="dateFin" name="dateFin" value="{{ $date_permission->dateFin }}">
						@endif
				    @endforeach
				@else 
					<label for="dateDebut">Date de début : </label>
				    <input type="date" id="dateDebut" name="dateDebut" value="">
					<label for="dateFin">Date de fin : </label>
				    <input type="date" id="dateFin" name="dateFin" value="">
				@endif
			</div>
		@endforeach
	</div>
@endsection