@extends('layouts.badges')

@section('titre', $badge->nom)
@section('id', $badge->id)
@section('nom', $badge->nom)
@section('email', $badge->email)
@section('dateDeValidite', $badge->dateDeValidite)
