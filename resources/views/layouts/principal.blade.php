<!DOCTYPE html>
<html lang="es">
<head>
<script type="text/javascript">
	
	(function(){
	var content = document.getElementById("geolocation-test");

	if (navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(function(objPosition)
		{
			var lon = objPosition.coords.longitude;
			var lat = objPosition.coords.latitude;

			content.innerHTML = "<p><strong>Latitud:</strong> " + lat + "</p><p><strong>Longitud:</strong> " + lon + "</p>";

		}, function(objPositionError)
		{
			switch (objPositionError.code)
			{
				case objPositionError.PERMISSION_DENIED:
					content.innerHTML = "No se ha permitido el acceso a la posición del usuario.";
				break;
				case objPositionError.POSITION_UNAVAILABLE:
					content.innerHTML = "No se ha podido acceder a la información de su posición.";
				break;
				case objPositionError.TIMEOUT:
					content.innerHTML = "El servicio ha tardado demasiado tiempo en responder.";
				break;
				default:
					content.innerHTML = "Error desconocido.";
			}
		}, {
			maximumAge: 75000,
			timeout: 15000
		});
	}
	else
	{
		content.innerHTML = "Su navegador no soporta la API de geolocalización.";
	}
})();
</script>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Comatible" content="IE=edge,chrome=1"/>

	<title>@yield('title') - Bolsa de Trabajo</title>
	<!--Import materialize.css-->
	{!!Html::style('css/flexslider.css')!!}
	{!!Html::style('css/materialize.min.css')!!}
	{!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
	{!!Html::style('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic')!!}
	{!!Html::style('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300')!!}
	{!!Html::style('https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic')!!}
	{!!Html::style('https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,400italic,500italic,700,700italic,300italic')!!}
	{!!Html::style('css/style.css')!!}

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5Kf3995vMKu7ovnhvPRrh8GJvClkHGIT";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
</head>
<body>

	@include('layouts.menu_principal')	
	
	@yield('content')
	
	@include('layouts.footer_principal')
	
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