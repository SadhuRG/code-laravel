@extends('layout')

@section('title','Editar Serivicio')

@section('content')

<h2 style="text-align: center;">Editar nuevo servicio</h2>
<form action="{{ route('servicios.update', $servicios) }}" method="post" style="text-align: center;">
@method('PATCH')
@include('partials.form',['btnText'=>'Guardar'])
</form>

@endsection
