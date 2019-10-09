@extends('Master')

@section('content')
    <div class="image-container set-full-height" style="background-image: url('{{asset('Images/Fondo_inicio.jpg')}}')">
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizardProfile">
                            <form action="" method="post" >
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

                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nombres <small>(Obligatorio)</small></label>
                                                        <input name="UsuNombre" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Apellido</label>
                                                        <input name="UsuApellido" type="text" class="form-control" >
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
                                                        <input name="UsuPass" type="text" class="form-control" required>
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
                                <div class="wizard-footer">
                                    <div class="pull-right ">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    </div>
@endsection
