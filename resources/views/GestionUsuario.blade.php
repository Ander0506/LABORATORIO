@extends('Master')

@section('content')
   <div class="justify-content-center col-sm-12">
    <!-- Editable table -->
      <div class="card col-sm-8 " style="margin-left: 15%; margin-top: 3%;">
        <h4 class="card-header text-center font-weight-bold text-uppercase py-4">ESTADO DE ANALISIS </h4>
        <div class="card-body">
            <div id="table" class="table-editable">
                @if ($usuariolaboratorios->isEmpty())
                    <DIV CLASS="justify-content-center">
                        <CENTER>
                            <div class="alert alert-danger col-sm-6 " role="alert">
                                <CENTER><STRONG>NO HAY ANALISIS DISPONIBLES</STRONG></CENTER>
                            </div>
                        </CENTER>
                    </DIV>
                @else
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                    <tr>
                        <th class="text-center">Laboratorio</th>
                        <th class="text-center">Analisis</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Descargar Resultado</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuariolaboratorios as $usuariolaboratorio)
                    <tr>
                        <td class="pt-3-half" contenteditable="true">{!! $usuariolaboratorio -> LabNombre !!}</td>
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
                        <td><a href="{{ asset($usuariolaboratorio -> Resultado) }}" target="_blank">Click</a></td>
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

