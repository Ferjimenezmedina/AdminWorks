@extends('admin.admin_layout')

@section('title', 'Municipios')

@section('content')


<table class="table table-striped">
<thead> 
<td> </td> 
<td> </td> 
<td> </td> 
<td> </td> 
<td> </td> 
<td> </td> 
<td> </td> 
<td> </td> 
<td> </td> 
<td> </td> 
<td> </td> 
<td> </td>
            <th>ID Municipio</th> 
            <th>Clave</th> 
            <th>Nombre</th>
            
</thead> 
<tbody> 
    @foreach($municipios as $municipio)
    <tr> 
    <td> </td> 
    <td> </td> 
    <td> </td> 
    <td> </td> 
    <td> </td> 
    <td> </td> 
    <td> </td> 
    <td> </td> 
    <td> </td> 
    <td> </td> 
    <td> </td> 
    <td> </td> 

            <td> {{ $municipio->id }}</td>
            <td> {{ $municipio->clave }}</td>
            <td> {{ $municipio->nombre }}</td>
            
            <td>
    </tr> 
    @endforeach
    
</tbody> 
<p>
Municipios: {{ $municipios->total() }}
</p>
</table> 
{!! $municipios->render() !!}
@endsection

