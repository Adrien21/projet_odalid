@extends('layouts.navigation')

@section('titre', 'Salles')

@section('content')

  <div class="espace" style="height:13vh;"></div>
  <div class="card mx-auto" style="width: 87vw; height:81vh">
  <div class="card-header">
    <h1 class="text-center">Salles</h1>
      <a href="{{ route('SallesNew') }}"><i class="fa fa-plus" aria-hidden="true"></i> <i class="fa fa-address-card" aria-hidden="true"></i></a>
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

          @foreach ($salles as $salle)
              <tr>
                  <th scope='row'><a href="{{ route('SallesEdit', ['n' => $salle->id]) }}"><i class="fa fa-edit deep-orange-text" aria-hidden="true"></i></a></th>
                <td>{{ $salle->nom }}</td>

            </tr>
          @endforeach
        </tbody>
      </table>
  </div>

</div>

@endsection
