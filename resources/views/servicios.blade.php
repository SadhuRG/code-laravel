@extends('layout')

@section('title','Servicio')

@section('content')

    @auth
    <h2 style="text-align: center; margin-top: 15px;">
        <a style="color: red; padding: 1px 5px; border: 3px solid red; border-radius: 15px; text-decoration: none;" href="{{ route('servicios.create') }}">Nuevo Servicio</a>
    </h2>
    @endauth

    <ul>
        @if($servicios)
            @foreach($servicios as $servicio)
                <td>
                    @if($servicio->image)
                    <img src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}" width="50" height="50">
                    @endif
                </td>

                <td><a href="{{ route('servicios.show',$servicio) }}">{{ $servicio->titulo }}</a></td>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar</li>
        @endif
    </ul>   
@endsection
