@extends('layouts.principal')

@section('title')
  Bienvenidos 
@stop

@section('content')

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="contenedor ">
        	<div class="row center">
  	        <div class="row">
  	        <br><br>
  	        	<div class="col s12 l8 offset-l2">
  	        		<div class="flexslider">
  		          		<ul class="slides">
  		            		<li>
  		  	    	    		<img src="img/slide1.png" />
  		  	    	    		
  		  	    			</li>
  		  	    			<li>
  		  	    	    		<img src="img/slide2.png" />
  		  	    			</li>
  		          		</ul>
  		        	</div>
  	        	</div>
  	        </div>
        	</div>
        	<br><br>
      </div>
    </div>
    <div class="parallax"><img src="img/background1.jpg" alt="Oficinas"></div>
  </div>


  <div class="container">
  	<div class="row relativo">
      	<div class="col s12 caja-busqueda ">
      		<div class="card-panel z-depth-2 condensada-regular ">
          		<div class="row ">
            		{!! Form::open(['route'=>'vacante.index', 'method'=>'GET']) !!}
                    
                    @include('frontend.partials.form-busqueda')

            			<div class="input-field col s12 m6 grey-text text-darken-2 center">
            				<button class="btn waves-effect waves-light  green btn-large" type="submit" name="action"><i class="material-icons right">search</i>Buscar Vacante 
    						    </button>	
            			</div>
    				    {!! Form::close() !!}
            </div>
      		</div>
      	</div>
  	</div>
  	<br><br><br> 
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="medium material-icons lime-text">contacts</i></h3>
          <h3>¿QUIENES SOMOS?</h3>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Los empleadores valoran aquellas personas que buscan trabajo con trabajo y no aquellos que se quedan de brazos cruzados.</h5>
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
            <h2 class="center lime-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>
        	<div class="col s12 m6">
        	  <div class="icon-block">
        	    <h5 class="center">Despues de Registrarte</h5>
        	    <div class="cambio center relativo">
        	    	<ul class="condensada-regular lista-proceso left-align grey-text">
        					<li>1 - Busca</li>
        					<li>2 - Identifica</li>
        					<li>3 - Postula</li>
        					<li>4 - Compite</li>
        					<li>5 - Encuentra</li>
        	    	</ul>
        	    	<img src="img/proceso-gira.png" class="responsive-img" alt="Proceso de Busqueda de Empleo">
        	    				
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
          <h5 class="header col s12 condensada-light"><spam class="lime-text">¡¡¡Recuerda!!!</spam>, las grandes empresas empiezan a buscar sus refuerzos con tiempo, si tienes claro tu perfil y los sectores de mercado a los que te quieres o puedes dirigir, no esperes y comienza a moverte.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>
  
@stop

@section('script')
  {!!Html::script('js/jquery.flexslider-min.js')!!}
  {!!Html::script('js/flex.busqueda.js')!!}

  <script>
  $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
@endsection

