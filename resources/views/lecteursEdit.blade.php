@extends('layouts.navigation')

@section('titre', 'Lecteurs')

@section('content')
  <h1 class="text-center">Lecteurs - {{ $lecteur->nom }}</h1>
        <form name="modif" action="" method="POST">
            <p>Id : {{ $lecteur->id }}</p>
            <p>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" name="nom" value="{{ $lecteur->nom }}">
            </p>

            {{ csrf_field() }}
            <input type="submit" value="Valider">
        </form>
            <tr>
              <th scope='row'>{{ $lecteur->id }}</th>
              <td>{{ $lecteur->nom }}</td>
          </tr>
      </tbody>
    </table>

@endsection
