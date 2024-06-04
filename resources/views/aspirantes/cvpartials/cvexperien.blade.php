<div class="row">
	<div class="col s12">
		<h5 class="white">Experiencia Profesional <i class="material-icons left blue-text">work</i></h5>
	</div>
	<div class="col s12">
		<ul class="collapsible popout" data-collapsible="accordion">
		@foreach($user->expes()->orderBy('id', 'DESC')->get()  as $expe)
	    <li>
			<div class="collapsible-header"><i class="material-icons">label</i>{{ $expe->puesto_exp }}
	      		
				  
			</div>
			<div class="collapsible-body">
				<div class="row">
					<div class="col s12 m6 box-desc-expe-left">
						<h6>Empresa: <span>{{ $expe->empresa_exp }}</span></h6>
						<h6 class="hide-on-med-and-up">Periodo: <span>{{ $expe->mo_ini_exp .' '.$expe->y_fin_exp}}
							   @if($expe->to_date == 1)
								 - A la Fecha
							   @else
								 - {{ $expe->mo_fin_exp ." ".$expe->y_fin_exp}}
							   @endif</span></h6>
						<h6>Referencia: <span>{{ $expe->referencia }}</span></h6>
						<h6><span>{{ $expe->puesto }} {{ $expe->tel_experien }}</span></h6>
					</div>
					<div class="col s12 m6 box-desc-expe">
						<h6>Descripción de Actividades:</h6>
						<p>{{ $expe->descrip_exp }}</p>
					</div>
				</div>
			  </div>
	    </li>
	    @endforeach
	  </ul>
	</div>
</div>