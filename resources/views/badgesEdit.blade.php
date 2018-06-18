@extends('layouts.badges')

@section('titre', $badge->nom)

@section('id', $badge->id)
@section('nom', $badge->nom)
@section('prenom', $badge->prenom)
@section('email', $badge->email)
@section('dateDeNaissance', $badge->dateDeNaissance)
@section('numeroIdentite', $badge->numeroIdentite)
@section('sexe', $badge->sexe)
@section('type', $badge->type)
@section('dateDeValidite', $badge->dateDeValidite)

@section('delete')
    <p>
        <a href="{{ route('BadgesDelete', ['n' => $badge->id]) }}">Supprimer</a>
    </p>
@endsection