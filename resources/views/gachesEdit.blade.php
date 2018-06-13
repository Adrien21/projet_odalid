@extends('layouts.gaches')

@section('titre', $gache->nom)

@section('id', $gache->id)
@section('ip', $gache->ip)
@section('mac', $gache->mac)
@section('nom', $gache->nom)
@section('type', $gache->type)