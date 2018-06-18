@extends('layouts.navigation')

@section('titre', 'Zones')

@section('content')

<div class="espace" style="height:13vh;"></div>





	<div class="col-8">


				<div class="col-md-12 col-xl-10 mb-4 mx-auto">
            <div class="card mx-auto" style="width: 85vw;height: 81vh;">
							<div class="card-header">
									<h1 class="text-center">Gestion des zones</h1>
									<a href="{{ route('ZonesNew') }}"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-street-view" aria-hidden="true"></i></a>
							</div>

              <!--Card content-->
              <div class="card-body">

                <!-- Nav tabs -->
                  <ul class="nav nav-tabs nav-justified indigo" role="tablist">

                      <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab">Accueil</a>
                      </li>
											@foreach ($zones as $zone)
											<li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel{{ $zone->id }}" role="tab">{{ $zone->nom }}</a>
                      </li>
											@endforeach
                  </ul>
                  <!-- Tab panels -->
                  <div class="tab-content">
                      <!--Panel 1-->
                      <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                          <br>
                          <h2>Accueil Zones</h2>

													<p>Selectionnez un onglet zone pour l'éditer</p>
                      </div>
                      @foreach ($zones as $zone)
											<div class="tab-pane fade" id="panel{{ $zone->id }}" role="tabpanel">
														<p>{{ $zone->nom }}</p>
														<br>
														<a href="{{ route('ZonesEdit', ['n'=>$zone->id]) }}"><button class="btn btn-outline-warning waves-effect flex"><i class="fa fa-edit" aria-hiddénite="true"></i> Modifier</button></a>
														<a href="{{ route('ZonesEdit') }}"><button class="btn btn-outline-danger waves-effect flex"><i class="fa fa-trash" aria-hidden="true"></i> Suprimer</button></a>

														</div>
											@endforeach
                  </div>
              </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
	</div>

@endsection
