<<<<<<< HEAD
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Zones Accueil</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <header>
    <h1>Zones</h1>
  </header>
  <br>
  <main>
    <section class="zones">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Entreprise</th>
          <th scope="col">Responsable de l'entreprise</th>
          <th scope="col">Utilisateurs</th>
          <th scope="col">Salles</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td> Zone 1 </td>
          <td> Sens Pratique </td>
          <td> Mme SensPratique </td>
          <td> <a href="/zones/utilisateurs">Liste des Utilisateurs</a> </td>
          <td> <a href="/zones/salles">Liste des salles</a> </td>


        </tr>
        <tr>
          <th scope="row">2</th>
          <td> Zone 2</td>
          <td> Odalid </td>
          <td> M Odalid </td>
          <td> <a href="/zones/utilisateurs">Liste des Utilisateurs</a> </td>
          <td> <a href="/zones/salles">Liste des salles</a> </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Zone 3</td>
          <td> Webforce3</td>
          <td> Jean Baptiste Badaire</td>
          <td> <a href="/zones/utilisateurs">Liste des Utilisateurs</a> </td>
          <td> <a href="/zones/salles">Liste des salles</a> </td>
        </tr>
      </tbody>
    </table>
    </section>
  </main>


</body>
</html>
=======
@extends('layouts.navigation')

@section('titre', 'Zones')

@section('content')
	<h1 class="text-center">Accueil zones</h1>

	<ul class="nav nav-tabs justify-content-around col-md-4 offset-md-4" id="myTab" role="tablist">
  		<li class="nav-item">
  			<a class="nav-link" href="#zone_1" id="zone_1-tab" data-toggle="tab" role="tab" aria-controls="zone_1" aria-selected="false">Zone 1</a>
  		</li>
	  	<li class="nav-item">
	  		<a class="nav-link" href="#zone_2" id="zone_2-tab" data-toggle="tab" role="tab" aria-controls="zone_2" aria-selected="false">Zone 2</a>
	  	</li>
	  	<li class="nav-item">
	  		<a class="nav-link" href="#zone_3" id="zone_3-tab" data-toggle="tab" role="tab" aria-controls="zone_3" aria-selected="false">Zone 3</a>
	  	</li>
	</ul>

	<!-- S'affiche au onclick sur une zone -->
	<div class="tab-content mt-4">
		<!-- Contenu zone 1 -->
		<div class="tab-pane" id="zone_1" role="tabpanel" aria-labelledby="zone_1-tab">
			<ul class="list-group col-md-8 offset-md-2">
				<li class="list-group-item list-group-item-info d-flex flex-wrap justify-content-between">
					Porte d'entrée

					<!-- Essai bouton porte ouverte/fermée -->
					<label class="switch">
  						<input type="checkbox">
  						<span class="slider"></span>
  					</label>
  					<p class="m-0">test2</p>
				</li>

				<li class="list-group-item">
					Porte du bureau
				</li>

				<li class="list-group-item list-group-item-info">
					Porte du laboratoire
				</li>

				<li class="list-group-item">
					Porte des stocks
				</li>

				<li class="list-group-item list-group-item-info">
					Porte de la cafétéria
				</li>
			</ul>
		</div>

		<!-- Contenu zone 2 -->
		<div class="tab-pane" id="zone_2" role="tabpanel" aria-labelledby="zone_2-tab">
			<ul class="list-group col-md-8 offset-md-2">
				<li class="list-group-item list-group-item-info d-flex flex-wrap justify-content-between">
					Porte des toilettes <p class="m-0">test1</p><p class="m-0">test2</p>
				</li>

				<li class="list-group-item">
					Porte du toit
				</li>

				<li class="list-group-item list-group-item-info">
					Porte du sous-sol
				</li>

				<li class="list-group-item">
					Porte du secrétariat
				</li>

				<li class="list-group-item list-group-item-info">
					Porte de la cage
				</li>
			</ul>
		</div>

		<!-- Contenu zone 3 -->
		<div class="tab-pane" id="zone_3" role="tabpanel" aria-labelledby="zone_3-tab">
			<ul class="list-group col-md-8 offset-md-2">
				<li class="list-group-item list-group-item-info">
					Porte des stocks
				</li>

				<li class="list-group-item">
					Porte du bureau
				</li>

				<li class="list-group-item list-group-item-info d-flex flex-wrap justify-content-between">
					Porte d'entrée <p class="m-0">test1</p><p class="m-0">test2</p>
				</li>

				<li class="list-group-item">
					Porte de la cafétéria
				</li>

				<li class="list-group-item list-group-item-info">
					Porte du laboratoire
				</li>
			</ul>
		</div>
	</div>

<script>
	function show_zone() {
		$('#myTab li:last-child a').tab('show')
	}
</script>

@endsection
>>>>>>> master
