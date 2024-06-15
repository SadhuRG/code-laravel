@extends('layout')

@section('title','Servicio')

@section('content')

    <h2 style="text-align: center;">
        <a style="color: red; padding: 2px 20px; border: 3px solid red; border-radius: 15px; text-decoration: none;" href="{{ route('servicios.create') }}">Nuevo Servicio</a>
    </h2>

    <ul>
        @if($servicios)
            @foreach($servicios as $servicio)
                 <td><a href="{{ route('servicios.show',$servicio) }}">{{ $servicio->titulo }}</a></td>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar</li>
        @endif
    </ul>   
@endsection
