@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4">WELCOME</h1>
            <p class="lead">Welcome to the Laravel project, this is the beta version</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col text-center">
            @auth
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Hola, {{ auth()->user()->name }}!</h4>
                    <p>Nos molesta tu presencia</p>
                    <hr>
                    <p class="mb-0">Prueba diferentes opciones para verificar la pagina</p>
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">WELCOME</h4>
                    <p>Por favor, <a href="{{ route('login') }}" class="alert-link">INICIA SESION</a> para acceder a todas las funcionalidades.</p>
                </div>
            @endauth
        </div>
    </div>
</div>
@endsection