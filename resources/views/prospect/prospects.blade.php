<div class="row">
    <div class="col hide-on-med-and-up center-align">
        <div class="col s8 offset-s2">
            @if($user->photo)
                <img class="circle responsive-img" src="{!! asset('cvs/dir'.$user->id.'/'.$user->photo) !!}">
            @else
                <img class="circle responsive-img" src="{!! asset('img/cuenta.svg') !!}" onerror="this.onerror=null; this.src='{!! asset('img/cuenta.png') !!}'">
            @endif
        </div>
        <h6 class="black-text text-darken-3">{{ $user->birthdate->format('d').'/'.trans('empleados.dates.'.$user->birthdate->format('F')).'/'.$user->birthdate->format('Y') }}</h6>
        <h6 class="black-text text-darken-4">{{ $user->birthdate->age }} años</h6>
    </div>
    <div class="col s12 m9">
        @foreach($user->cadres as $cadre)
            <h5 class="mblack">{{ $cadre->title_prof }}</h5>
            <div class="row">
                <div class="col s12 m6">
                    <h6 class="h-cv-prin condensada-regular">{{ $user->FullName }} <i class="material-icons left small black-text text-darken-3">account_circle</i></h6>
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
        @if($user->photo)
            <img class="circle responsive-img" src="{!! asset('img/photos/'.$user->photo) !!}">
        @else
            <img class="circle responsive-img" src="{!! asset('img/cuenta.svg') !!}" onerror="this.onerror=null; this.src='{!! asset('img/cuenta.png') !!}'">
        @endif

            <h6 class="blue-text text-darken-3">{{ $user->birthdate->format('d').'/'.trans('empleados.dates.'.$user->birthdate->format('F')).'/'.$user->birthdate->format('Y') }}</h6>
            <h6 class="grey-text text-darken-4">{{ $user->birthdate->age }} años</h6>
    </div>

</div>
<div class="cartelPer"></div>
@include('aspirantes.cvpartials.cvexperien')

<div class="cartelPer"></div>
@include('aspirantes.cvpartials.cvability')

<div class="cartelPer"></div>
@include('aspirantes.cvpartials.cvofimatica')

<div class="cartelPer"></div>
@include('aspirantes.cvpartials.cvpreferences')

<div class="cartelPer"></div>
@include('aspirantes.cvpartials.cvacadata')

<div class="cartelPer"></div>
@include('aspirantes.cvpartials.cvexterno' )

{!!Html::script('js/jquery.js')!!}
{!!Html::script("js/materialize.js")!!}

