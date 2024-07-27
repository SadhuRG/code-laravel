@csrf

    <ul style="list-style-position: inside; padding: 0; display: inline-block; text-align: left;">
        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="titulo" style="margin-right: 10px;">Titulo</label>
            <input type="text" name="titulo" value="{{ old('titulo',$servicios->titulo) }}" style="flex-grow: 1; margin-right: 10px;">
        </li>
        @if ($errors->has('titulo'))
            <li style="color: red; margin-bottom: 10px;">{{ $errors->first('titulo') }}</li>
        @endif

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="description" style="margin-right: 10px;">Descripcion</label>
            <input type="text" name="description" value="{{ old('description',$servicios->description) }}" style="flex-grow: 1; margin-right: 10px;">
        </li>
        @if ($errors->has('description'))
            <li style="color: red; margin-bottom: 10px;">{{ $errors->first('description') }}</li>
        @endif

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <span style="margin-right: 10px;">•</span>
            <label for="image" style="margin-right: 10px;">Imagen</label>
            <input type="file" name="image" value="{{ old('image',$servicios->image) }}" style="flex-grow: 1; margin-right: 10px;">
        </li>
        @if ($errors->has('image'))
            <li style="color: red; margin-bottom: 10px;">{{ $errors->first('image') }}</li>
        @endif


        <li style="display: flex; justify-content: center; margin-top: 20px;">
            <button type="submit" style="padding: 10px 20px;">{{ $btnText }}</button>
        </li>
    </ul>