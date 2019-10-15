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
                    <img src="https://static.iris.net.co/dinero/upload/images/2017/8/3/248281_1.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
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
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- News jumbotron -->
    @if ($laboratorios->isEmpty())
        <DIV CLASS="justify-content-center">
            <CENTER>
                <div class="alert alert-danger col-sm-6 " role="alert">
                    <CENTER><STRONG>NO HAY LABORATORIOS DISPONIBLES</STRONG></CENTER>
                </div>
            </CENTER>
        </DIV>
        @else

            <div class="row">
                @foreach($laboratorios as $laboratorio)
                <div class="col-lg-3 col-md-12 mb-4">
                    <!--Card-->
                    <div class="card card-cascade wider p-0">

                        <!--Card image-->
                        <div class="view view-cascade">
                            <img src="{{asset($laboratorio->LabImg)}}" class="card-img-top">
                            {{--<img src="data:image/jpeg;base64,{{base64_encode($laboratorio->LabImg)}}" class="card-img-top">--}}

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
