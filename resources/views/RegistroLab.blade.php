@extends('Master')

@section('content')
    <div class="set-full-height vh-88 white">
        <!--   Big container   -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 vh-88 align-content-center d-grid">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card z-depth-0 vh-75" data-color="green" id="wizardProfile">
                            <form method="POST" action="{{route('registrolab')}}" enctype="multipart/form-data">
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
                                                        <input name="password" type="text" class="form-control" required>
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
