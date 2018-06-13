@extends('layouts.lecteurs')

@section('titre', $lecteur->nom)

@section('id', $lecteur->id)
@section('ip', $lecteur->ip)
@section('mac', $lecteur->mac)
@section('nom', $lecteur->nom)
@section('porte_id', $lecteur->porte_id)