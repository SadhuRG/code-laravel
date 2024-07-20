@extends('layout')

@section('title', 'Servicio | ' . $servicios->titulo)

@section('content')

@auth
<h1 style="color: #007bff; font-size: 40px; font-weight: normal;">{{ $servicios->titulo }}</h1>

<a href="{{ route('servicios.edit', $servicios) }}" style="display: inline-block; padding: 8px 16px; background-color: red; color: white; border: 2px solid black; border-radius: 20px; text-decoration: none; text-align: center; font-size: 20px; margin-right: 20px;">Editar</a>

<form action="{{ route('servicios.destroy', $servicios) }}" method="POST" style="display: inline-block;">
    @csrf @method('DELETE')
    <button type="submit" style="display: inline-block; padding: 8px 16px; background-color: red; color: white; border: 2px solid black; border-radius: 20px; text-decoration: none; text-align: center; font-size: 20px;">Eliminar</button>
</form>
@endauth

<div style="border: 3px solid #ccc; padding: 10px; width: 80%; max-width: 600px; margin: 20px 0; font-size: 16px;">

<h2>{{ $servicios->description }}</h2>

<h3>{{ $servicios->created_at->diffForHumans() }}</h3>

</div>


@endsection