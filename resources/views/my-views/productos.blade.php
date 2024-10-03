@extends('my-layouts.layout')

@section('title', 'Tienda - Índice de Productos')

@section('content')
    <h1>Aston Martin</h1>
    <div class="product-list">
        <div class="product">
            <img src="{{ asset('img/valhalla.png') }}" alt="Valhalla">
            <h2>Valhalla</h2>
            <a href="{{ url('/producto/1') }}">Ver detalles</a>
        </div>
        <div class="product">
            <img src="{{ asset('img/Valkyrie.png') }}" alt="Valkyrie">
            <h2>Valkyrie</h2>
            <a href="{{ url('/producto/2') }}">Ver detalles</a>
        </div>
    </div>
@endsection
