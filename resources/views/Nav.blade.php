<nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand pt-2" href="#">
        <img class="" height="50" alt="Logo App">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{setAction('home')}}">
                <a class="nav-link" href="{{route('home')}}">INICIO</a>
            </li>
            <li class="nav-item {{setAction('about')}}">
                <a class="nav-link" href="{{route('about')}}">CONÓCENOS</a>
            </li>
            <li class="nav-item {{setAction('laboratorio')}}">
                <a class="nav-link" href="{{route('laboratorio')}}">LABORATORIOS</a>
            </li>
            <li class="nav-item {{setAction('cantacto')}}">
                <a class="nav-link" href="{{route('cantacto')}}">CONTÁCTANOS</a>
            </li>
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

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                     aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#"><i class="fas fa-user mr-3"></i>Iniciar sesión</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-user mr-3"></i>Registrate</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

