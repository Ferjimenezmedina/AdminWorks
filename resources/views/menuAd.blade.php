<header>
    <nav class="top-nav z-depth-1 fondo-ad">
        <div class="container">
            <div class="row">
                <div class="col m5 ">
                    <div class="nav-wrapper">
                        <a class="page-title condensada-light">@yield('titleHeader')</a>
                    </div>
                </div>
                <div class="col m7 aling-right">
                    <div class="row card-contacto-admin right-align">
                        <div class="col s9 m9">
                            <div class="row right-align hide-on-small-only">
                                <h6 class="right-align">{{ Auth::user()->FullName }}</h6>
                                <h6 class="white-text text-lighten-2">{{ Auth::user()->email }}</h6>
                            </div>
                        </div>
                        <div class="col s3 m2 center ">
                            @if(Auth::user()->photo)
                                <img class="responsive-img" src="{!!asset('cvs/dir'.Auth::user()->id.'/'.Auth::user()->photo)!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
                            @else
                                <img class="responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
                            @endif
                        </div>
                    </div>
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
                <li class="bold">
            	    <a class="collapsible-header  waves-effect waves-teal ">Perfil de Empresa <i class="material-icons right">keyboard_arrow_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                        <li><a href="{{ route('company.edit', Auth::user()->id) }}">Datos de Empresa</a></li>
                        <li><a href="{{ route('company.edit_cuenta') }}">Datos de Cuenta</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header active  waves-effect waves-teal">Mis Vacantes <i class="material-icons right black-tes">keyboard_arrow_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ route('company.index') }}">Home</a></li>
                            <li><a href="{{ route('vacante.create') }}">Postular Vacante</a></li>
                            <li><a href="{{ route('vacante.admin') }}">Administrar Vacantes</a></li>
                            <li><a href="{{ route('prospect.index') }}">Prospectos</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-teal">Servicios <i class="material-icons right">keyboard_arrow_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ route('services.create') }}">Postular Servicio</a></li>
                            <li><a href="{{ route('services.index') }}">Administrar Servicios </a></li>
                        </ul>
                     </div>
                </li>
            </ul>
        </li>
        <br><br>
        <li class="bold"><a href="{{ route('auth.logout') }}" class="waves-effect waves-teal">Salir <i class="material-icons small right ico-aling ">exit_to_app</i></a></li>
    </ul>
</header>