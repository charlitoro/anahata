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
            <!-- TODO: poner el nombre del usuario -->
            <h3>Tus Turnos Agendados</h3>
            <!-- TODO: consultar a base de datos los turnos disponibles -->
            <!-- TODO: mirar como mostrar ñs informacion de los turnos -->
          </div>

          <div class="col-lg-7">
            <div class="container">
              <div class="form"> 
          
                <form name="sentMessage" class="well" id="contactForm"  novalidate> 
                  
                  <div class="control-group">
                      <div class="form-group">
                        <div class="controls">
                          <label>Servicios</label>
                          <select multiple class="selectpicker w-100 form-control border">
                            <option>United Kingdom</option>
                            <option>United States</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Italy</option>
                          </select>
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                    <div class="controls">
                      <input 
                        type="date" 
                        class="form-control" 
                        placeholder="Fecha" 
                        id="date" 
                        required
                        data-validation-required-message="Seleccione la fecha del turno" 
                      />
                    </div>
                  </div> 	
                  <div class="form-group">
                    <div class="controls">
                      <input 
                        type="time" 
                        class="form-control" 
                        placeholder="Hora" 
                        id="time" 
                        required
                        data-validation-required-message="Seleccione la hora del turno" 
                      />
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