@extends('aspirantes.admin_user')

@section('title', 'Servicios')

@section('content')


<table class="table table-striped">
<thead> 
<td> </td> 
<td> </td> 

            <th>ID Servicio</th> 
            <th>ID Usuario</th> 
            <th>Nombre del Servicio</th>
            <th>Alta</th> 
            <th>Actualizacion de Servicio</th>
            <th>Categoria</th> 
            <td> </td> 
            <th>Subcategoria</th>
            
</thead> 
<tbody> 
    @foreach($services as $servi)
    <tr> 
    <td> </td> 
    <td> </td> 

            <td> {{ $servi->id }}</td>
            <td> {{ $servi->user_id }}</td>
            <td> {{ $servi->service }}</td>
            <td> {{ $servi->created_at }}</td>
            <td> {{ $servi->updated_at }}</td>
            <td> {{ $servi->category_id }}</td>
            <td> </td> 
            <td> {{ $servi->subcategory_id }}</td>
            <td>
    </tr> 
    @endforeach
    
</tbody> 
<p>
Servicios: {{ $services->total() }}
</p>
</table> 
{!! $services->render() !!}
@endsection

