@extends('layouts.navigation')

@section('titre', 'Badges')

@section('content')
    <h1 class="text-center">Badges - @yield('titre')</h1>
<form name="modif" action="" method="POST">
    <p>@yield('id')<input type='hidden' name="id" value="@yield('id')"></p>
    <p>
        <label for="nom">Nom* : </label>
        <input type="text" id="nom" name="nom" value="@yield('nom')" required>
    </p>
    <p>
        <label for="prenom">Prénom : </label>
        <input type="text" id="prenom" name="prenom" value="@yield('prenom')">
    </p>
    <p>
        <label for="email">Email* : </label>
        <input type="email" id="email" name="email" value="@yield('email')" required>
    </p>
    <p>
        <label for="dateDeNaissance">dateDeNaissance : </label>
        <input type="date" id="dateDeNaissance" name="dateDeNaissance" value="@yield('dateDeNaissance')" required>
    </p>
    <p>
        <label for="numeroIdentite">Numéro d'identité : </label>
        <input type="text" id="numeroIdentite" name="numeroIdentite" value="@yield('numeroIdentite')">
    </p>
    <p>
        <label for="sexe">Sexe : </label>
        <input type="text" id="sexe" name="sexe" value="@yield('sexe')">
    </p>
    <p>
        <label for="type">Type (référent) :</label>
        <input type="text" id="type" name="type" value="@yield('type')">
    </p>
    <p>
        <label for="groupe">Groupe : </label>
        <select name="groupe" id="groupe">
            <option value="" @isset($badge->groupe) @else {{ 'selected' }} @endisset>Aucun</option>
        @foreach($referents as $referent)
            <option value="{{ $referent->id }}" @isset($badge->groupe) @if($badge->groupe == $referent->id) {{ 'selected' }} @endif @endisset>{{ $referent->type }}</option>
        @endforeach
        </select>
    </p>
    <p>
        <label for="dateDeValidite">dateDeValidite* : </label>
        <input type="date" id="dateDeValidite" name="dateDeValidite" value="@yield('dateDeValidite')" required>
    </p>

    {{ csrf_field() }}
    <input type="submit" value="Valider">
</form>

<p>@yield('delete')</p>

@endsection
