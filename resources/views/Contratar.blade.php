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
                            <p class="mb-0"><a href="" class="" data-toggle="modal" data-target="{{'#modalLoginForm'.$laboratorioanalisi -> LabCodigo}}">SOLICITAR</a></p>
                            <div class="modal fade" id="{{'modalLoginForm'.$laboratorioanalisi -> LabCodigo}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Actualizar Registro</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body mx-3">
                                                <div class="input-group">
                                                    <!-- Material input -->
                                                    <div class="md-form">
                                                        <input type="text" id="form1" class="form-control" VALUE="{!! $laboratorioanalisi -> LabNombre !!}" disabled>
                                                        <label for="form1">LABORATORIO</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-body mx-3">
                                                <div class="input-group">
                                                    <!-- Material input -->
                                                    <div class="md-form">
                                                        <input type="text" id="form2" class="form-control" VALUE="{!! $laboratorioanalisi -> AnaDescripcion !!}" disabled>
                                                        <label for="form1">ANALISIS</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-body mx-3">
                                                <div class="input-group">
                                                    <!-- Material input -->
                                                    <div class="md-form">
                                                        <input type="datetime-local" id="form3" class="form-control">
                                                        <label for="form1">FECHA Y HORA DE RECOGIDA</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-body mx-3">
                                                <select class="browser-default custom-select">
                                                    <option selected>Seleccione su metodo de pago</option>
                                                    <option value="Efectivo">Efectivo</option>
                                                    <option value="Plazo">Plazo</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="submit" class="btn btn-default">Actualizar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
