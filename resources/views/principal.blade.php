@extends('layouts.master')

@section('content')
<section id="hero" class="clearfix">
    <div class="container">

        <div class="hero-banner">
            <!-- TODO: Pending image src -->
            <img src="" alt="" class="img-fluid">
        </div>

        <div class="hero-content">
            <h2>Salud, bienestar y belleza<br><span>Estética</span></h2>
            <div>
                <a href="#" class="btn-banner">Nuestros Servicios</a> 
            </div>
        </div>

    </div> 
</section>
<main id="main">

    <!--==========================
    About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
        <div class="container">
	        <div class="section-header">
                <h2>Bienvenidos</h2>
                <p>ANAHATA es un centro de estética que presta diferentes tipos de servicios a domicilio en la cuidad 
                de Pasto hace más de 10 años, comprometidos con tu bienestar, te ofrecemos las mejores promociones para 
                que disfrutes consintiendo tu cuerpo y tu espiritu.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                <!--<img src="" alt="">-->
                <img src="{{URL::asset('assets/anahata/img/Poster.jpeg')}}" alt="">
            </div>

            <div class="col-lg-6 content">
                <h2>Trabajamos con amor especialmente para ti!!!</h2>
                <h3>El bienestar físico es un reflejo del bienestar interior</h3>
			    <p>Por eso traemos para tí la nueva linea de estética alternativa, donde además de los servicios tradicionales de belleza, podrás trabajar en tu interior.</p>
                <ul>
                    <li><i class="icon ion-ios-checkmark-outline"></i> Sesiones de Reiki Usui para sanación física, emocional y espiritual.</li>
                    <li><i class="icon ion-ios-checkmark-outline"></i> Yoga para la salud y equilibrio.</li>
                    <li><i class="icon ion-ios-checkmark-outline"></i> Meditaciones, constelaciones y tratamiento con método milagros</li>
                    <li><i class="icon ion-ios-checkmark-outline"></i> Estética general</li>
                </ul> 
            </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Algunos de nuestros servicios</h2>
          <p>Anahata te ofrece un amplio catálogo de servicios, danos el gusto de atenderte en la comodidad de tu casa.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box wow fadeInLeft">
              <div class="icon svgImg"><img src="{{URL::asset('assets/anahata/img/pedicure.png')}}" alt=""></div>
              <h4 class="title"><a href="">Manicure y Pedicure</a></h4>
              <p class="description">Tradicional o semipermanente para damas y caballeros.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInRight">
               <div class="icon svgImg"><img src="{{URL::asset('assets/anahata/img/limp_facial.png')}}" alt=""></div>
              <h4 class="title"><a href="">Limpieza facial</a></h4>
              <p class="description">General o profunda. tratamientos para acné</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
               <div class="icon svgImg"><img src="{{URL::asset('assets/anahata/img/repolarizacion.png')}}" alt=""></div>
              <h4 class="title"><a href="">Repolarización capilar</a></h4>
              <p class="description">Reestructurar, revitalizar, nutrir, hidratar o para la caida.</p>
            </div>
          </div>
 
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
         
          <h2>Clientes</h2>
          <p> Regístrate y forma parte de nuestros distinguidos clientes..</p>
          
          
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
        </div>

      </div>
    </section><!-- #clients --> 
    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Testimonios</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore
                
              </p> 
              <h3>Mrio James</h3>
              <h4>CEO &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
              <p>
                Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore
                
              </p> 
              <h3>Finton Gofnes</h3>
              <h4>CTO</h4>
            </div>

            <div class="testimonial-item">
              <p>
                Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore
                
              </p> 
              <h3>Marcus Kell</h3>
              <h4>Marketing</h4>
            </div>

            <div class="testimonial-item">
              <p>
                Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore
                
              </p> 
              <h3>Williams Belly</h3>
              <h4>Accounts</h4>
            </div>

            <div class="testimonial-item">
              <p>
                Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore
                
              </p> 
              <h3>Larry Hanson</h3>
              <h4>Investor</h4>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
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
            <a class="cta-btn align-middle" href="#contact">Agendar turno</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
 

  </main>
@stop