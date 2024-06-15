@extends('layout')

@section('title', 'Crear Servicio')

@section('content')

<h2 style="text-align: center;">Crear nuevo servicio</h2>

@if($errors->any())

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('servicios.store') }}" method="post" style="text-align: center;">
    @csrf

    <ul style="list-style-position: inside; padding: 0; display: inline-block; text-align: left;">
        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="titulo" style="margin-right: 53px;">Titulo</label>
            <input type="text" name="titulo" id="titulo">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="description" style="margin-right: 10px;">Descripcion</label>
            <input type="text" name="description" id="description">
        </li>

        <li style="display: flex; justify-content: center; margin-top: 10px;">
            <button type="submit">Guardar</button>
        </li>
    </ul>
</form>

@endsection
