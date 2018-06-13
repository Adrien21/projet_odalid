@extends('layouts.navigation')

@section('titre', 'Gâches')

@section('content')
  <h1 class="text-center">Gâches - {{ $gache->nom }}</h1>
        <form name="modif" action="" method="POST">
            <p>Id : {{ $gache->id }}</p>
            <p>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" name="nom" value="{{ $gache->nom }}">
            </p>

            {{ csrf_field() }}
            <input type="submit" value="Valider">
        </form>
            <tr>
              <th scope='row'>{{ $gache->id }}</th>
              <td>{{ $gache->nom }}</td>
          </tr>
      </tbody>
    </table>

@endsection
