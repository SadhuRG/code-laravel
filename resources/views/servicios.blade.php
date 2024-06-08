@extends('layout')

@section('title','Servicio')

@section('content')
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
