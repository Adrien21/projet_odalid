@extends('layouts.page')

@section('titre','accueil')

@section('header')
    @parent
    <p>Element ajouté au header principale</p>
@endsection

@section('content')

<p class="text-white">Coucou</p>

@endsection