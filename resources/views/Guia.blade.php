@extends('Master')

@section('content')
    <!-- Vertical Steppers -->
    <div class="row mt-1">
        <div class="col-md-6">

            <form method="POST" action="{{route('guia')}}" enctype="multipart/form-data" name="form3">
                @CSRF
                <div class="" id="modalSubscriptionForm" tabindex="" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body mx-3">
                                <div class="md-form form-group my-5">
                                    <!-- Password -->
                                    <input id="Guia" type="text" name="Guia" class="form-control mb-4" required>
                                    <label for="Guia">Número de Guía</label>
                                </div>
                               
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-indigo" type="submit">Verificar <i class="fas fa-paper-plane-o ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">
                <div id="proceso">

                </div>
            </div>
        </div>
        <div class="col-md-6">
            @if ($usuariolaboratorios->isEmpty())
                <DIV CLASS="justify-content-center">
                    <CENTER>
                        <BR>
                        <div class="alert alert-danger col-sm-6 " role="alert">
                            <CENTER><STRONG>INGRESE UNA GUIA VALIDA</STRONG></CENTER>
                        </div>
                    </CENTER>
                </DIV>
            @else
                @foreach($usuariolaboratorios as $usuariolaboratorio)
                    <!-- Stepers Wrapper -->
                    <ul class="stepper stepper-vertical">

                        <li class="{{$usuariolaboratorio -> Estado == 1 ? 'warning':'completed'}}">
                            <a href="#!">
                                <span class="circle">1</span>
                                <span class="label">En espera de confirmación.</span>
                            </a>
                        </li>

                        <li class="{{$usuariolaboratorio -> Estado == 2 ? 'warning':($usuariolaboratorio -> Estado < 2 ? '': 'completed')}}">
                            <a href="#!">
                                <span class="circle">2</span>
                                <span class="label">Analisis Aprobado.</span>
                            </a>
                        </li>

                        <li class="{{$usuariolaboratorio -> Estado == 3 ? 'warning':($usuariolaboratorio -> Estado < 3 ? '': 'completed')}}">
                            <a href="#!">
                                <span class="circle">3</span>
                                <span class="label">Muestra Recogida.</span>
                            </a>
                        </li>

                        <!-- Second Step -->
                        <li class="{{$usuariolaboratorio -> Estado == 4 ? 'warning':($usuariolaboratorio -> Estado < 4 ? '': 'completed')}}">
                            <a href="#!">
                                <span class="circle">4</span>
                                <span class="label">Muestra entregada.</span>
                            </a>
                        </li>

                        <!-- Third Step -->
                        <li class="{{$usuariolaboratorio -> Estado == 5 ? 'warning':($usuariolaboratorio -> Estado < 5 ? '': 'completed')}}">
                            <a href="#!">
                                <span class="circle">5</span>
                                <span class="label">Analisis en proceso.</span>
                            </a>
                        </li>

                        <!-- Fourth Step -->
                        <li CLASS="{{$usuariolaboratorio -> Estado == 6 ? 'warning':($usuariolaboratorio -> Estado < 6 ? '': 'completed')}}">
                            <a href="#!">
                                <span class="circle">6</span>
                                <span class="label">Analisis finalizado.</span>
                            </a>
                        </li>

                    </ul>
                    <!-- /.Stepers Wrapper -->
                    @endforeach
                @endif
        </div>

    </div>


@endsection
