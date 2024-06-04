<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Geolocalizacion</title>
</head>
<body>

	<div id="mapa">--ACA VA EL MAPA</div>


<script type="text/javascript">
	
	function mostrar_objeto( obj ) {

		navigator.geolocation.getCurrentPosition( fn_ok, fn_error );
		var divMapa = document.getElementById('mapa');
		// var divMapa = $('#mapa')

		function fn_error() {
			var divMapa.innerHTML ='Hubo un problema solicitando los datos';

		}
		function fn_ok(){
			divMapa.innerHTML = 'Tenemos autorizacion para ver su ubicacion';
		}

		//watchPosition

		//mostrar_objeto( );

		for(var prop in obj ){
			document.write( prop+': '+obj[prop] + |'<br/>');

		}

	}

</script>

</body>
</html>