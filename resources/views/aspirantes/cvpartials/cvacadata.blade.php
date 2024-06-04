<div class="row">
	<div class="col s12">
	</div>
	@foreach($user->acadatas as $data)
                <h5 class="blue-text">Desarrollo Profesional y Academico<i class="material-icons left small">school</i>  </h5> 
	<div class="col s12 m6 box-desc-expe-left">
			<h6>Máximo Grado de Estudios: <span>{{ trans('empleados.max_academy.'.$data->max_studio) }}</span></h6>
			<h6>Institución: <span>{{ $data->institucion }}</span></h6>
			<h6>Estudia Actualmente: <span>@if($data->ac_estudia) Si. @else No.  @endif</span></h6>
	</div>
	<div class="col s12 m6 box-desc-expe-left">
			<h6>Fecha de Inicio: <span>{{ trans('empleados.dates.'.$data->mes_start)." ".$data->year_start }}</span></h6>
			<h6>Fecha de Termino: 
				<span>
					@if($data->ac_estudia)
					  A la Fecha
					@else 
					  {{ trans('empleados.dates.'.$data->mes_fin)." ".$data->year_fin }}
					@endif
				</span>
			</h6>
	</div>
	@endforeach
		<div class="row">
			<div class="col s12 m8 offset-m2">
						<h5 class="blue-text">Otros<i class="material-icons left small">school</i>  </h5>
				<div class="row">
					<div class="col s12">
						<ul class="ul-offi-soft">
							@foreach($user->acadatexts()->orderBy('id', 'DESC')->get()  as $adaex)
								<li class="">{{ $adaex->type_acex }}<span class="right">{{ $adaex->acaext_tit }}</span></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
</div>