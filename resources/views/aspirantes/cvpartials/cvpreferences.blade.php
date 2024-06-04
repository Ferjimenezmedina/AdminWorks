<div class="row">
    <div class="col s12">
        <h5 class="white">Mis Preferencias <i class="material-icons left blue-text ">menu</i></h5>
    </div>
    <div class="row">
        @foreach($user->perdatas as $pdata)
            <div class="col s12 m6 box-desc-expe-left">
                <h6>Situación Actual: <span>{{ $pdata->situcacion_ac }}.</span></h6>
                <h6>Puesto de Trabajo Deseado: <span>{{ $pdata->puesto_des }}.</span></h6>
                <h6>Disponibilidad Para Viajar: <span>@if($pdata->disp_viajar == 1)Si. @else No.  @endif</span></h6>
            </div>
            <div class="col s12 m6 box-desc-expe-left">
                <h6>Disponibilidad para Cambiar de Residencia: <span>@if($pdata->disp_cam_res == 1)Si. @else No.  @endif</span></h6>
                <h6>Sueldo Requerido: <span>{{ $pdata->req_salary }}</span></h6>
                <h6>Sueldo Deseado: <span>{{ $pdata->des_salary }}</span></h6>
            </div>
        @endforeach
    </div>
</div>