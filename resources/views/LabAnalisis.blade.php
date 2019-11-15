@extends('Master')

@section('content')

    <div class="justify-content-center col-sm-12">
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="{{route('labanalisis')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">AGREGAR</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <spam>Analisis</spam>
                                <select class="browser-default custom-select" name="AnaCodigo">
                                    @foreach($analisis as $analisi)
                                        <option value={!! $analisi -> AnaCodigo !!}>{!! $analisi -> AnaDescripcion !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form mb-5">
                                <input type="int" id="defaultForm-email" class="form-control validate" name="AnaLabPrecio">
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Valor</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="defaultForm-Tiempo" class="form-control validate" name="AnaLabTiempo">
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Tiempo de Entrega</label>
                            </div>
                            <div class="md-form mb-5">
                                <spam>¿Disponible?</spam>
                                <select class="browser-default custom-select" name="AnaLabDisponible">
                                        <option value='SI'>SI</option>
                                        <option value='NO'>NO</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-default" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- Editable table -->
        <div class="card col-sm-8 " style="margin-left: 15%; margin-top: 3%;">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">LISTADO DE ANALISIS</h3>
            <div class="text-center" style="float: right !important; margin-top: -7%;">
                <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm" style="float: right !important;">Agregar Nuevo Analisis</a>
            </div>
            <div class="card-body">
                <div id="table" class="table-editable">
                    @if ($laboratorioanalisis->isEmpty())
                        <DIV CLASS="justify-content-center">
                            <CENTER>
                                <div class="alert alert-danger col-sm-6 " role="alert">
                                    <CENTER><STRONG>NO HAY ANALISIS EN ESTE MOMENTO</STRONG></CENTER>
                                </div>
                            </CENTER>
                        </DIV>
                    @else
                        <table id="TableLab" class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                            <tr>
                                <th class="text-center th-sm">Analisis</th>
                                <th class="text-center th-sm">Valor</th>
                                <th class="text-center th-sm">Tiempo</th>
                                <th class="text-center th-sm">Disponibilidad</th>
                                <th class="text-center th-sm">Actualizar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($laboratorioanalisis as $laboratorioanalisi)
                                <tr>
                                    <td class="pt-3-half" contenteditable="true">{!! $laboratorioanalisi -> AnaDescripcion !!}</td>
                                    <td class="pt-3-half" contenteditable="true">{!! $laboratorioanalisi -> AnaLabPrecio !!}</td>
                                    <td class="pt-3-half" contenteditable="true">{!! $laboratorioanalisi -> AnaLabTiempo !!} Dias</td>

                                    <td class="pt-3-half" contenteditable="true">{!! $laboratorioanalisi -> AnaLabDisponible !!}</td>
                                    <td><a href="" class="" data-toggle="modal" data-target="{{'#modalupdate'.$laboratorioanalisi -> LanAnaCodigo}}">Click</a></td>
                                    <div class="modal fade" id="{{'modalupdate'.$laboratorioanalisi -> LanAnaCodigo}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                         aria-hidden="true">
                                        <form method="POST" action="{{route('labanalisisupdate',$laboratorioanalisi -> LanAnaCodigo)}}" enctype="multipart/form-data">
                                            @csrf
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title w-100 font-weight-bold">Actualizar Registro</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                    <div class="modal-body mx-3">
                                                        <div class="md-form mb-5">
                                                            <input type="int" class="form-control validate" name="AnaLabPrecio2">
                                                            <label data-error="wrong" data-success="right" >Valor</label>
                                                        </div>
                                                        <div class="md-form mb-5">
                                                            <input type="text" class="form-control validate" name="AnaLabTiempo2">
                                                            <label data-error="wrong" data-success="right" >Tiempo de Entrega</label>
                                                        </div>
                                                        <div class="md-form mb-5">
                                                            <spam>¿Disponible?</spam>
                                                            <select class="browser-default custom-select" name="AnaLabDisponible2">
                                                                <option value='SI'>SI</option>
                                                                <option value='NO'>NO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-default">Actualizar</button>
                                                    </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </tr>
                            @endforeach
                            <!-- This is our clonable table line -->
                            </tbody>
                        </table>
                    @ENDIF
                </div>
            </div>
        </div>
        <!-- Editable table -->

@endsection
