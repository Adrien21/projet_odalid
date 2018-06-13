@extends('layouts.navigation')

@section('titre', 'Salles')

@section('content')
  <h1 class="text-center">Salles - {{ $salle->nom }}</h1>
        <form name="modif" action="" method="POST">
            <p>Id : {{ $salle->id }}</p>
            <p>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" name="nom" value="{{ $salle->nom }}">
            </p>

            {{ csrf_field() }}
            <input type="submit" value="Valider">
        </form>
            <tr>
              <th scope='row'>{{ $salle->id }}</th>
              <td>{{ $salle->nom }}</td>
          </tr>
      </tbody>
    </table>

@endsection
