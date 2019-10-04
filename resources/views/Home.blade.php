@extends('Master')

@section('content')
    <h1>Pagina Home</h1>
    <h3>Usuarios</h3>

    <ul>
        @forelse($usuarios as $usuario)
            <li>{{$usuario['nombre']}}</li>
        @empty
            <li>No hay usuarios</li>
        @endforelse
    </ul>

    <h3>Laboratorios</h3>

    <ul>
        @forelse($laboratorios as $laboratorio)
            <li>{{$laboratorio['nombre']}}</li>
        @empty
            <li>No hay usuarios</li>
        @endforelse
    </ul>
@endsection
