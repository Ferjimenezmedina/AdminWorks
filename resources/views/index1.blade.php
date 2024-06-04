<script type="text/javascript">
		
		if (typeof navigator.geolocation == 'object'){
    navigator.geolocation.getCurrentPosition(mostrar_ubicacion);
}
 
function mostrar_ubicacion(p)
{
    alert('Se han detectado los servicios de ubicacion' );
}
		
	</script>
@extends('layouts.principal')

@section('title')
  Inicio
@stop

@section('content')

  <div class="parallax-container no-pad-bot my-banner">
    <div class="slider fullscreen">
      <ul class="slides">
        <li>
          <img src="{!! asset('img/fondo.png') !!}"> <!-- random image -->
         
          <div class="caption right-align">
            
                        <br>
            <br>
            <br><h3 class="white-text shadow-title ">            <br>
            <br>
            <br>
                      <br>
            <br>
            <br>Bienvenido</h3>
            <h5 class=" black-text">Entra, Registrate e Inicia</h5>
            <div class="row">
              <div class="col s12 ">
              </div>
            </div>

            <li>
          <img src="{!! asset('img/city12.png') !!}" > <!-- random image -->
          <div class="caption center-align">

            <h3>Como comenzar¿?</h3>
            <h5 class="light grey-text text-lighten-3">Ayuda basica sobre el manejo del portal del empleo</h5>
             <div class="row">
              <a href="{{ route('frontend.help') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Ayuda Aspirante</a>
             <a href="{{ route('frontend.help-company') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons left btn-chip ">description</i>Ayuda Empresa</a>
             <a href="{{ route('frontend.help-servicios') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons left btn-chip ">description</i>Ayuda Servicios</a>
             
            </div>
          </div>
        </li>
         <li>
          <img src="{!! asset('img/city13.png') !!}" > <!-- random image -->
          
         <div class="caption left-align">

            <h3>Servicios</h3>
            <h5 class="light grey-text text-lighten-3">Para ver, crear y administrar servicios es necesario iniciar sesion con su usuario</h5>
             <div class="row">
              <a href="{{ route('login') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Iniciar Sesion</a>
             
             
            </div>
        <li>
          <img src="{!! asset('img/background1-1.jpg') !!}" > <!-- random image -->
          <div class="caption left-align">
            <h3>Registrate</h3>
            <h5 class="light grey-text text-lighten-3">Hazte conocer como aspirante o empresa a nuevos horizontes..</h5>
             <div class="row">
              <a href="{{ route('auth.register') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Registro  Aspirante</a>
             <a href="{{ route('company.create') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons left btn-chip ">description</i>Registro Empresa</a>
             <a href="{{ route('auth.register') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons left btn-chip ">description</i>Registra tu Servicio</a>
            </div>
          </div>

        </li>
        <li>
          <img src="{!! asset('img/background1.jpg') !!}"> <!-- random image -->
          <div class="caption right-align">
            <h5 class="light black-text text-lighten-3">Publica tu Vacante.</h5>
            <div class="row">
              <a href="#" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right">new_releases</i>Gratis</a>
            </div>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/background1-3.jpg') !!}"> <!-- random image -->
          <div class="caption center-align">
            <h3>Empieza tu camino</h3>
            <h5 class="light grey-text text-lighten-3">Busca los mejores empleos</h5>
            <div class="row">
              <a href="#" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right">arrow_downward</i>Busca tu Futuro</a>
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
          <a href="{{ route('auth.register') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Registro Aspirante</a>
        </div>
        
        <div class="col s12 m4">
          <a href="{{ route('company.create') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons left btn-chip ">description</i>Registro Empresa</a>
        </div>
        <div class="col s12 m4">
          <a href="{{ route('auth.register') }}" class="btn waves-effect blue white-text btn-large btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Registra un Servicio</a>
        </div>

    </div>

    </div>

      

    </div>
  </div>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Información</h5>

            <p class="black-text ">AdminWorks ofrece una plataforma multinivel donde usted podra 
                                identificar cada uno de los trabajos deseados, donde se postulara
                                y competira con diversos tipos de ambientes y procesos.
                                Asi mismo la empresa que brinda servicios de vacantes podra ponerse
                                en contacto con usted y llegar a su contratacion.<br>    
                                    <br> 
                                   
                            </p>
          </div>
        </div>
        <br>
        <br>
          <div class="col s12 m6">
            <div class="icon-block">
              <h5 class="center">Despues de Registrarte</h5>
              <div class="">
                
                <img src="img/crecimiento4.png" class="responsive-img" alt="">
                      
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

 <div class="parallax-container valign-wrapper">
    
    <div class="parallax"><img src="img/123.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
        
        </div>
       
      </div>
   


  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">group</i></h2>
            <h5 class="black-text center">Mision</h5>

            <p class="black-text ">Somos empresa lider, gestionando profesionales para ubicarlos   
                                   en empresas totalmente en la cima, y ademas dando sentido a cada 
                                   meta que se proponga, generando sentidos y profesionalismo.<br> 
                                   <br>
                                   Ademas ofrecer servicios de calidad para mejorar la insercion laboral y mejorar la competitividad de las empresas a través de la capacitación de las personas.<br>
                                   <br>
                                
                            </p>
          </div>
        </div>

        	<div class="col s12 m6">
        	  <div class="icon-block">
        	    <h5 class="center-align"></h5>
        	    <div class="left-align">
        	    	
        	    	<img src="img/LogoBT.png" class="responsive-img" alt="">
        	    				
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
          <h5 class="header col s12 condensada-light"><spam class="blue-text"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/fon12.jpg" alt="Unsplashed background img 3"></div>
  </div>
<div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">group</i></h2>
            <h5 class=" black-text center">Vision</h5>

            <p class="black-text ">Ser una consultora de EMPLEO comprometida con el desarrollo sostenible y referente en el mercado. <br> 
                                   <br>
                                   Valores: <br>
                                   <br>
                                   Positivismo, Empatia, Innovacion, Confianza, Equipo Humano, Futuro. <br>
                                   <br>
                            </p>
          </div>
        </div>

        	<div class="col s12 m6">
        	  <div class="icon-block">
        	    <h5 class="center-align"></h5>
        	    <div class="left-align">
        	    	
        	    	<img src="img/metas.png" class="responsive-img" alt="">
        	    				
        	    </div>
        	  </div>
        	</div>
      </div>
    </div>
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

