@extends('layout')

@section('title', 'Contacto')

@section('content')
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <div style="width: 100%; max-width: 600px; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background-color: #fff;">
        <h2 style="text-align: center; font-weight: bold; font-size: 24px; margin-bottom: 20px;">CONTACTO</h2>

        <form action="{{ route('contacto') }}" method="post">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="nombre" style="display: block; margin-bottom: 5px;">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{ old('nombre') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                @if ($errors->has('nombre'))
                    <span style="color: red;">{{ $errors->first('nombre') }}</span>
                @endif
            </div>

            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                @if ($errors->has('email'))
                    <span style="color: red;">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div style="margin-bottom: 15px;">
                <label for="asunto" style="display: block; margin-bottom: 5px;">Asunto</label>
                <input type="text" name="asunto" placeholder="Asunto" class="form-control" value="{{ old('asunto') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                @if ($errors->has('asunto'))
                    <span style="color: red;">{{ $errors->first('asunto') }}</span>
                @endif
            </div>

            <div style="margin-bottom: 20px;">
                <label for="mensaje" style="display: block; margin-bottom: 5px;">Mensaje</label>
                <textarea name="mensaje" placeholder="Mensaje" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; height: 100px;">{{ old('mensaje') }}</textarea>
                @if ($errors->has('mensaje'))
                    <span style="color: red;">{{ $errors->first('mensaje') }}</span>
                @endif
            </div>

            <div style="display: flex; justify-content: space-between;">
                <button type="submit" class="btn btn-primary" style="background-color: #008CBA; color: #fff; padding: 10px 20px; border: none; border-radius: 5px;">Enviar</button>
                <button type="reset" class="btn btn-secondary" style="background-color: #f44336; color: #fff; padding: 10px 20px; border: none; border-radius: 5px;">Cancelar</button>
            </div>
        </form>
    </div>
</div>
@endsection
