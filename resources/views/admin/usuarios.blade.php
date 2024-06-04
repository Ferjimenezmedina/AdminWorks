@extends('admin.admin_layout')

@section('title', 'Usuarios Aspirantes')

@section('content')

<h4>Lista de Usuarios</h4>

<table class="table table-striped">
<thead> 
<td> </td> 
<td> </td>   
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
            <td> {{ $user->id }}</td>
            <td> {{ $user->name }}</td>
            <td> {{ $user->a_paterno }}</td>
            <td> {{ $user->email }}</td>
            <td> {{ $user->birthdate }}</td>
            <td> {{ $user->password }}</td>
            <td>
                
    </a href="/users/show/{{ $user->id }}"><span class="label label-info"></span>Ver</a>
</a href="/users/edit/{{ $user->id }}"><span class="label label-success"></span>Editar
</a href="{{ url('/users/destroy',$user->id) }}"><span class="label label-danger"></span>Eliminar</a></a>
</td>
    @endforeach
    
</tbody> 
<p>
Total de aspirantes {{ $users->total() }}
</p>
</table> 
{!! $users->render() !!}
@endsection
