@extends('Master')

@section('content')
    <!-- News jumbotron -->
    <div class="jumbotron text-center hoverable p-4">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 offset-md-1 mx-3 my-3">

                <!-- Featured image -->
                <div class="view overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-7 text-md-left ml-3 mt-3">

                <h4 class="h4 mb-4">Nuestros Aliados.</h4>

                <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>

                <a class="btn btn-success">Read more</a>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- News jumbotron -->
    @if ($laboratorios->isEmpty())
        <div>NO HAY LABORATORIOS DISPONIBLES</div>
        @else

            <div class="row">
                @foreach($laboratorios as $laboratorio)
                <div class="col-lg-4 col-md-12 mb-4">
                    <!--Card-->
                    <div class="card card-cascade wider mb-4">

                        <!--Card image-->
                        <div class="view view-cascade">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20%283%29.jpg" class="card-img-top">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center">
                            <!--Title-->
                            <h4 class="card-title"><strong>{!! $laboratorio -> LabNombre !!}</strong></h4>

                            <p class="card-text">{!! $laboratorio -> LabDesc !!}</p>

                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->

                </div>
                @endforeach
            </div>

    @endif
@endsection
