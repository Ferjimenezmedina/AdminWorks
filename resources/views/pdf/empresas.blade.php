<!DOCTYPE html>
<html lang="es">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Usuarios de Empresas</title>
    <link rel="stylesheet" href="css/pdfa.css" media="all" />
  </head>
  <body>
  <header class="clearfix">
  <div id="logo">
  <img src="{!!asset('img/occmash.jpg')!!}">
      </div
                    <h2>Lista de Usuarios Empresas</h2>
                    
                <div id="">
                        <div class="date">Fecha del reporte: {{ $date }}
                       
                        </div>
</div>
</br>
</br>
<table>

        <thead>
          <tr>
            <th class="desc">Nombre</th>
            <th></th>
            <th></th>
            <th class="unit">Apellido Paterno</th>
            <th></th>
            <th></th>
            <th class="qty">Correo Electronico</th>
            <th></th>
            <th></th>
            <th class="service">Registro</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user)  
        <tr>
            <td class="desc">{{ $user->name }}</td>
            <td></td>
            <td></td>
            <td class="unit">{{ $user->a_paterno }}</td>
            <td></td>
            <td></td>
            <td class="qty" align="text-center">{{ $user->email }}</td>
            <td></td>
            <td></td>
            <td class="qty">{{ $user->created_at }}</td>
            <td></td>
            <td></td>
          </tr>


          @endforeach
</header>
  </body>
</html>