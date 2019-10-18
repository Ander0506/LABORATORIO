@extends('Master')
@section('Style', asset('css/material-bootstrap-wizard.css'))
@section('content')
    <div class="set-full-height vh-88 white">
        <!--   Big container   -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 vh-88 align-content-center d-grid">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card z-depth-0 vh-60" data-color="green" id="wizardProfile">
                            <form method="POST" action="{{route('registropublico')}}">
                                @csrf
                                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Ingrese sus Datos
                                    </h3>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">INFORMACION BASICA</a></li>
                                        <li><a href="#account" data-toggle="tab">CUENTA</a></li>
                                        <li><a href="#address" data-toggle="tab">CONTACTO</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content mt-3">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nombres o Razon Social <small>(Obligatorio)</small></label>
                                                        <input name="UsuNombre" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Cargo <small>(Obligatorio)</small></label>
                                                        <input name="UsuCargo" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Identificacion <small>(Obligatorio)</small></label>
                                                        <input name="UsuIdentificacion" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Usuario <small>(Obligatorio)</small></label>
                                                        <input name="UsuUsuario" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Contraseña <small>(Obligatorio)</small></label>
                                                        <input name="password" type="password" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Direccion <small>(Obligatorio)</small></label>
                                                        <input name="UsuDireccion" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefono <small>(Obligatorio)</small></label>
                                                        <input name="UsuTelefono" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email <small>(Obligatorio)</small></label>
                                                        <input name="UsuEmail" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="wizard-footer col-9 text-right">

                                        <div class="pull-left d-md-inline-block">
                                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
                                        </div>

                                        <div class="pull-right d-md-inline-block">
                                            <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Siguiente' />
                                            <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finalizar' />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
                <div class="col-sm-6 vh-88 align-content-center d-grid">
                    <img src="{{asset('Images/Img_Registro_Usu.png')}}" alt="" class="img-fluid">
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    </div>
@endsection
