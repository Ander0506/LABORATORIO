@extends('Master')

@section('content')
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4 Title-Contact">Contacto</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5 Description-Contact">¿Tiene alguna duda? Por favor no dude en contactarnos directamente. Nuestro equipo lo atenderá
            en cuestión de horas para ayudarle</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-1"></div>
            <div class="col-md-6 mb-md-0 mb-5 border-right border-success">
                <form id="contact-form" name="contact-form" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">

                            <div class="md-form form-group my-3 {{$errors->has('password') ? 'has-error': ''}}">
                                <!-- Password -->
                                <input id="contacName" type="text" name="contactName" class="form-control" required>
                                <label for="contacName">Nombre</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">

                            <div class="md-form form-group my-3 {{$errors->has('password') ? 'has-error': ''}}">
                                <!-- Password -->
                                <input id="contacEmail" type="email" name="contactEmail" class="form-control" required>
                                <label for="contacEmail">Correo Eléctronico</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">

                            <div class="md-form form-group my-3 {{$errors->has('password') ? 'has-error': ''}}">
                                <!-- Password -->
                                <input id="contacAsunto" type="text" name="contactAsunto" class="form-control" required>
                                <label for="contacAsunto">Asunto</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form form-group my-3 {{$errors->has('password') ? 'has-error': ''}}">
                                <!-- Password -->
                                <input id="contacComentario" type="text" name="contactComentario" class="form-control" required>
                                <label for="contacComentario">Comentario</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-success" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x Icon-Light-Gray"></i>
                        <p>Barranquilla, Atlántico Calle 96 # 56-98</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x Icon-Light-Gray"></i>
                        <p>+ 57 356 78 67</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x Icon-Light-Gray"></i>
                        <p>contact@certilab.co.com</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->


@endsection
