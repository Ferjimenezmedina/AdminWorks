@extends('aspirantes.admin_user')

@section('title') Mis Postulaciones  @stop 

@section('titleHeader')Mis Postulaciones   @stop 
@section('content')
	<section class="container">
		<div class="row">
		<div class="col s12">
		<h3 class="blue-text">Mis Postulaciones / Historial</h3>
			<table class="responsive-table striped">
	        <thead>
	          <tr>
	              <th data-field="id">ID Vacante</th>
	              <th data-field="name">Nombre</th>
	              <th data-field="name">Vacante Postulada</th>
				  <th data-field="price">Dia de postulacion</th>
	              <th data-field="name">Salario</th>
				  
	              <th data-field="price">Ver</th>
	          </tr>
	        </thead>
	
    @foreach($postulations as $postulation)

    <tr> 
             <td> {{ $postulation->vacant->id }}</td>
			 <td> {{ $postulation->vacant->title }}</td>
			 <td> {{ $postulation->vacant->created_at->format('d-m-Y') }}</td>
			 <td> {{ $postulation->created_at->format('d-m-Y') }}</td>
			 <td> ${{ number_format($postulation->vacant->min_salary, 2, ',', ' ')  }}</td>
			 <td><a href="{{ route('vacante.show', $postulation->vacant_id) }} " target="_blank" class="modal-trigger btn-floating waves-effect waves-light blue btn btn-get-prospect"><i class="material-icons white-text">visibility</i></a> </td>
			 
   
            <td>
	
		
    </tr> 
	@endforeach	
    

    
</tbody> 


	        </tbody>
	      </table>
		</div>
	</div>
	</section>

	<div class="cartelPer z-depth-1">
		
	</div>
</section>
@stop 