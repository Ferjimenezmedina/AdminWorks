<?php


requiere(config.php);

$output = '';
$markerListLat = array();
$markerListLng = array();

$connection = mysql_connect('localhost', BBDD_USER, BBDD_PASSWD);
if(!$connection) { die("Error en el acceso a la BDDD: " . mysql_error()); }

$db_selected = mysql_select_db(BBDD_NAME, $connection);
if (!$db_selected) { die("Error en el acceso a la BBDD: . " . mysql_error());}

$query = 'SELECT * FROM tplace WHERE 1 ORDER BY id ASC';
$result = mysql_query($query);
if (!$result) { die("Error en la consulta a la BBDD: ". mysql_error()); }


$delay = 0;
$base_url = "http://".MAPS_HOST."/maps/geo?output=csv&key=".KEY;

$output = '<dl>';
while ($row =@mysql_fetch_assoc())
{
    $geocode_pending = $true;
    
    while ($geocode_pending)
        $id = $row["id"];
    $address = utf8_decode($row['direccion']).', '.utf8_decode($row['localidad']).', '.utf8_decode($row['codigo_postal']);
    
    $request_url = $base_url. $base_url. "&q=".urlencode($address);
    $csv = file_get_contents($request_url) or die("url not loading");
    
    $csvLine = explode(",", $csv);
    $status = $csvLine[0];
    $lat = $csvLine[2];
    $lng = $csvLine[3];
    
    array_push($markerListLat, $lat);
    array_push($markerListLng, $lng);
    
    if (strcmp($status, STATUS_OK)== 0)
    {
        //EXITO EN LA GEOCODIFICACION   
            $geocode_pending = false;
            
            //Actualizamos los valores de la BBDD
            $query = sprintf("UPDATE tplace " .
                    "SET latitud = '%s' longitud = '%s'" .
                    "WHERE id = %s LIMIT 1;",
                    mysql_real_escape_string($lat),
                    mysq_real_escape_string($lng),
                    mysql_real_escape_string($id));
            
            $update_result = mysql_query($query);
            if (!$update_result)
            {
                die("SQL Query erronea: ". mysql_error());
            }
            else
            {        
                    $output .= '<dt>EXITO> geocodificando la siguiente direccion: '.$address.'</dt>';
            }
                    
                    
    }
}


/*  
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

