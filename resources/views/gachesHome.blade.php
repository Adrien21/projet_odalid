@extends('layouts.navigation')

@section('titre', 'Gâches')

@section('content')

	<div class="espace" style="height:13vh;"></div>
	<div class="card mx-auto" style="width: 87vw; height:81vh">
  <div class="card-header">
    <h1 class="text-center">Gaches</h1>
      <a href="{{ route('GachesNew') }}"><i class="fa fa-plus" aria-hidden="true"></i> <i class="fa fa-address-card" aria-hidden="true"></i></a>
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

          @foreach ($gaches as $gache)
              <tr>
                  <th scope='row'><a href="{{ route('GachesEdit', ['n' => $gache->id]) }}"><i class="fa fa-edit deep-orange-text" aria-hidden="true"></i></a></th>
                <td>{{ $gache->nom }}</td>

            </tr>
          @endforeach
        </tbody>
      </table>
  </div>

</div>

@endsection
