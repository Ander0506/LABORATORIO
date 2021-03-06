<nav class="mb-1 navbar navbar-expand-lg navbar-dark white p-0">
    <a class="navbar-brand pt-2" href="#">
        <img class="" height="50" alt="CERTILABS" src="{{asset('Images/Logo_CertiLab.png')}}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
           @if ((\Illuminate\Support\Facades\Auth::guard('laboratorio')->check()) == '' && (\Illuminate\Support\Facades\Auth::guard('usuario')->check()) == '')
            <li class="nav-item {{setAction('home')}}">
                <a class="nav-link nav-custom p-4" href="{{route('home')}}">Inicio</a>
            </li>

            <li class="nav-item {{setAction('about')}}">
                <a class="nav-link nav-custom p-4" href="{{route('about')}}">Conócenos</a>
            </li>
            <li class="nav-item {{setAction('laboratorio')}}">
                <a class="nav-link nav-custom p-4" href="{{route('laboratorio')}}">Laboratorios</a>
            </li>
            <li class="nav-item {{setAction('cantacto')}}">
                <a class="nav-link nav-custom p-4" href="{{route('cantacto')}}">Contáctanos</a>
            </li>
                <li class="nav-item {{setAction('guia')}}">
                    <a class="nav-link nav-custom p-4" href="{{route('guia')}}">Guia</a>
                </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::guard('usuario')->check())
                <li class="nav-item {{setAction('gestionusuario')}}">
                    <a class="nav-link nav-custom p-4" href="{{route('gestionusuario')}}">Gestion</a>
                </li>
            @endif

            @if(\Illuminate\Support\Facades\Auth::guard('usuario')->check())
                <li class="nav-item {{setAction('contratar')}}">
                    <a class="nav-link nav-custom p-4" href="{{route('contratar')}}">Analisis</a>
                </li>
            @endif

            @if(\Illuminate\Support\Facades\Auth::guard('laboratorio')->check())
                <li class="nav-item {{setAction('labanalisis')}}">
                    <a class="nav-link nav-custom p-4" href="{{route('labanalisis')}}">Analisis</a>
                </li>
            @endif

            @if(\Illuminate\Support\Facades\Auth::guard('laboratorio')->check())
                <li class="nav-item {{setAction('gestion')}}">
                    <a class="nav-link nav-custom p-4" href="{{route('gestion',auth()->user()->LabCodigo)}}">Procesos</a>
                </li>
            @endif

            <li class="nav-item dropdown">
                <!--
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                -->
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">

            <li class="nav-item dropdown mr-4 dropdown-custom">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                         aria-labelledby="navbarDropdownMenuLink-333">
                        @guest
                            <a class="dropdown-item" href="{{route('login')}}"><i class="fas fa-user mr-3"></i>Iniciar sesión</a>
                        @else
                            <a class="dropdown-item" href="#" onclick="logout()"><i class="fas fa-sign-out-alt mr-3"></i>Cerrar Sesion</a>
                        @endguest
                    </div>
            </li>
        </ul>
    </div>
</nav>

<form id="logout-form"  action="{{route('logout')}}" method="POST" class="d-none">
    @csrf
</form>

