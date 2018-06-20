@extends('layouts.navigation')

@section('titre', 'Historique')

@section('content')

<div class="espace" style="height:13vh;"></div>
<div class="card mx-auto wow fadeIn" style="width: 87vw; height:81vh">
  <div class="card-header">
    <h1 class="text-center">Accueil historique</h1>
      <p class="m-2">
          {{ csrf_field() }}
          <input type="text" id="search" name="recherche" placeholder="Rechercher un nom" value="">
      </p>
  </div>
  <div id="histo">
          @include('historiqueLoad')
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/search_script.js') }}"></script>
@endsection
