@extends('layouts.master')

@section('content')
  
<section id="hero" class="clearfix">
    <div class="container">

        <div class="hero-banner">
            <!-- TODO: Pending image src -->
            <img src="#" alt="" class="img-fluid">
        </div>

        <div class="hero-content">
            <h2><br><span>Servicios</span></h2>
            
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

          <div class="col-lg-4">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Marketing</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">Consulting</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Strategy</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Quality</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Analysis</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Creative</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
            </div>
          </div>
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