@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="height: 75vh;">
            <div class="card text-center">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté !
                    <!-- (Derniers évènements ou laisser ce message ?) -->
                </div>
                <div class="list-group d-inline-flex flex-wrap flex-row justify-content-center text-center col-md-12 mt-3 dropright">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary w-25 py-5 m-2 text-center col-md-3">Utilisateurs</a>

                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary w-25 py-5 m-2 text-center col-md-3">Historique</a>

                    <a href="#" class="dropdown-toggle list-group-item list-group-item-action list-group-item-primary w-25 py-5 m-2 text-center col-md-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="menu_infrastructure">Infrastructure</a>
                    <div class="dropdown-menu" aria-labelledby="menu_infrastructure">
                        <a href="#" class="dropdown-item">Zone</a>
                        <a href="#" class="dropdown-item">Porte</a>
                        <a href="#" class="dropdown-item">Relais</a>
                        <a href="#" class="dropdown-item">Gâche</a>
                        <a href="#" class="dropdown-item">Lecteur</a>
                    </div>

                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary w-25 py-5 m-2 text-center col-md-3"></a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary w-25 py-5 m-2 text-center col-md-3"></a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
