@extends('layouts.navigation')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="height: 75vh;">
            <div class="card text-center" style="margin-top: 20vh;">
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

                <!-- Menu d'accueil -->
                <div class="list-group d-inline-flex flex-wrap flex-row justify-content-center text-center col-md-12 my-3 dropright">
                    <a href="/utilisateurs" class="list-group-item list-group-item-action list-group-item-primary w-25 py-5 m-2 text-center col-md-3">Utilisateurs</a>

                    <a href="/historique" class="list-group-item list-group-item-action list-group-item-primary w-25 py-5 m-2 text-center col-md-3">Historique</a>

                    <a href="#" class="dropdown-toggle list-group-item list-group-item-action list-group-item-primary w-25 py-5 m-2 text-center col-md-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="menu_infrastructure">Infrastructure</a>
                    <!-- Dropdown d'infrastructure -->
                    <div class="dropdown-menu bg-light" aria-labelledby="menu_infrastructure">
                        <a href="/infrastructure/zones" class="dropdown-item">Zones</a>
                        <a href="/infrastructure/portes" class="dropdown-item">Portes</a>
                        <a href="/infrastructure/relais" class="dropdown-item">Relais</a>
                        <a href="/infrastructure/gaches" class="dropdown-item">Gâches</a>
                        <a href="/infrastructure/lecteurs" class="dropdown-item">Lecteurs</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
