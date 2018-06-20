@extends('layouts.navigation')

@section('content')
<div class="espace" style="height:13vh;"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header h3">Bienvenue {{ Auth::user()->username }} </div>

                <div class="card-body"  style="overflow: auto; height: 75vh;">



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
                    @foreach ($historiques as $historique)
                        <tr>
                            <th scope='row'>{{ $historique->id }}</th>
                            <td>{{ $historique->identite_nom }}</td>
                            <td>{{ $historique->dateEvenement }}</td>
                            <td>{{ $historique->porte_nom }}</td>
                            <td>{{ $historique->etatEvenement }}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>



            </div>

        </div>
    </div>
</div>
@endsection
