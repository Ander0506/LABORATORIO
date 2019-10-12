@extends('Master')

@section('content')
    <div class="justify-content-center col-sm-12">
        <!-- Editable table -->
        <div class="card col-sm-8 " style="margin-left: 15%; margin-top: 3%;">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">ESTADO DE ANALISIS</h3>
            <div class="card-body">
                <div id="table" class="table-editable">
                    @if ($usuariolaboratorios->isEmpty())
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
                                <th class="text-center">Cliente</th>
                                <th class="text-center">Analisis</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Resultado</th>
                                <th class="text-center">Actualizar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuariolaboratorios as $usuariolaboratorio)
                                <tr>
                                    <td class="pt-3-half" contenteditable="true">{!! $usuariolaboratorio -> UsuNombre !!}</td>
                                    <td class="pt-3-half" contenteditable="true">{!! $usuariolaboratorio -> AnaDescripcion !!}</td>
                                    <td class="pt-3-half" contenteditable="true">
                                        @if($usuariolaboratorio -> Estado == 1)
                                            Muestra Recibida
                                        @endif
                                        @if($usuariolaboratorio -> Estado == 2)
                                            En Proceso
                                        @endif
                                        @if($usuariolaboratorio -> Estado == 3)
                                            Analisis Finalizado
                                        @endif
                                    </td>
                                    <td class="pt-3-half" contenteditable="true">{!! $usuariolaboratorio -> Resultado !!}</td>
                                    <td><a href="" class="" data-toggle="modal" data-target="{{'#modalLoginForm'.$usuariolaboratorio -> UsuLabKey}}">Click</a></td>
                                    <div class="modal fade" id="{{'modalLoginForm'.$usuariolaboratorio -> UsuLabKey}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title w-100 font-weight-bold">Actualizar Registro</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="{{url('gestion/'.$id.','.$usuariolaboratorio -> UsuLabKey)}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body mx-3">
                                                        <select class="browser-default custom-select" name="Estado">
                                                            <option value=1>Muestra Recibida</option>
                                                            <option value=2>En Proceso</option>
                                                            <option value=3>Analisis Finalizado</option>
                                                        </select>
                                                        <br>
                                                        <br>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupFileAddon01">Anexar</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="Resultado"  aria-describedby="inputGroupFileAddon01" required>
                                                                <label class="custom-file-label" for="inputGroupFile01">Resultado</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-default">Actualizar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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
    </div>



@endsection
