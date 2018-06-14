@extends('layouts.navigation')

@section('titre', 'Historique')

@section('content')
  <h1 class="text-center">Accueil historique</h1>

      <p>
        {{ csrf_field() }}
        <input type="text" id="search" name="recherche" placeholder="Rechercher un nom" value="">
      </p>

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

@endsection

@section('scripts')
  <script src="{{ asset('js/search_script.js') }}"></script>
@endsection