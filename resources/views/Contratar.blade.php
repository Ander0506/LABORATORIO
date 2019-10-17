@extends('Master')

@section('content')
<div class="col-lg-12">
    <div class="row ">
        <form method="POST" action="{{route('contratar')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12 col-sm-12">
                <select class="browser-default custom-select" name="AnaCodigo">
                    @foreach($analisis as $analisi)
                        <option value={!! $analisi -> AnaCodigo !!}>{!! $analisi -> AnaDescripcion !!}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-12 col-sm-12">
                <button class="btn btn-default" type="submit">Buscar</button>
            </div>
        </form>
    </div>
    <br>
    <div class="row ">
        @if ($laboratorioanalisis -> isEmpty())
            <DIV CLASS="justify-content-center">
                <CENTER>
                    <div class="alert alert-info col-sm-12 " role="alert">
                        <CENTER><STRONG>SELECIONE UN ANALISIS Y PRESIONE BUSCAR</STRONG></CENTER>
                    </div>
                </CENTER>
            </DIV>
        @else
            @foreach($laboratorioanalisis as $laboratorioanalisi)
                <div class="col-lg-3 col-sm-12">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title" style="text-transform: uppercase">{!! $laboratorioanalisi -> LabNombre !!}</h4>
                            <p class="card-text">Direccion: {!! $laboratorioanalisi -> LabDireccion !!}</p>
                            <p class="card-text">Telefono: {!! $laboratorioanalisi -> LabTelefono !!}</p>
                            <p class="card-text">Email: {!! $laboratorioanalisi -> LabEmail !!}</p>
                            <a class="btn btn-success btn-sm">$ {!! $laboratorioanalisi -> AnaLabPrecio !!} COP</a>
                        </div>
                        <div class="card-footer text-muted success-color white-text">
                            <p class="mb-0">SOLICITAR</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
