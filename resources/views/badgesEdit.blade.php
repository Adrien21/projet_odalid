@extends('layouts.navigation')

@section('titre', 'Badges')

@section('content')
  <h1 class="text-center">Badges - {{ $badge->nom }}</h1>
        <form name="modif" action="" method="POST">
            <p>Id : {{ $badge->id }}</p>
            <p>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" name="nom" value="{{ $badge->nom }}">
            </p>

            {{ csrf_field() }}
            <input type="submit" value="Valider">
        </form>
            <tr>
              <th scope='row'>{{ $badge->id }}</th>
              <td>{{ $badge->nom }}</td>
              <td>{{ $badge->prenom }}</td>
              <td>{{ $badge->sexe }}</td>
              <td>{{ $badge->numeroID }}</td>
              <td>{{ $badge->dateDeValidite }}</td>
              <td>{{ $badge->type }}</td>
              <td>{{ $badge->email }}</td>
              <td>{{ $badge->dateDeNaissance }}</td>
              <td>{{ $badge->numeroIdentite }}</td>
          </tr>
      </tbody>
    </table>

@endsection
