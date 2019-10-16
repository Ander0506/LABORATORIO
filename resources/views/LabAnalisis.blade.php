@extends('Master')

@section('content')

    <div class="justify-content-center col-sm-12">
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">AGREGAR</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <input type="email" id="defaultForm-email" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Agregar Nuevo Analisis</a>
        </div>
    </div>
        <!-- Editable table -->
        <div class="card col-sm-8 " style="margin-left: 15%;">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">LISTADO DE ANALISIS</h3>
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
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                            <tr>
                                <th class="text-center">Analisis</th>
                                <th class="text-center">Valor</th>
                                <th class="text-center">Aprobado</th>
                                <th class="text-center">Disponible</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($laboratorioanalisis as $laboratorioanalisi)
                                <tr>
                                    <td class="pt-3-half" contenteditable="true">{!! $laboratorioanalisi -> AnaDescripcion !!}</td>
                                    <td class="pt-3-half" contenteditable="true">{!! $laboratorioanalisi -> AnaLabPrecio !!}</td>
                                    <td class="pt-3-half" contenteditable="true">{!! $laboratorioanalisi -> AnaLabAprobado !!}</td>
                                    <td class="pt-3-half" contenteditable="true">{!! $laboratorioanalisi -> AnaLabDisponible !!}</td>
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
