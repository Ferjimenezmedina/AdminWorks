@extends('company.admin_layout')
@section('title') Busqueda de Prospectos  

@section('content')

<table class="table table-striped">
<th> </th> 
<th> </th> 
            <th>ID</th> 
            <th>Nombre</th> 
            <th>Apellido</th>
            <th>Correo</th> 
            <th>Fecha de nacimiento</th>
			<th>Ver CV Aspirante</th>
			<th></th> 
</thead> 
<tbody> 
    @foreach($users as $user)
    <tr> 
                <td> </td> 
                <td> </td> 
            <td> {{ $user->id }}</td>
            <td> {{ $user->name }}</td>
            <td> {{ $user->a_paterno }}</td>
            <td> {{ $user->email }}</td>
            <td> {{ $user->birthdate }}</td>
			
			<td><a href="{{ route ('cv.pdf', $user->id) }} " target="_blank" class="modal-trigger btn-floating waves-effect waves-light blue btn btn-get-prospect"><i class="material-icons white-text">visibility</i></a> </td>
    
            <td>
    </tr> 
    @endforeach
    
</tbody> 
</table> 

{!! $users->render() !!}

@endsection
 