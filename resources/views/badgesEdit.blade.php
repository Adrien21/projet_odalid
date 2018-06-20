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
        <a href="{{ route('BadgesDelete', ['n' => $badge->id]) }}"><button class="btn btn-danger">Supprimer</button></a>
    </p>
@endsection

@section('restriction')
	<ul class="nav nav-tabs justify-content-center indigo" role="tablist">

	@foreach ($zones as $zone)
		<li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel{{ $zone->id }}" role="tab">{{ $zone->nom }}</a>
      </li>

	@endforeach
	</ul>
	<div class="tab-content">
	    @foreach ($zones as $zone)
			<!-- Affichage des onglets pour chaque zone -->
			<div class="tab-pane fade" id="panel{{ $zone->id }}" role="tabpanel">
				<br/>
				<!-- Si les dates de permission ne sont pas null (retour de EditController.php), affichage -->
				@if (isset($dates_expirations) && $dates_expirations != null)
					@foreach($id_tablezone as $idzone)
					<!-- Affichage des dates de permission vides si l'entrée id_zone de od_identitezone n'existe pas, mais que d'autres existent -->
							@if(!$dates_expirations->contains('zone_id', $idzone->id) && $idzone->id == $zone->id)
								<label for="dateDebut_{{$zone->id}}">Date de début : </label>
					    		<input type="date" id="dateDebut_{{$zone->id}}" name="dateDebut_{{$zone->id}}" value="">
								<label for="dateFin_{{$zone->id}}">Date de fin : </label>
					    		<input type="date" id="dateFin_{{$zone->id}}" name="dateFin_{{$zone->id}}" value="">
					    	@endif
					@endforeach
					<!-- Pour chaques date de permission (od_identitezone -> dateDebut et dateFin)  -->
					@foreach ($dates_expirations as $date_permission)
						<!-- Si l'id-zone de od_identitezone = id de od_zones (retrouvé avec le foreach du début), affichage des données -->
						@if ($date_permission->zone_id === $zone->id)
							<label for="dateDebut_{{$zone->id}}">Date de début : </label>
						    <input type="date" id="dateDebut_{{$zone->id}}" name="dateDebut_{{$zone->id}}" value="{{ $date_permission->dateDebut }}">
							<label for="dateFin_{{$zone->id}}">Date de fin : </label>
						    <input type="date" id="dateFin_{{$zone->id}}" name="dateFin_{{$zone->id}}" value="{{ $date_permission->dateFin }}">
						    <br/><br/>
						    <!-- Pour chaque date permises, affichage des heures d'accès -->
						    @foreach ($table_jour as $heure_jour)
						    	<!-- Si l'id_identiteZone de od_jour = l'id de od_identitezone, affichage des heures d'accès selon les jours -->
						    	@if ($heure_jour->identiteZone_id == $date_permission->id)
						    		<fieldset>
						    			@switch($heure_jour->nom)
						    				@case(0)
						    					<legend>Dimanche</legend>
						    					@break
						    				@case(1)
						    					<legend>Lundi</legend>
						    					@break
						    				@case(2)
						    					<legend>Mardi</legend>
						    					@break
						    				@case(3)
						    					<legend>Mercredi</legend>
						    					@break
						    				@case(4)
						    					<legend>Jeudi</legend>
						    					@break
						    				@case(5)
						    					<legend>Vendredi</legend>
						    					@break
						    				@case(6)
						    					<legend>Samedi</legend>
						    					@break
						    			@endswitch
							    		<label for="heureDebut_{{$date_permission->id}}_{{$heure_jour->nom}}">Heure de début : </label>
							    		<input type="time" id="heureDebut_{{$date_permission->id}}_{{$heure_jour->nom}}" name="heureDebut_{{$date_permission->id}}_{{$heure_jour->nom}}" value="{{ $heure_jour->heureDebut }}">
							    		<label for="heureFin_{{$date_permission->id}}_{{$heure_jour->nom}}">Heure de fin : </label>
							    		<input type="time" id="heureFin_{{$date_permission->id}}_{{$heure_jour->nom}}" name="heureFin_{{$date_permission->id}}_{{$heure_jour->nom}}" value="{{ $heure_jour->heureFin }}">
							    	</fieldset><br/><br/>
						    	@endif
						    @endforeach
						@endif
				    @endforeach
				<!-- Sinon affichage des champs dates vides -->
				@else
					<label for="dateDebut_{{$zone->id}}">Date de début : </label>
				    <input type="date" id="dateDebut_{{$zone->id}}" name="dateDebut_{{$zone->id}}" value="">
					<label for="dateFin_{{$zone->id}}">Date de fin : </label>
				    <input type="date" id="dateFin_{{$zone->id}}" name="dateFin_{{$zone->id}}" value="">
				@endif
			</div>
		@endforeach
	</div>
@endsection
