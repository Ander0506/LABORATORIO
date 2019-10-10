@extends('Master')

@section('content')
    <div class="image-container set-full-height" style="background-image: url('assets/img/wizard-profile.jpg')">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizardProfile">
                            <form method="POST" action="{{route('registrolab')}}">
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
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                        <input id="wizard-picture" name="LabImg" type="file">
                                                    </div>
                                                    <h6>Selecione una imagen</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Razon Social <small>(Requerido)</small></label>
                                                        <input name="LabNombre" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">NIT <small>(Requerido)</small></label>
                                                        <input name="LabIdentificacion" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Descripcion <small>(Requerido)</small></label>
                                                        <textarea name="LabDesc"  class="form-control" required>

                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Certificaciones <small>(Requerido)</small></label>
                                                        <textarea name="LabCertificacion"  class="form-control" required>

                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Usuario <small>(Requerido)</small></label>
                                                        <input name="LabUsuario" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Contraseña <small>(Requerido)</small></label>
                                                        <input name="LabPass" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Direccion <small>(Requerido)</small></label>
                                                        <input name="LabDireccion" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefono <small>(Requerido)</small></label>
                                                        <input name="LabTelefono" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email <small>(Requerido)</small></label>
                                                        <input name="LabEmail" type="email" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Siguiente' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finalizar' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
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
