@extends('layouts.navigation')

@section('titre', 'Zones')

@section('content')

	<div class="espace" style="height:13vh;"></div>
	<div class="card mx-auto" style="width: 87vw; height:81vh">
  <div class="card-header">
    <h1 class="text-center">Zones</h1>
      <a href="{{ route('ZonesNew') }}"><i class="fa fa-plus" aria-hidden="true"></i> <i class="fa fa-address-card" aria-hidden="true"></i></a>
  </div>
  <div class="card-body" style=" overflow: auto; height:70vh;">

      <table class="table table-striped" >
        <thead>
          <tr>
            <th scope="col">Editer</th>
            <th scope="col">Nom</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($zones as $zone)
              <tr>
                  <th scope='row'><a href="{{ route('ZonesEdit', ['n' => $zone->id]) }}"><i class="fa fa-edit deep-orange-text" aria-hidden="true"></i></a></th>
                <td>{{ $zone->nom }}</td>

            </tr>
          @endforeach
        </tbody>
      </table>
  </div>

</div>

@endsection
