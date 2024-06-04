<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Comatible" content="IE=edge,chrome=1"/>

	<title>@yield('title') - Aspirante</title>
	<!--Import materialize.css-->
	{!!Html::style('css/flexslider.css')!!}
	{!!Html::style('css/admin-materialize.css')!!}
	{!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
	{!!Html::style('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic')!!}
	{!! Html::style("https://fonts.googleapis.com/css?family=Raleway:300,400") !!}
	{!!Html::style('css/adstyle.css')!!}


</head>
<body>
	@include('aspirantes.menuAd')	
 	<main>
		<div class="col s12 m12 ">
 		  	@yield('content')
		</div>
 	</main>

	@include('aspirantes.footer')	
	
	
{{-- 	@include('layouts.footer_principal') --}}
	
	{!! Html::script('js/jquery.js') !!}
	{!! Html::script("js/materialize.js") !!}
	{!! Html::script("js/init.js") !!}

	@section('script')
	@show
	
	<script>
		$( document ).ready(function(){
			$(".dropdown-button").dropdown();
			$('.modal-trigger').leanModal();
			$('select').material_select();
			$('.tooltipped').tooltip({delay: 50});
		});
	</script>
</body>
</html>