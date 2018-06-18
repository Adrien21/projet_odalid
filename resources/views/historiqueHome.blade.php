@extends('layouts.navigation')

@section('titre', 'Historique')

@section('content')

<div class="espace" style="height:13vh;"></div>
<div class="card mx-auto wow fadeIn" style="width: 87vw; height:81vh">
  <div class="card-header">
    <h1 class="text-center">Accueil historique</h1>
  </div>
  <div class="card-body" style=" overflow: auto; height:70vh;">
      <table class="table table-striped">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Date Evenement</th>
          <th scope="col">Porte</th>
          <th scope="col">Etat</th>
        </tr>
        </thead>
        <tbody id="histo">
          @include('historiqueLoad')
        </tbody>
      </table>
    </div>
    <p class="m-2">
      {{ csrf_field() }}
      <input type="text" id="search" name="recherche" placeholder="Rechercher un nom" value="">
    </p>
    <!-- COrriger bug navigation > mettre le for each dans la mm page-->
    <div class="mx-auto"><tr><th colspan="5">{{ $historiques->links() }}</th></tr>

    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/search_script.js') }}"></script>
@endsection
