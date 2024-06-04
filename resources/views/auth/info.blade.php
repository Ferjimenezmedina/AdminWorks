@extends('layouts.principal')

@section('title')
	Login
@stop

@section('content')
	<div class="getbackCuenta valign-wrapper">

		<div class="container valign">
			<div class="row">
				<section class"section">
		<h3 class="center blue-text ">Informacion Registro General <i class="material-icons">book</i></h3>
		<section class="container">
			<div class="row card preguntas">
				<div class="col s12 ">
					<div class="hoverable">
						<h5><i class="material-icons ico-aling">label</i>¿Como hacer el registro general?</h5>
						<p> </p>

						<p>1. La plataforma de aspirante crea automaticamente un curriculum vitae en formato PDF, que puede imprimirlo desde el modulo <br>'Mi Curricum' por lo cual es necesario al dar clic en acuerdo y registrarme, llenar los campos solicitados.</p>

						<p>2. Se confirma la cuenta en el email de registro dando clic en el link enviado.</p>

						<p>3. Confirmar email registrado, ingresar nuevamente email ypassword desde el link en la plataforma de empleos.</p>

						<p>4. Finalizar los campos como datos personales, presentacion, desarrollo profesional y academico.<br> Es necesario terminar de completar si no, no va a poder hacer uso de la plataforma.</p>
						</div>
					<div class="hoverable">
						<h5><i class="material-icons ico-aling">label</i>Llenar datos solicitados</h5>
						<p></i>Nuestro trabajo es ofrecerle un servicio de calidad, por lo tanto, si usted desea crear desde cero su curriculum debe llenar las areas dentro del modulo de registro al confirmar la cuenta con los campos en (*) hasta finalizar.
						</p>

						<p> **NOTA**: Si el registro no es completado en un lapso de 24 a 36 Horas, sera eliminado y tendra que hacerlo de nuevo.</p>
						<p>Si le es complicado, levante un chat para asesoria en linea, de 8:00 a 18:00 Horas</p>


					</div>
					
					<div class="input-field col s12 grey-text text-darken-2 right-align">
                                                            
                                                            <input type ='submit' class="btn waves-effect waves-light black darken-2 "  value = 'REGISTRARME AHORA' onclick="location.href = '{{ route('auth.register') }}'"/>
								
                                                               
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