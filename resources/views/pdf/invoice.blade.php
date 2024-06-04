<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>CV {{ $user->FullName }}</title>
    <link rel="stylesheet" href="css/pdfs.css" media="all" />
  </head>
  <body>
        <section class="container">
            <header>
                @foreach($user->cadres as $cadre)
                    <h1>{{ $cadre->title_prof }}</h1>
                    <div class="des-izq">
                        <p class="justify">{{$cadre->descrip_prof}}</p> <p class="parraf"><strong>Especialidad: </strong> {{$cadre->specialty}}</p>
                    </div>
                @endforeach
                @foreach($user->perdatas as $pdata)
                    @if($user->photo)
                        <img class="circle responsive-img" src="{!! asset('cvs/dir'.$user->id.'/'.$user->photo) !!}">
                    @else
                        <img class="circle responsive-img" src="img/cuenta.png">
                    @endif
                    <h3 class="h-title h-f">Información Personal </h3>
                    <div class="personal">
                       <p class="parraf"><strong>Nombre: </strong> <span class="undeline">{{ $user->FullName }}</span></p>
                       <p class="parraf"><strong>Dirección: </strong>{{ $pdata->calle.' No.Ext '.$pdata->no_ext }}
                          @if($pdata->no_int)No.Int {{$pdata->no_int}} @endif
                       <br> {{$pdata->colonia . ' ' . $pdata->codigo_postal}}</p>
                       <p class="parraf"><strong>{{ trans('empleados.tel.'. $pdata->tipo_tel1) }} </strong>{{ $pdata->telefono1 }}
                          @if($pdata->telefono2) <strong>{{ trans('empleados.tel.'. $pdata->tipo_tel2) }} </strong>{{ $pdata->telefono2 }} @endif
                       </p>
                       <p class="parraf"><strong>Correo Electrónico: </strong> <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>
                    </div>
                    <div class="personal">
                       <p class="parraf"><strong>Fecha de Nacimiento: </strong> {{ $user->birthdate->format('d').'/'.trans('empleados.dates.'.$user->birthdate->format('F')).'/'.$user->birthdate->format('Y') }}</p>
                       <p class="parraf"><strong>Estado: </strong>{{ $pdata->edo->nombre }}</p>
                        <p class="parraf"><strong>Ciudad: </strong>{{ $pdata->municipio->nombre }}</p>
                        <p class="parraf"><strong>Sueldo Requerido:</strong>{{ $pdata->req_salary }}</p>
                        <p class="parraf"><strong>Sueldo Deseado:</strong>{{ $pdata->des_salary }}</p>
                    </div>
                @endforeach
            </header>
            <section class="">
                 <h3 class="h-title">Desarrollo Profesional y Academico </h3>
                 @foreach($user->acadatas as $data)
                    <p class="parraf">
                    <strong>
                       {{$data->year_start}} -
                       @if($data->ac_estudia)
                         A la Fecha
                       @else
                         {{ $data->year_fin }}
                       @endif
                    </strong> &nbsp;&nbsp;&nbsp; <strong>{{ $data->institucion }}</strong> </p>

                 <ul class="carrera">
                    <li class="aling-left ">{{ $data->title_study }}</li>
                    <li class="aling-right "><strong>{{ $data->max_studio }}</strong></li>
                 </ul>
                 @endforeach
                 <h3 class="h-title">Otros </h3>
                 <ul class="ability">
                     @foreach($user->acadatexts()->orderBy('id', 'DESC')->get()  as $adaex)
                         <li class=""><strong>{{ $adaex->type_acex }}</strong> - <span class="right">{{ $adaex->acaext_tit }}</span></li>
                     @endforeach
                 </ul>
                 <br>
                 <h3 class="h-title">Experiencia de Trabajo</h3>
                 <ul class="experiencia">
                    @foreach($user->expes()->orderBy('id', 'DESC')->get()  as $expe)
                    <li><strong>{{ trans('empleados.dates.'.$expe->mo_ini_exp) .' '.$expe->y_ini_exp .' - ' .trans('empleados.dates.'.$expe->mo_fin_exp) ." ".$expe->y_fin_exp.  '- Empresa: '. $expe->empresa_exp .' - Puesto: ' .  $expe->puesto_exp}}.</strong> <br> {{ $expe->descrip_exp }}</li>
                    @endforeach
                 </ul>
                 <h3 class="h-title">Habilidades</h3>
                 <ul class="ability">
                     @foreach($user->abils()->orderBy('id', 'DESC')->get()  as $abi)
                     <li>{{ $abi->ability }} <strong> <br> {{ $abi->nivel }}  {{ $abi->year_exp }}</strong></li>
                    @endforeach
                 </ul>
                 <h4 class="h4-dif">Ofimática</h4>
                 <p class="parrafo">
                     @foreach($user->ofis()->orderBy('id', 'DESC')->get() as $ofi)
                         {{ $ofi->ofimatica }}.
                     @endforeach
                 </p>
                 <h4 class="h4-dif">Software</h4>
                 <p class="parrafo">
                     @foreach($user->softs()->orderBy('id', 'DESC')->get() as $soft)
                         {{ $soft->software }}.
                     @endforeach
                 </p>

                 <ul class="in-line">
                     @foreach($user->langs()->orderBy('id', 'DESC')->get()  as $leng)
                         <li ><strong>{{ $leng->idioma }}</strong> - {{ $leng->idioma_nivel }}</li>
                     @endforeach
                 </ul>
                 
                 <br>
                 <div class="firma">
                     <h4> {{ $user->FullName }}</h4>
                 </div>
            </section>
      <footer>
      <span class="black-text condensada-regular">© <?php echo date("Y");?> </span><span class="bolt black-text">Copyright</span> <span class="black-text condensada-regular">AdminWorks</span>
      </footer>
    </section>
  </body>
</html>