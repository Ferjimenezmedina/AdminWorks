<!DOCTYPE html>
<html>
<head>

<?php

$c=Request::segment(1); //metodo para recuperar el nombre del controlador
$m=Request::segment(2); //metodo para recuperar el metodo del controlador
if($c=="pruebas" and $m=="mapa")
{   

       //recupero la direccion 
	$direccion=$usuarios[0]["direccion"]; 
		
	//realizamos el proceso llamado codificación geográfica
	$xml="http://maps.googleapis.com/maps/api/geocode/xml?address={$direccion}&sensor=true";
 
	//ocupo DOMDocument que es para manipular un documento xml  
     
	$doc=new DOMDocument();
	$doc->load($xml);
	$mapas=$doc->getElementsByTagName("result");

	foreach($mapas as $mapa)
	{
		$latitud=$mapa->getElementsByTagName("lat");
		$latitud=$latitud->item(0)->nodeValue;
		$longitud=$mapa->getElementsByTagName("lng");
		$longitud=$longitud->item(0)->nodeValue;
	}
  
?>


<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?sensor=true">
</script>

