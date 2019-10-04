@extends('Master')

@section('content')
    <h1>Pagina About</h1>

    <ul>
        @forelse($usuarios as $usuario)
        <li>{{$usuario->UsuNombre}}</li>
        @empty
            <li>hola</li>
        @endforelse
    </ul>
@endsection
