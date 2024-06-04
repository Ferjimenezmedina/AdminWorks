@extends('aspirantes.admin_user')

@section('title') Mis Postulaciones  @stop 

@section('titleHeader')Mis Postulaciones   @stop 
@section('content')
	<section class="container">
		<div class="row">
		<div class="col s12">
		<h3 class="green-text">Mis Postulaciones</h3>
			<table class="responsive-table striped">
	        <thead>
	          <tr>
	              <th data-field="id">Vacante</th>
	              <th data-field="name">Ciudad</th>
	              <th data-field="name">Postulada</th>
	              <th data-field="name">Salario</th>
	              <th data-field="price"> </th>
	              <th data-field="price">Proceso de Selección</th>
	              <th data-field="price"></th>
	              <th data-field="price"></th>
	          </tr>
	        </thead>
	
	        <tbody>
	          <tr>
	            <td><strong>Programador PHP</strong></td>
	            <td>Chihuahua</td>
	            <td>12 Ago </td>
	            <td>$12,000</td>
	            <td><span class="green-text"><i class="material-icons">star</i></span></td>
	            <td>En Curso</td>
	            <td><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	            <td><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar Postulación"><i class="material-icons red-text">delete</i></a></td>
	          </tr>
	          <tr>
	            <td><strong>Ingeniero de Software</strong></td>
	            <td>Cd. Juarez</td>
	            <td>5 Agos</td>
	            <td>$8,000</td>
	            <td><span class="grey-text"><i class="material-icons">star_border</i></span></td>
	            <td>Finalizado</td>
	            <td><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	            <td><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar Postulación"><i class="material-icons red-text">delete</i></a></td>
	          </tr>
	          <tr>
	            <td><strong>Desarrollador Web</strong></td>
	            <td>Delicias</td>
	            <td>27 Jun</td>
	            <td>9,000</td>
	            <td><span class="grey-text"><i class="material-icons">star_border</i></span></td>
	            <td>Finalizado</td>
	            <td><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	            <td><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar Postulación"><i class="material-icons red-text">delete</i></a></td>
	          </tr>
	        </tbody>
	      </table>
		</div>
	</div>
	</section>

	<section class="container">
	<div class="row">
		<div class="col s12">
		<h3 class="green-text">Sugerencias</h3>
			<table class="responsive-table striped">
	        <thead>
	          <tr>
	              <th data-field="id">Vacante</th>
	              <th data-field="name">Ciudad</th>
	              <th data-field="price">Tipo De Contrato</th>
	              <th data-field="price">Salario</th>
	              <th data-field="price"></th>
	          </tr>
	        </thead>
	
	        <tbody>
	          <tr>
	            <td><strong>Programador PHP</strong></td>
	            <td>Chihuahua</td>
	            <td>Tiempo Completo</td>
	            <td>$12,000</td>
	            <td class="center"><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	          </tr>
	          <tr>
	            <td><strong>Ingeniero de Software</strong></td>
	            <td>Cd. Juarez</td>
	            <td>Practicante Medio Tiempo</td>
	            <td>$3,000</td>
	          	<td class="center"><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	          </tr>
	          <tr>
	            <td><strong>Desarrollador Web</strong></td>
	            <td>Delicias</td>
	            <td>Honorarios</td>
	            <td>A convenir</td>
	            <td class="center"><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	          </tr>
	        </tbody>
	      </table>
		</div>
	</div>
	<br>
</section>
@stop 