@extends('layouts.navigation')

@section('titre', 'Portes')

@section('content')
  <h1 class="text-center">Portes - {{ $porte->nom }}</h1>
        <form name="modif" action="" method="POST">
            <p>Id : {{ $porte->id }}</p>
            <p>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" name="nom" value="{{ $porte->nom }}">
            </p>

            {{ csrf_field() }}
            <input type="submit" value="Valider">
        </form>
            <tr>
              <th scope='row'>{{ $porte->id }}</th>
              <td>{{ $porte->nom }}</td>
          </tr>
      </tbody>
    </table>

@endsection
