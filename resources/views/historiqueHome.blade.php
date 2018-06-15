@extends('layouts.navigation')

@section('titre', 'Historique')

@section('content')

<div class="espace" style="height:15vh;"></div>
<div class="card mx-auto " style="width: 80vw;">
  <div class="card-body">

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
    </div>
  </div>  
@endsection

@section('scripts')
  <script src="{{ asset('js/search_script.js') }}"></script>
@endsection
