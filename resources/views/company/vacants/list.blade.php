@extends('admin.admin_layout')

@section('title', 'Vacantes')

@section('content')


<table class="table table-striped">
<thead> 
            
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th>ID </th> 
            <th> </th>
            <th> </th>
            <th>Titulo de la vacante</th> 
            <th>Alta</th>
            <th> </th>
            <th> </th>
            <th>Expira</th>
            <th> </th>
            <th>Vacantes</th> 
            <th>Actualizacion de vacante</th>
            <th>ID Estado</th>
            <th>ID Municipio</th>
            

            
</thead> 
<tbody> 
    @foreach($vacants as $vacant)
    <tr> 
             <td> </td>
             <td> </td>
             <td> </td>
             <td> </td>
             <td> {{ $vacant->company_id}}</td>
             <td> </td>
             <td> </td>
             <td> {{ $vacant->title}}</td>
             <td> {{ $vacant->created_at }}</td>
             <th> </th>
             <th> </th>
             <td> {{ $vacant->date_expiration }}</td>
             <th> </th>
             <td> {{ $vacant->num_vacan }}</td>
            <td> {{ $vacant->updated_at }}</td>
            <td> {{ $vacant->state_id }}</td>
            <td> {{ $vacant->mpio_id }}</td>
            <td>
    </tr> 
    @endforeach
    
</tbody> 
<p>
Vacantes: {{ $vacants->total() }}
</p>
</table> 
{!! $vacants->render() !!}
@endsection

