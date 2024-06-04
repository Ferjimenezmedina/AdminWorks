<!DOCTYPE html>
<html lang="es">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Vacantes Postuladas</title>
    <link rel="stylesheet" href="css/pdfa.css" media="all" />
  </head>
  <body>
  <header class="clearfix">
  <div id="logo">
  <img src="{!!asset('img/occmash.jpg')!!}">
      </div
                    <h2>Lista de Vacantes Postuladas</h2>
                    
                <div id="">
                        <div class="date">Fecha del reporte: {{ $date }}
                       
                        </div>
</div>
</br>
</br>
<table>

        <thead>
          <tr>
            <th class="unit">ID</th>
            <th></th>
            <th class="unit">ID de Compañia</th>
            <th></th>
            <th class="desc">Titulo</th>
            <th></th>
            <th></th>
            <th class="unit">Alta</th>
            <th></th>
            <th></th>
            <th class="qty">Vence</th>
            <th></th>
            <th></th>
            <th class="service">Registro</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($vacants as $vacant)  
        <tr>
        <td></td>
            <td class="unit">{{ $vacant->id }}</td>
            td class="unit">{{ $vacant->company_id }}</td>
            <td class="desc">{{ $vacant->title }}</td>
            <td></td>
            <td></td>
            <td class="unit">{{ $vacant->created_at }}</td>
            <td></td>
            <td></td>
            <td class="qty" align="text-center">{{ $vacant->date_expiration }}</td>
            <td></td>
            <td></td>
          </tr>


          @endforeach
</header>
  </body>
</html>