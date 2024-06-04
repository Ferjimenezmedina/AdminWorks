@extends('aspirantes.admin_user')

@section('title')'Servicios'  

@section('content')


<table class="table table-striped">
<thead> 
<td> </td> 
<td> </td> 

            <th>ID Servicio</th> 
            <th>Nombre del Servicio</th>
            <th>Alta</th> 
            <th>Actualizacion de Servicio</th> 
             <th>Ver Servicio</th>
            
</thead> 
<tbody> 
    @foreach($services as $servi)
    <tr> 
    <td> </td> 
    <td> </td> 

            <td> {{ $servi->id }}</td>
            <td> {{ $servi->service }}</td>
            <td> {{ $servi->created_at }}</td>
            <td> {{ $servi->updated_at }}</td>
            <td><a href="{{ route('aspirantes.services.show', $servi->id) }} " target="_blank" class="modal-trigger btn-floating waves-effect waves-light blue btn btn-get-prospect"><i class="material-icons white-text">visibility</i></a> </td>
            <td>
    </tr> 
    @endforeach
    
</tbody> 
<p>
Servicios: {{ $services->total() }}
</p>
</table> 
{!! $services->render() !!}

@stop 

