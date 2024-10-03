@extends('my-layouts.layout')

@section('title', 'Detalles del Producto - Valkyrie')

@section('content')
    <h1>Aston Martin Valkyrie</h1>
    <img src="{{ asset('img/Valkyrie.png') }}" alt="Producto 2" class="product-image">
    <table>
        <tr>
            <th>Característica</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>Aston Martin Valkyrie</td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>$3,499,999.00</td>
        </tr>
        <tr>
            <td>Descripción</td>
            <td>Colaboración entre Aston Martin y Red Bull Racing, para crear un coche totalmente utilizable como coche de carretera.</td>
        </tr>
    </table>
    <a href="{{ url('/') }}" class="back-link">Volver al Índice</a>
@endsection
