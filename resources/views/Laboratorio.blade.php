@extends('Master')

@section('content')
    <h4 class="text-center py-4">LABORATORIOS DISPONIBLES</h4>
    @if ($laboratorios->isEmpty())
        <div>No hay Mensajes</div>
        @else
        @foreach($laboratorios as $laboratorio)
           <!-- Grid row -->
           <div class="row">

               <!-- Grid column -->
               <div class="col-md-6 mb-4">

                   <!--Card-->
                   <div class="card default-color-dark">

                       <!--Card image-->
                       <div class="view">
                           <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo">
                           <a href="#">
                               <div class="mask rgba-white-slight"></div>
                           </a>
                       </div>

                       <!--Card content-->
                       <div class="card-body text-center">
                           <!--Title-->
                           <h4 class="card-title white-text">{!! $laboratorio -> LabNombre !!}</h4>
                           <!--Text-->
                           <p class="card-text white-text">{!! $laboratorio -> LabDesc !!}</p>
                           <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                       </div>

                   </div>
                   <!--/.Card-->

               </div>
               <!-- Grid column -->

           </div>
           <!-- Grid row -->

        @endforeach
    @endif
@endsection
