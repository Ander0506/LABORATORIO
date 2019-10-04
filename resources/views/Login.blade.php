@extends('Master')

@section('content')
    <div class="row justify-content-center vh-100 d-table m-auto">
        <div class="col-4 align-middle d-table-cell">
            <form class="text-center border border-light p-5 card z-depth-1" action="#!">

                <p class="h4 mb-4">Inicio de sesión</p>

                <!-- Email -->
                <input type="email" name="email" class="form-control mb-4" placeholder="Correo Electronico">

                <!-- Password -->
                <input type="password" name="password" class="form-control mb-4" placeholder="Contraseña">

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Iniciar sesión</button>

                <p>¿Aun no tienes cuenta?
                    <a href="">Registrate!</a>
                </p>

            </form>
        </div>
    </div>
@endsection