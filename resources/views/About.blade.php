@extends('Master')

@section('content')
    <div class="view Bg-Home vh-100">
        <img src="{{asset('Images/Fondo_inicio.jpg')}}" class="img-fluid" alt="placeholder">
        <div class="mask flex-center rgba-black-strong">
        </div>
    </div>

    <div class="row justify-content-center d-flex Content-Home">
        <div class="col-10 text-center align-self-center">
            <h3 class="Title-Home">
                ¿Quienes somos?
            </h3>
            <p class="Description-Home text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
@endsection
