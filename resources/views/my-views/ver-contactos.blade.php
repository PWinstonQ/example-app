@extends('my-layouts.layout')

@section('content')
    <h1>Lista de Contactos</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Publicidad</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $contacto)
                <tr>
                    <td>{{ $contacto->nombre }}</td>
                    <td>{{ $contacto->email }}</td>
                    <td>{{ $contacto->mensaje }}</td>
                    <td>{{ $contacto->publicidad ? 'Sí' : 'No' }}</td>
                    <td>{{ $contacto->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
