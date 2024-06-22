@extends('layout')

@section('title', 'Crear Servicio')

@section('content')

<h2 style="text-align: center;">Crear nuevo servicio</h2>

<form action="{{ route('servicios.store') }}" method="post" style="text-align: center;">
@include('partials.form',['btnText'=>'Crear'])
</form>

@endsection
