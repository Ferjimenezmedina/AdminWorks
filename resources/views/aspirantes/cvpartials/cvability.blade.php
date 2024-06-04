<div class="row">
    

		<h5 class="">Habilidades <i class="material-icons left blue-text ">assessment</i></h5>
	</div>
	<div class="">
		<table class="tabl-habili">
      <thead>
        <tr>
            <th data-field="id">Conocimiento </th>
            <th data-field="name" class="center-align">Nivel de Conocimiento</th>
            <th data-field="price" class="center-align">Años de Experiencia</th>
        </tr>
      </thead>

      <tbody>
        @foreach($user->abils()->orderBy('id', 'DESC')->get()  as $abi)
        <tr>
          <td>{{ $abi->ability }}</td>
          <td class="center-align">{{ $abi->nivel }} </td>
          <td class="center-align">{{ $abi->year_exp }}</td>
        </tr>
         @endforeach 
      </tbody>
    
	</div>
    </table>
           
</div>
