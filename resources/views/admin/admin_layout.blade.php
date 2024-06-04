<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Comatible" content="IE=edge,chrome=1"/>

	<title>@yield('title') - Administrador</title>
	<!--Import materialize.css-->
	{!!Html::style('css/flexslider.css')!!}
	{!!Html::style('css/admin-materialize.css')!!}
	{!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
	{!!Html::style('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic')!!}
	{!!Html::style('css/adstyle.css')!!}


</head>
<body>
	@include('admin.menuAd')	
 	<main>

 			  <div class="col s12 m12"> 
 			  	@yield('content')
 			  </div>

 	</main>

	@include('admin.footer')	
	
	
{{-- 	@include('layouts.footer_principal') --}}
	
	{!!Html::script('js/jquery.js')!!}
	{!!Html::script("js/materialize.js")!!}
	{!!Html::script("js/init.js")!!}

	@section('script')
	@show
	
	<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
			$(".dropdown-button").dropdown();
			$('.modal-trigger').leanModal();
			$('select').material_select();

			$('.datepicker').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 15 // Creates a dropdown of 15 years to control year
			  });
		});
	</script>
</body>
</html>