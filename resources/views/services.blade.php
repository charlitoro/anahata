@extends('layouts.master')

@section('content')
  
<section id="hero" class="clearfix">
    <div class="container">

        <div class="hero-banner">
            <img src="#" alt="" class="img-fluid">
        </div>

        <div class="hero-content">
            <h2><br><span>Servicios</span></h2>
            <div>
                <a href="{{url('/schedule')}}" class="btn-banner">Agendar turno</a> 
            </div>
            
        </div>

    </div> 
</section> 

<main id="main">

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container"> 

        <div class="row">
          @foreach( $arrayServicios ?? '' as $key => $servicio )
          <div class="col-lg-4">
            <div class="box wow fadeInLeft">
              <!--<div class="icon"><i class="fa fa-bar-chart"></i></div>-->
              <img src="{{$servicio->image}}" style="height:200px" class="icon"/>
              <h4 class="title">{{$servicio->text}}</h4>
              <h5 class="description precio">$  {{$servicio->price}}</h5>
              <h5 class="description tiempo"> Tiempo estimado del servicio:   {{$servicio->time}}  horas</h5>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Obtener nuestros servicios</h3>
            <p class="cta-text">Registrate como cliente y agenda tu turno.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{url('/schedule')}}">Agendar turno</a>
          </div>
        </div>

        

      </div>
    </section><!-- #call-to-action -->
 

  </main>

  
  

@stop