	<div class="card-content">
		<div class="row">
			<div class="col hide-on-med-and-up center-align">
				<div class="col s8 offset-s2">
					@if(Auth::user()->photo)
	              <img class="circle responsive-img" src="{!! asset('img/photos/'.Auth::user()->photo) !!}">
	            @else
	              <img class="circle responsive-img" src="{!! asset('img/cuenta.svg') !!}" onerror="this.onerror=null; this.src='{!! asset('img/cuenta.png') !!}'">
	            @endif
				</div>
				<a href="#!" class="btn waves-effect  blue-text btn-large btn-chip waves-light ">Imprimir<i class="material-icons right btn-chip ">print</i></a>
				<h6 class="black-text text-darken-3">{{ Auth::user()->birthdate->format('d').'/'.trans('empleados.dates.'.Auth::user()->birthdate->format('F')).'/'.Auth::user()->birthdate->format('Y') }}</h6>
				<h6 class="black-text text-darken-4">{{ Auth::user()->birthdate->age }} años</h6>
			</div>
			<div class="col s12 m9">
				@foreach($user->cadres as $cadre)
					<h5 class="mblack">{{ $cadre->title_prof }}</h5>
					<div class="row">
						<div class="col s12 m6">
							<h6 class="h-cv-prin condensada-regular">{{ $user->FullName }}<i class="material-icons left small blue-text text-darken-3">account_circle</i></h6>
						</div>
						<div class="col s12 m6">
							<h6 class="h-cv-prin condensada-regular"><strong class="blue-text text-darken-3">Especialista:</strong> {{ $cadre->specialty }}</h6>
						</div>
					</div>
				@endforeach
				@foreach($user->perdatas as $pdata)
				<div class="row fila-cv-pers">
					<div class="col s5 m6">
						<p> {{ $pdata->telefono1 }} <i class="material-icons blue-text  left">contact_phone</i></p>
					</div>
					<div class="col s7 m6">
						<p>{{ $user->email }}<i class="material-icons blue-text left">email</i></p>
					</div>
				</div>
				<div class="row fila-cv-pers">
					<div class="col s12 m4">
						<h6>Direccion:</h6>
						<p>{{ $pdata->calle.' No.Ext '.$pdata->no_ext }} @if($pdata->no_int) No.Int {{ $pdata->no_int }} @endif </p>
					</div>
					<div class="col s6 m4">
						<h6 >Colonia:</h6>
						<p>{{ $pdata->colonia }}</p>
					</div>
					<div class="col s6 m4">
						<h6>Código Postal:</h6>
						<p>{{ $pdata->codigo_postal }}</p>
					</div>
				</div>
				<div class="row fila-cv-pers">
					<div class="col s4">
						<h6>Estado Civil</h6>
						<p >{{ $pdata->estado_civil }}</p>
					</div>
					<div class="col s4">
						<h6>RFC</h6>
						<p>{{ $pdata->rfc }}</p>
					</div>
					<div class="col s4">
						<h6 >CURP</h6>
						<p>{{ $pdata->curp }}</p>
					</div>
				</div>
				<div class="row fila-cv-pers">
					<div class="col s12 m4">
						<h6>Páis:</h6>
						<p>{{ $pdata->pais->pais }}</p>
					</div>
					<div class="col s6 m4">
						<h6>Estado:</h6>
						<p>{{ $pdata->edo->nombre }}</p>
					</div>
					<div class="col s6 m4">
						<h6>Ciudad:</h6>
						<p>{{ $pdata->municipio->nombre }}</p>
					</div>
				</div>
				@endforeach
			</div>
			<div class="col hide-on-small-only m3 center-align">
			@if(Auth::user()->photo)
              <img class="circle responsive-img" src="{!!asset('cvs/dir'.Auth::user()->id.'/'.Auth::user()->photo)!!}">
            @else
              <img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
            @endif
				
				<h6 class="blue-text">{{ Auth::user()->birthdate->format('d').'/'.trans('empleados.dates.'.Auth::user()->birthdate->format('F')).'/'.Auth::user()->birthdate->format('Y') }}</h6>
				<h6 class="grey-text text-darken-4">{{ Auth::user()->birthdate->age }} años</h6>
				@foreach($user->perdatas as $pdata)
					<h6 class="grey-text tooltipped" data-position="left" data-delay="50" data-tooltip="Sueldo Deseado" >{{ $pdata->des_salary }}</h6>
					<h6 class="grey-text tooltipped" data-position="left" data-delay="50" data-tooltip="Sueldo Requerido" >{{ $pdata->req_salary }}</h6>
				@endforeach
			</div>
		</div>
	</div>