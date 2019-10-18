@extends('Master')
@section('content')
    <div class="row justify-content-center Content-Home">
        <div class="col-4 d-grid align-content-center vh-88">
            <div class="text-center border border-light p-5 card z-depth-1">
            <p class="h4 mb-4">Inicio de sesión</p>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#usuario" role="tab" aria-controls="home"
                           aria-selected="true">Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#laboratorio" role="tab" aria-controls="profile"
                           aria-selected="false">Laboratorio</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show mt-4 active" id="usuario" role="tabpanel" aria-labelledby="home-tab">

                        <form method="POST" action="{{url('login/usuario')}}">
                            @csrf
                            <div class="md-form form-group mt-5 {{$errors->has('UsuUsuario') ? 'has-error': ''}}">
                                <input id="UsuUsuario" type="text" name="UsuUsuario" class="form-control mb-4" value="{{old('UsuUsuario')}}" required>
                                <label for="UsuUsuario">Usuario</label>
                                {!! $errors->first('UsuUsuario', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="md-form form-group my-5 {{$errors->has('password') ? 'has-error': ''}}">
                                <input id="passwordUsu" type="password" name="password" class="form-control mb-4" required>
                                <label for="passwordUsu">Contraseña</label>
                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>


                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Iniciar sesión</button>

                            <p>¿Aún no tienes cuenta?
                                <a href="{{route('registropublico')}}">Regístrate!</a>
                            </p>

                        </form>
                    </div>
                    <div class="tab-pane fade mt-4" id="laboratorio" role="tabpanel" aria-labelledby="profile-tab">

                        <form method="POST" action="{{url('login/laboratorio')}}">
                            @csrf

                            <div class="md-form form-group mt-5 {{$errors->has('LabUsuario') ? 'has-error': ''}}">
                                <input id="LabUsuario" type="text" name="LabUsuario" class="form-control mb-4" value="{{old('LabUsuario')}}" required>
                                <label for="LabUsuario">Usuario</label>
                                {!! $errors->first('LabUsuario', '<span class="help-block">:message</span>') !!}

                            </div>

                            <div class="md-form form-group my-5 {{$errors->has('password') ? 'has-error': ''}}">
                                <!-- Password -->
                                <input id="passwordLab" type="password" name="password" class="form-control mb-4" placeholder="Contraseña" required>
                                <label for="passwordLab">Contraseña</label>
                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>



                        <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Iniciar sesión</button>

                            <p>¿Aún no tienes cuenta?
                                <a href="{{route('registrolab')}}">Regístrate!</a>
                            </p>

                        </form></div>
                </div>
            </div>
        </div>
    </div>
@endsection
