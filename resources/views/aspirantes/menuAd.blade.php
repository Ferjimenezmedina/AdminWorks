<header>
    <nav class="top-nav z-depth-1 fondo-ad-asp">
        <div class="container">
            <div class="row">
                <div class="col m5 ">
                    <div class="nav-wrapper">
                        <a class="page-title condensada-light">@yield('titleHeader')</a>
                    </div>
                </div>
                <div class="col m7  aling-right ">
                    <div class="row card-contacto-admin">
                        <div class="col s9 m9">
                            <div class="row right-align hide-on-small-only">
                                <h6 class="right-align">{{ Auth::user()->FullName }}</h6>
                                <h6 class="white-text text-lighten-2">{{ Auth::user()->email }}</h6>
                            </div>
                        </div>
                        <div class="col s3 m2 center">
                            @if(Auth::user()->photo)
                                <img class="circle responsive-img" src="{!!asset('cvs/dir'.Auth::user()->id.'/'.Auth::user()->photo)!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
                            @else
                                <img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
    </div>
    <ul id="nav-mobile" class="side-nav fixed">
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="center"><img class="responsive-img " src="{!!asset('img/logo-repuesto.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/logo-repuesto.png')!!}'"></li>
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-teal
                        @if(Route::is('adminuser.home') || Route::is('adminuser.postu') || Route::is('index.change'))
                        active @endif">Perfil <i class="material-icons right">keyboard_arrow_down</i></a>
              	    <div class="collapsible-body">
                        <ul>
                            <li ><a href="{{ route('adminuser.home') }}">Mi Perfil </a></li>
                  	        <li><a href="{{ route('aspirantes.postulaciones') }}">Mis Postulaciones</a></li>
                  	        <li><a href="{{ route('index.change') }}">Cuenta</a></li>
                	    </ul>
              	    </div>
                </li>
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-teal
                        @if(Route::is('curriculum.edit') || Route::is('preferences.edit') || Route::is('upcurriculum.create'))
                        active @endif">Mi Currículum <i class="material-icons right">keyboard_arrow_down</i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ route('curriculum.edit') }}">Editar</a></li>
                            <li><a href="{{ route('curriculum.show') }}">Visualizar</a></li>
                            <li><a href="{{ route('upcurriculum.create') }}">Subir CV</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header active  waves-effect waves-teal">Servicios <i class="material-icons right black-tes">keyboard_arrow_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ route('aspirantes.services.create') }}" target="_blank">Crear</a></li>
                             <li><a href="{{ route('aspirantes.services.admin') }}" target="_blank">Administracion</a></li>
                              <li><a href="{{ route('aspirantes.services.list') }}" target="_blank">Buscar</a></li>
                        </ul>
                    </div>
                </li>
        </li>
                <li class="bold"><a class="collapsible-header active  waves-effect waves-teal">Portales <i class="material-icons right black-tes">keyboard_arrow_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ route('frontend.index') }}" target="_blank">Portal de inicio</a></li>
                             <li><a href="{{ route('vacante.index') }}" target="_blank">Portal de Vacantes</a></li>
                        </ul>
                    </div>
                </li>
        </li>

                <li class="bold"><a class="collapsible-header active  waves-effect waves-teal"> Ayuda <i class="material-icons right black-tes">keyboard_arrow_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                             <li><a href="{{ route('aspirantes.help-miperfil') }}">Mi Perfil</a></li>
                             <li><a href="{{ route('aspirantes.help-micurriculum') }}"> Mi Curriculum</a></li>
                        </ul>
                    </div>
                </li>
        </li>

        {{--<li class="bold"><a href="" class="waves-effect waves-teal z-depth-1">Otro titulo</a></li>--}}<br><br>
        <li class="bold"><a href="{{ route('auth.logout') }}" class="waves-effect waves-teal">Salir <i class="material-icons small right ico-aling ">exit_to_app</i></a></li>
    </ul>
</header>