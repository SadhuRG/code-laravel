@extends('layout')

@section('title', 'Servicio | ' . $servicios->titulo)

@section('content')
<h1>{{ $servicios->titulo }}</h1>
<a href="{{ route('servicios.edit',$servicios) }}">Editar</a>
<h2>{{ $servicios->description }}</h2>
<h3>{{ $servicios->created_at->diffForHumans() }}</h3>
@endsection
