	<header>
      <nav class="top-nav blue z-depth-1 fondo-ad-ad">
        <div class="container">
           <div class="nav-wrapper"></div> 
           	<div class="nav-wrapper">
           		<a class="page-title condensada-light">@yield('titleHeader')</a> 
		    	</div>
          <div class="row card-contacto-admin right-align">
            <div class="col s9 m10"> 
              <h6 class=" black-text ">Administración </h6>
                <h6 class="black-text">Bienvenido Administrador</h6>
                <h6 class="light grey-text">Fecha: <span>{{ date('d/m/Y') }}</span></h6>
            </div>
            <div class="col s3 m2 center ">
              <img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
            </div>
          </div>
        </div>
      </nav>
      
      <div class="container ">
      	<a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
      </div>
      
      <ul id="nav-mobile" class="side-nav fixed">

        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="center"><img class="responsive-img " src="{!!asset('img/logo-repuesto.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/logo-repuesto.png')!!}'"></li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal active">Administracion <i class="material-icons right">keyboard_arrow_down</i></a>
              <div class="collapsible-body">
                <ul>
                <li><a href="{{ route('admin.home')}}">Reportes</a></li>
                 <li><a href="{{ route('admin.usuarios')}}">Usuarios</a></li>
                  <li><a href="{{ route('admin.home')}}">Vacantes</a></li>
                   <li><a href="{{ route('admin.home')}}">Servicios</a></li>
                   <li><a href="{{ route('frontend.index') }}" target="_blank">Portal de Inicio</a></li>
                    <li><a href="{{ route('vacante.index') }}" target="_blank">Portal de Vacantes</a></li>
                </ul>
              </div>
            </li>
           
            
          
          </ul>
          
        </li>
        
        <br><br>
        <li class="bold"><a href="{{ route('auth.logout') }}" class="waves-effect waves-teal">Salir <i class="material-icons small right ico-aling ">exit_to_app</i></a></li>
      </ul>
    </header>