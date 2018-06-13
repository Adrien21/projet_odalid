@extends('layouts.navigation')

@section('titre', 'Zones')

@section('content')
  <h1 class="text-center">Zones - {{ $zone->nom }}</h1>
        <form name="modif" action="" method="POST">
            <p>Id : {{ $zone->id }}</p>
            <p>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" name="nom" value="{{ $zone->nom }}">
            </p>

            {{ csrf_field() }}
            <input type="submit" value="Valider">
        </form>
            <tr>
              <th scope='row'>{{ $zone->id }}</th>
              <td>{{ $zone->nom }}</td>
          </tr>
      </tbody>
    </table>

@endsection
