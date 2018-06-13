@extends('layouts.portes')

@section('titre', $porte->nom)

@section('id', $porte->id)
@section('nom', $porte->nom)
@section('salle_id', $porte->salle_id)
@section('relais_id', $porte->relais_id)