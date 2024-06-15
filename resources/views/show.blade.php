@extends('layout')

@section('title', 'Servicio | ' . $servicios->titulo)

@section('content')
<h1>{{ $servicio->titulo }}</h1>
<h2>{{ $servicio->description }}</h2>
<h3>{{ $servicio->created_at->diffForHumans() }}</h3>
@endsection
