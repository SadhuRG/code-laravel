@extends('layout')

@section('title','Editar Serivicio')

@section('content')

<h2 style="text-align: center;">Editar nuevo servicio</h2>

@if($errors->any())
    <ul>
        @foreach($errors->all () as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


<form action="{{ route('servicios.update', $servicios) }}" method="post" style="text-align: center;">
    @csrf @method('PATCH')

    <ul style="list-style-position: inside; padding: 0; display: inline-block; text-align: left;">
        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="titulo" style="margin-right: 10px;">Titulo</label>
            <input type="text" name="titulo" value="{{ $servicios->titulo }}" style="flex-grow: 1; margin-right: 10px;">
        </li>


        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="description" style="margin-right: 10px;">Descripcion</label>
            <input type="text" name="description" value="{{ $servicios->description }}" style="flex-grow: 1; margin-right: 10px;">
        </li>


        <li style="display: flex; justify-content: center; margin-top: 20px;">
            <button type="submit" style="padding: 10px 20px;">Actualizar</button>
        </li>
    </ul>
</form>

@endsection
