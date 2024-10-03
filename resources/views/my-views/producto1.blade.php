@extends('my-layouts.layout')

@section('title', 'Detalles del Producto - Valhalla')

@section('content')
    <h1>Aston Martin Valhalla</h1>
    <img src="{{ asset('img/valhalla.png') }}" alt="Producto 1" class="product-image">
    <table>
        <tr>
            <th>Característica</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>Aston Martin Valhalla</td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>$800,000.00</td>
        </tr>
        <tr>
            <td>Descripción</td>
            <td>El Aston Martin Valhalla presenta un diseño evolucionado respecto al visto en el prototipo original.</td>
        </tr>
    </table>
    <a href="{{ url('/') }}" class="back-link">Volver al Índice</a>
@endsection
