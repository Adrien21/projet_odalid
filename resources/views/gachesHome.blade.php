@extends('layouts.navigation')

@section('titre', 'Gâches')

@section('content')

  <div class="espace" style="height:13vh;"></div>


  	<h1 class="text-center">Gestion des gâches</h1>


  	<div class="col-8 offset-2">


  				<div class="col-md-12 col-xl-10 mb-4 mx-auto">
              <a href="{{ route('GachesNew') }}"><button class="btn btn-info flex"><i class="fa fa-street-view" aria-hidden="true"></i> Ajouter une gache</button></a>

              <!--Card-->
              <div class="card">

                <!--Card content-->
                <div class="card-body">

                  <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified indigo" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab">Accueil</a>
                        </li>
  											@foreach ($gaches as $gache)
  											<li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#panel{{ $gache->id }}" role="tab">{{ $gache->nom }}</a>
                        </li>
  											@endforeach
                    </ul>
                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                            <br>
                            <h2>Accueil Gâches</h2>

  													<p>Selectionnez un onglet gache pour l'éditer</p>
                        </div>
                        @foreach ($gaches as $gache)
  											<div class="tab-pane fade" id="panel{{ $gache->id }}" role="tabpanel">
  														<p>{{ $gache->nom }}</p>
  														<br>
  														<a href="{{ route('GachesEdit', ['n'=>$gache->id]) }}"><button class="btn btn-outline-warning waves-effect flex"><i class="fa fa-edit" aria-hiddénite="true"></i> Modifier</button></a>
  														<a href="{{ route('GachesEdit') }}"><button class="btn btn-outline-danger waves-effect flex"><i class="fa fa-trash" aria-hidden="true"></i> Suprimer</button></a>

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
