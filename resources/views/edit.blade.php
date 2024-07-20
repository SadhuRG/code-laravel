@extends('layout')

@section('title','Editar Serivicio')

@section('content')

@auth
<h2 style="text-align: center;">Editar nuevo servicio</h2>
@endauth

<form action="{{ route('servicios.update', $servicios) }}" method="post" style="text-align: center;">
@method('PATCH')
@include('partials.form',['btnText'=>'Guardar'])
</form>


@endsection
