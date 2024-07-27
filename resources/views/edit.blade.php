@extends('layout')

@section('title','Editar Serivicio')

@section('content')

@auth
<img src="/storage/{{ $servicios->image }}" alt="{{ $servicios->titulo }}" width="300" height="100">
<h2 style="text-align: center;">Editar nuevo servicio</h2>
@endauth

<form action="{{ route('servicios.update', $servicios) }}" method="post" enctype="multipart/form-data">
@method('PATCH')
@include('partials.form',['btnText'=>'Guardar'])
</form>


@endsection
