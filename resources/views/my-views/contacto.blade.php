@extends('my-layouts.layout')

@section('content')
    <h1>Contacto</h1>

    <form method="POST" action="{{ url('/contacto') }}">
        @csrf

        <!-- Nombre -->
        <label for="nombre">{{ __('Nombre') }}:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
        <br/>

        <!-- Email -->
        <label for="email">{{ __('Email') }}:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        <br/>

        <!-- Mensaje -->
        <label for="mensaje">{{ __('Mensaje') }}:</label>
        <textarea id="mensaje" name="mensaje" required>{{ old('mensaje') }}</textarea>
        <br/>

        <!-- Publicidad -->
        <input type="checkbox" id="publicidad" name="publicidad" @checked(old('publicidad'))>
        <label for="publicidad">{{ __('Recibir Publicidad') }}</label>
        <br/>

        <!-- Botón de enviar -->
        <input type="submit" value="{{ __('Enviar') }}">
    </form>

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
