@extends('Master')

@section('content')
    <div class="row justify-content-center Content-Home">
        <div class="col-4 d-grid align-content-center">
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

                        <form action="#!">
                            @csrf
                            <!-- Email -->
                            <input type="email" name="emailUsuario" class="form-control mb-4" placeholder="Correo Electrónico">

                            <!-- Password -->
                            <input type="password" name="passwordUsuario" class="form-control mb-4" placeholder="Contraseña">

                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Iniciar sesión</button>

                            <p>¿Aún no tienes cuenta?
                                <a href="{{route('registropublico')}}">Regístrate!</a>
                            </p>

                        </form>
                    </div>
                    <div class="tab-pane fade mt-4" id="laboratorio" role="tabpanel" aria-labelledby="profile-tab">

                        <form action="#!">
                            @csrf

                            <input type="text" name="NITLaboratorio" class="form-control mb-4" placeholder="NIT">

                            <!-- Password -->
                            <input type="password" name="passwordLaboratorio" class="form-control mb-4" placeholder="Contraseña">

                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Iniciar sesión</button>

                            <p>¿Aún no tienes cuenta?
                                <a href="">Regístrate!</a>
                            </p>

                        </form></div>
                </div>
            </div>
        </div>
    </div>
@endsection
