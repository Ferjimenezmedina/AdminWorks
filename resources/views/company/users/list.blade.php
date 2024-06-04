@extends('admin.admin_layout')

@section('title', 'Empresas')

@section('content')
<table class="table table-striped">
<th> </th> 
<th> </th> 
<th>Fecha de registro</th> 
            <th>ID</th> 
            <th>Nombre</th> 
            <th>Apellido</th>
            <th>Correo</th> 
            <th>Fecha de nacimiento</th>
</thead> 
<tbody> 
    @foreach($users as $user)
    <tr> 
                <td> </td> 
                <td> </td> 
             <td> {{ $user->created_at }}</td>
            <td> {{ $user->id }}</td>
            <td> {{ $user->name }}</td>
            <td> {{ $user->a_paterno }}</td>
            <td> {{ $user->email }}</td>
            <td> {{ $user->birthdate }}</td>
            
            <td>
    </tr> 
    @endforeach
    
</tbody> 
<p>
   Usuarios: {{ $users->total() }}
   
</p>
</table> 

{!! $users->render() !!}

@endsection


