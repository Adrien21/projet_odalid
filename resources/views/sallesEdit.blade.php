@extends('layouts.salles')

@section('titre', $salle->nom)

@section('id', $salle->id)
@section('nom', $salle->nom)
@section('zone_id', $salle->zone_id)