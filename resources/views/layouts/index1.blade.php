@extends('layouts.principal')

@section('title')
  Inicio
@stop

@section('content')
  <div class="parallax-container no-pad-bot my-banner">
    <div class="slider fullscreen">
      <ul class="slides">
        <li>
          <img src="{!! asset('img/background1.jpg') !!}"> <!-- random image -->
          <div class="caption center-align">
            <h3 class="white-text shadow-title bold">Bienvenido</h3>
            <h5 class="light grey-text text-lighten-3">Entra, Registrate e Inicia</h5>
            <div class="row">
              <div class="col s12 ">
              </div>
            </div>

            <div class="row">
              <a href="{{ route('auth.register') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Aspirantes</a>
              <a href="{{ route('company.create') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons left btn-chip ">description</i>Empresas</a>
            </div>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/background1-1.jpg') !!}" > <!-- random image -->
          <div class="caption left-align">
            <h3>Buscas trabajo¿?</h3>
            <h5 class="light grey-text text-lighten-3">Hazte conocer como aspirante a nuevos horizontes..</h5>
            <div class="row">
              <a href="{{ route('auth.register') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right">cloud_circle</i>Sube tu Curriculum</a>
            </div>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/background1-2.jpg') !!}"> <!-- random image -->
          <div class="caption right-align">
            <h3>Empleos</h3>
            <h5 class="light grey-text text-lighten-3">Publica tu Vacante.</h5>
            <div class="row">
              <a href="{{ route('company.create') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right">new_releases</i>Gratis</a>
            </div>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/background1-3.jpg') !!}"> <!-- random image -->
          <div class="caption center-align">
            <h3>Empieza tu camino</h3>
            <h5 class="light grey-text text-lighten-3">Busca los mejores empleos</h5>
            <div class="row">
              <a href="{{ route('auth.register') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right">arrow_downward</i>Busca tu Futuro</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>


  <div id="con-form-vac" class="container">
    <div class="section">
    <div id="mis-botones-prin" class="row center hide-on-small-only">
        <div class="col  m4">
          <a href="{{ route('auth.register') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Publica tu CV</a>
        </div>
        <div class="col s12 m4">
          <a href="{{ route('company.create') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons left btn-chip ">description</i>Postula tú Vacante</a>
        </div>
        <div class="col s12 m4">
          <a href="{{ route('auth.register') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Analiza tus Postulaciones</a>
        </div>
    </div>
      <div class="row ">
        <ul id="formulario-modible">
          <li>
            {!! Form::open(['route'=>'vacante.index', 'method'=>'GET','role'=>'search']) !!}
            
            @include('frontend.partials.form-busqueda')

          <div class="input-field col s12 grey-text text-darken-2 right-align">
            <button class="btn waves-effect blue white-text btn-large btn-chip waves-light" type="submit" name="action"><i class="material-icons right">search</i>Buscar Vacante 
            </button> 
          </div>
        {!! Form::close() !!}
          </li>
        </ul>
      </div>
      
      <div class="row">
        <div class="col s12 center">
          <ul id="ul-vertical">
           
          </ul>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
        <h3><i class="medium material-icons lime-text">contacts</i></h3>
         <h3>¿QUIENES SOMOS?</h3>
          <h5 class="header col s12 light">AdminWorks es una empresa originaria de la ciudad de mexico, con el indicio de especializarnos en el mercado.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Información</h5>

            <p class="light">AdminWorks ofrece una plataforma multinivel donde usted podra 
                                identificar cada uno de los trabajos deseados, donde se postulara
                                y competira con diversos tipos de ambientes y procesos.
                                Asi mismo la empresa que brinda servicios de vacantes podra ponerse
                                en contacto con usted y llegar a su contratacion.<br>    
                                    <br> 
                                           <br> 
                                            AdminWorks 2017 Designer's
                            </p>
          </div>
        </div>
        	<div class="col s12 m6">
        	  <div class="icon-block">
        	    <h5 class="center">Despues de Registrarte</h5>
        	    <div class="cambio center relativo">
        	    	
        	    	<img src="img/user1.jpg" class="responsive-img" alt="">
        	    				
        	    </div>
        	  </div>
        	</div>
      </div>
    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 condensada-light"><spam class="blue-text">¡¡¡Recuerda!!!</spam>, las grandes empresas empiezan a buscar sus refuerzos con tiempo, si tienes claro tu perfil y los sectores de mercado a los que te quieres o puedes dirigir, no esperes y comienza a moverte.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>
  
@stop

@section('script')
  {!! Html::script('js/querys/pluemplea2.js') !!}
  {!! Html::script('js/querys/script-localidades.js') !!}
  <script>

  $(document).ready(function(){
      $('.slider').slider({
        //indicators:false,
        full_width: true, 
        height: 380,
        duration: 2000
      });
      // Horizontal staggered list
      Materialize.showStaggeredListRigth = function(selector) {
        var time = 0;
        $(selector).find('li').velocity(
            { translateX: "200px"},
            { duration: 2000 });

        $(selector).find('li').each(function() {
          $(this).velocity(
            { opacity: "1", translateX: "0"},
            { duration: 800, delay: time, easing: [60, 10] });
          time += 120;
        });
      };
      var options = [ 
          {selector: '#formulario-modible', offset: 400, callback: 'Materialize.showStaggeredList("#formulario-modible")' }, 
          {selector:'#mis-botones-prin', offset: 200, callback: 'Materialize.fadeInImage("#mis-botones-prin")' },
          {selector:'#ul-vertical', offset: 400,callback: 'Materialize.showStaggeredListRigth("#ul-vertical")' }]; 
        Materialize.scrollFire(options);

        
    });
  </script>
@endsection

