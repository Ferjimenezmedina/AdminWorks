@extends('layouts.principal')

@section('title')
	Login
@stop

@section('content')
	<div class="getbackCuenta valign-wrapper">

		<div class="container valign">
			<div class="row">
				<section class"section">
		<h3 class="center blue-text ">Informacion Registro Personal <i class="material-icons">book</i></h3>
		<section class="container">
			<div class="row card preguntas">
				<div class="col s12 ">
					<div class="hoverable">
						<h5><i class="material-icons ico-aling">label</i>¿Como hacer el registro personal?</h5>
						<p> </p>

						<p>1. Es necesario al dar clic en acuerdo y registrarme, llenar los campos solicitados.</p>

						<p>2. Se confirma la cuenta en el email de registro dando clic en el link enviado.</p>

						<p>3. Confirmar email registrado y password desde el link en la plataforma de empleos</p>
						</div>
					<div class="hoverable">
						<h5><i class="material-icons ico-aling">label</i>Llenar datos solicitados</h5>
						<p></i>Nuestro trabajo es ofrecerle un servicio de calidad, por lo tanto, usted debe contar con un solo curriculum vitae (CV) para hacer uso de la plataforma y postularse en las vacantes.
						</p>

						<p> **NOTA**: Si el registro no es completado en un lapso de 24 Horas, sera eliminado y tendra que hacerlo de nuevo</p>

						<p>Si le es complicado, levante un chat para asesoria en linea, de 8:00 a 18:00 Horas</p>


					</div>
					<div class="">
							{!!Form::checkbox('acepto', 'value' )!!}
							<input name="acepto" type="checkbox" id="test5" required/>
							<label for="test5" class="grey-text">He leído las normas de registro y estoy de acuerdo</label>
						</div>
					<div class="input-field col s12 grey-text text-darken-2 right-align">
                                                            
                                                            <input type ='submit' class="btn waves-effect waves-light black darken-2 "  value = 'REGISTRARME AHORA' onclick="location.href = '{{ route('auth.registerpersonal1') }}'"/>
								
                                                               
			</p>
							</button>
			</div>
					</div>
					</section>
					</section>
					</br>

					<
		</div>
	</section>
</section>
</div>
</div>
		
	</div>
@stop