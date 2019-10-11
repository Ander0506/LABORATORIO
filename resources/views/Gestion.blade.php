@extends('Master')

@section('content')
    <DIV CLASS="row justify-content-center" STYLE="MARGIN-top:10%;">
        @if ($usuariolaboratorios->isEmpty())
            <DIV CLASS="justify-content-center">
                <CENTER>
                    <div class="alert alert-danger col-sm-6 " role="alert">
                        <CENTER><STRONG>NO HAY ANALISIS DISPONIBLES</STRONG></CENTER>
                    </div>
                </CENTER>
            </DIV>
        @else
        <table class="table table-striped col-sm-8" style="border: 2px solid deepskyblue">
            <thead>
            <tr>
                <th scope="col">Solicitante</th>
                <th scope="col">Analisis</th>
                <th scope="col">Estado</th>
                <th scope="col">Resultado</th>
                <th scope="col">Actualizar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuariolaboratorios as $usuariolaboratorio)
                <tr>
                    <th>{!! $usuariolaboratorio -> UsuNombre !!}</th>
                    <th>{!! $usuariolaboratorio -> AnaDescripcion !!}</th>
                    <th>{!! $usuariolaboratorio -> Estado !!}</th>
                    <th>{!! $usuariolaboratorio -> Resultado !!}</th>
                    <th>actualizar</th>
                </tr>
            @endforeach
            </tbody>
        </table>
        @ENDIF
    </DIV>


@endsection
