@extends('Master')

@section('content')
    @if ($laboratorios->isEmpty())
        <div>No hay Mensajes</div>
        @else
        @foreach($laboratorios as $laboratorio)
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="..." alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{!! $laboratorio -> LabNombre !!}</h4>
                    esta es una descripcion de prueba
                </div>
            </div>
        @endforeach
    @endif
@endsection
