	<!-- Modal Structure -->
  	<div id="modal1" class="modal">

    	<div class="modal-content">
  		{!! Form::open(['route'=>'auth.login', 'method'=> 'POST','class'=>'form-horizontal','id'=>'form-login']) !!}
      		<div class="row">
			    		<div class="input-field col s6 grey-text text-darken-2">
        				{!! Form::email('email', null, ['class' => 'validate', 'required' => 'required'])	!!}
        				{!!	Form::label('email','Correo Electronico')	!!}
        			</div>
        			<div class="input-field  col s6  grey-text text-darken-2 ">
        				{!! Form::password('password', null, ['class' => 'validate','required' => 'required'])	!!}
        				{!!	Form::label('password','Contraseña')!!}
        			</div>
							<div class="input-field col s12 right-align">
        				{!!Form::checkbox('name', 'value' )!!}
								<input type="checkbox" id="test5" />
      					<label for="test5" class="grey-text">Recordarme.</label>
        			</div>
        			<div class="input-field col s12 right-align">
			    			<a href="/reset/password" class="grey-text">Olvidaste tu contraseña?</a>
        			</div>	
        			<div class="input-field col s12 right-align">
        				<a id="res-log" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
      				<button type="submit" class="btn green">
      					Entrar
      				</button>
        			</div>		    	
  			</div>
    	{!! Form::close()  !!}
    	</div>
  	</div>

  	<!-- ### Footer ### -->
	<footer class="page-footer white">
	  <div class="contenedor">
	    <div class="row">
	      <div class="col s12 m5 l5 ">
	        <h5 class="black-text">Busca Empleo</h5>
	        <p class="blue-text">Publica tus vacantes, busca aspirantes</p>
	        <br>
	       <a href="{{ route('frontend.index') }}" class="brand-logo"><img src="{!! asset('img/occmash.jpg') !!}"></a> 
	      </div>
	      <div class="col s12 m2  l2 offset-l1">
	      	<h5 class="black-text">Aspirantes</h5>
	        <ul>
	          <li><a class="darken-text" href="{{ route('auth.register') }}">Registrarme</a></li>
	          <li><a class="darken-text" href="{{ route('password.getcuenta') }}">Recuperar Cuenta</a></li>
	          <li class="divider"></li>
	          <br>
	          <li><a class="darken-text" href="{{ route('frontend.preguntas') }}">Preguntas Frecuentes</a></li>
	         <li><a class="darken-text" href="{{ route('frontend.help') }}">Ayuda</a></li>
	        </ul>
	      </div>
	      <div class="col l2 s12 m2">
	        <h5 class="black-text">Empresas</h5>
	        <ul>
	          <li><a class="darken-text" href="{{ route('frontend.company.anuncios') }}">Preguntas Frecuentes</a></li>
	          <li><a class="darken-text" href="{{ route('company.create') }}">¿Como Postular? Registrate Aqui</a></li>
	          <li class="divider"></li>
	          <br>
	          <li><a class="darken-text" href="{{ route('frontend.help-company') }}">Ayuda</a></li>
	          <br>
	        </ul> 
	      </div>
	      <div class="col l2 s12 m2 ">
	      	 <h5 class="black-text">Servicios</h5>
	        <ul>
	        <li><a class="darken-text" href="{{ route('auth.register') }}">Publica Servicios</a></li>
	          <li><a class="darken-text" href="{{ route('company.create') }}">Contrata Servicios</a></li>
	          <li class="divider"></li>
	          <br>
	         <li><a class="darken-text" href="{{ route('frontend.help') }}">Ayuda</a></li>
	      </div>
	    </div>
	  </div>
	  <div class="footer-copyright">
	    <div class="container">
	    <a class="black-text text-black left" href="http://politicas.adminworks.com.mx/Pol%C3%ADticas%20de%20Seguridad%20de%20la%20Informaci%C3%B3n%20adminworks.pdf" target="_blank">Politicas de seguridad de la informacion<i class=" material-icons ico-aling">book</i></a>

            <a class="black-text text-black  right" href="{{ route('frontend.index') }}">©Todos los derechos reservados© </a>
	    </div>
	  </div>
	</footer>