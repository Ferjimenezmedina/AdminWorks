@extends('admin.admin_layout')

@section('title', 'Estados')

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
            <th>ID Estado</th> 
            <th>Siglas</th>
            <th>Nombre</th>
            
</thead> 
<tbody> 
    @foreach($estados as $estado)
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

            <td> {{ $estado->clave }}</td>
            <td> {{ $estado->abrev }}</td>
            <td> {{ $estado->nombre }}</td>
            
            <td>
    </tr> 
    @endforeach
    
</tbody> 
<p>
Estados: {{ $estados->total() }}
</p>
</table> 
{!! $estados->render() !!}
@endsection

