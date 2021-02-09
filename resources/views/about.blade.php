@extends('layouts.master')

@section('content')
<section id="hero" class="clearfix">
    <div class="container">

        <div class="hero-banner">
            <!-- TODO: Pending image src -->
            <img src="#" alt="" class="img-fluid">
        </div>

        <div class="hero-content">
            <h2><br><span>Nosotros</span></h2>
            
        </div>

    </div> 
</section> 


  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{URL::asset('assets/anahata/img/Poster.jpg')}}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Comprometidos con tu bienestar físico y espiritual</h2>
            <h3>El bienestar físico es un reflejo del bienestar interior</h3>
			      <p>ANAHATA es un centro de estética que presta diferentes tipos de servicios a domicilio en la cuidad 
                de Pasto hace más de 10 años, trabajamos con amor y dedicación para ofrecerte la mejor atención y excelentes servicios</p>
            <p>Con amplia cobertura en nuestros domicilios para consentirte en la comodidad de tu hogar.</p>
            <ul>
              <li><i class="icon ion-ios-checkmark-outline"></i> Todo tipo de servicios estéticos.</li>
              <li><i class="icon ion-ios-checkmark-outline"></i> Línea especial alternativa espiritual.</li>
              <!--<li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro esse aute nulla. malis nulla duis fugiat</li>-->
            </ul> 
          </div>
        </div>

      </div>
    </section><!-- #about -->
 
    <!--==========================
      
 
    ==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Obtener nuestros servicios</h3>
            <p class="cta-text">Regístrate como cliente y agenda tu turno.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{url('/schedule')}}">Agendar turno</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Esteticista</h2>
        </div>
        <div class="row team">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{URL::asset('assets/anahata/img/erika.jpg')}}" alt=""></div>
              <div class="details">
                <h4>Erika Orbes</h4>
                <span>Esteticista integral</span>
                
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href="{{url('https://www.facebook.com/erika.orbes/')}}"><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
                <p>Esteticista profesional especialista en manicura y pedicura con reflexología,
                  reikista y terapeuta con 10 años de experiencia.
                </p>
              </div>
            </div>
          </div>

          <!--<div class="col-lg-3 col-md-6">
            <div class="member">
                <div class="pic"><img src="img/team2.jpg" alt=""></div>
              <div class="details">
                <h4>Perfil profesional</h4>
                <p>Esteticista profesional especialista en manicura y pedicura con reflexología,
                  reikista y terapeuta con 10 años de experiencia.
                </p>-->
                
              <!--</div>-->
            </div>
          </div>

        
        </div>

      </div>
    </section><!-- #team -->
 


    <!--==========================
      

  </main>

@stop