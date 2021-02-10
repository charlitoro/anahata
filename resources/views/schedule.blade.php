@extends('layouts.master')

@section('content')
  
  <section id="hero" class="clearfix">
      <div class="container">
          <div class="hero-banner">
              <img src="#" alt="" class="img-fluid">
          </div>

          <div class="hero-content">
              <h2><span>Agenda Tu Turno</span><br/>Selecciona el día y la hora y con gusto te visitaremos</h2>
          </div>
      </div> 
  </section> 

  <main id="main">
 
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header"> 
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row contact-info">
          <div class="col-lg-5"> 
            <h3>{{ Auth::User()->name }}</h3><br/><br/>
            <h4>Estos son tus turnos agendados</h4>
            <!-- TODO: consultar a base de datos los turnos disponibles -->
            <br/>
            @foreach( $pendingSchedules as $key => $schedule )
              <div class="contact-address">
                <i class="ion-ios-time-outline"></i>
                <h3>{{ $schedule['date'] }}</h3>
                <address>{{ $schedule['services'] }}</address>
              </div> 
            @endforeach
          </div>

          <div class="col-lg-7">
            <div class="container">
              <div class="form"> 
          
                <form name="sentMessage" class="well" id="contactForm" novalidate method="POST"> 
                  {{ csrf_field() }}
                  <div class="control-group">
                      <div class="form-group">
                        <div class="controls">
                          <label>Servicios</label>
                          <!-- TODO: llamar en el back los servicios y listarlos -->
                          <select multiple name="services[]" class="selectpicker w-100 form-control border">
                            <option value=1>United Kingdom</option>
                            <option value=2>United States</option>
                            <option value=3>France</option>
                            <option value=4>Germany</option>
                            <option value=5>Italy</option>
                          </select>
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <input 
                        type="date" 
                        name="date"
                        class="form-control" 
                        placeholder="Fecha" 
                        id="date" 
                        required
                        data-validation-required-message="Seleccione la fecha del turno"
                        list="days" 
                      />
                      <!-- TODO: poner las fechas disponibles, si se selcciona otro 
                      luego validar las fecha permitidas en el back -->
                      <datalist id="days">
                        <option label="Independence Day">2013-07-04</option>
                        <option label="Labor Day">2013-09-02</option>
                        <option label="Columbus Day">2013-10-14</option>
                      </datalist>
                    </div>
                  </div> 	
                  <div class="form-group">
                    <div class="controls">
                      <input 
                        type="time" 
                        name="time"
                        class="form-control" 
                        placeholder="Hora" 
                        id="time" 
                        required
                        data-validation-required-message="Seleccione la hora del turno"  
                        list="times" 
                      />
                      <!-- TODO: poner los tiempos disponibles, si se selcciona otro 
                      luego validar las horas permitidas en el back -->
                      <datalist id="times">
                        <option label="Midnight">00:00</option>
                        <option>06:00</option>
                        <option label="Noon">12:00</option>
                        <option>18:00</option>
                      </datalist>
                    </div>
                  </div> 	
            
                  <div class="form-group">
                    <div class="controls">
                      <textarea 
                        rows="5" 
                        cols="100" 
                        class="form-control" 
                        placeholder="Observacion" 
                        id="observation" 
                        minlength="5" 
                        data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" 
                        style="resize:none"
                      ></textarea>
                    </div>
                  </div> 		 
                  <div id="success"> </div> <!-- For success/fail messages -->
                  <button type="submit" class="btn btn-primary pull-right">Agendar</button><br />
                </form>
              </div>

            </div>  
          </div>
        </div>
      </div>
 
    </section><!-- #contact -->

  </main>

@stop