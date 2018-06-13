@extends('layouts.navigation')

@section('titre', 'Badges')

@section('content')
  <h1 class="text-center">Accueil badges</h1>
        <form>
            <p>
            <label for="nom">Nom* : </label>
            <input type="text" id="nom" value="{{ $badge->nom }}">
            </p>

        </form>
        @foreach ($badges as $badge)
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
        @endforeach
      </tbody>
    </table>
  {{ $badges->links() }}

@endsection
