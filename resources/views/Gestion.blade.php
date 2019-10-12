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
                    <th><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="{{'#modalLoginForm'.$usuariolaboratorio -> UsuLabKey}}">Actualizar</a></th>
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
                                <form method="POST" action="{{url('gestion',[$usuariolaboratorio -> UsuLabKey])}}">
                                    @csrf
                                    <div class="modal-body mx-3">
                                        <select class="browser-default custom-select" name="Estado">
                                            <option value=1>Muestra Entregada</option>
                                            <option value=2>En Analisis</option>
                                            <option value=3>Analisis Finalizado</option>
                                        </select>
                                        <br>
                                        <br>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Anexar</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="Resultado"  aria-describedby="inputGroupFileAddon01" >
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
            </tbody>
        </table>
        @ENDIF
    </DIV>




@endsection
