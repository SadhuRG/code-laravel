@extends('layout')

@section('title', 'Crear Servicio')

@section('content')

<h2 style="text-align: center;">Crear nuevo servicio</h2>

<form action="{{ route('servicios.store') }}" method="post" style="text-align: center;">
    @csrf

    <ul style="list-style-position: inside; padding: 0; display: inline-block; text-align: left;">
        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="titulo" style="margin-right: 10px;">Titulo</label>
            <input type="text" name="titulo" style="flex-grow: 1; margin-right: 10px;">
        </li>
        @if ($errors->has('titulo'))
            <li style="color: red; margin-bottom: 10px;">{{ $errors->first('titulo') }}</li>
        @endif

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="description" style="margin-right: 10px;">Descripcion</label>
            <input type="text" name="description" style="flex-grow: 1; margin-right: 10px;">
        </li>
        @if ($errors->has('description'))
            <li style="color: red; margin-bottom: 10px;">{{ $errors->first('description') }}</li>
        @endif

        <li style="display: flex; justify-content: center; margin-top: 20px;">
            <button type="submit" style="padding: 10px 20px;">Guardar</button>
        </li>
    </ul>
</form>

@endsection
