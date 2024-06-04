<?php

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

$server="localhost";
$username="root";
$password="";
$database="adminworks";
// Opens a connection to a MySQL server
$connection=mysqli_connect($server,$username, $password, $database);
if (!$connection) {
  die('Not connected : ' . mysqli_error());
}

// Set the active MySQL database
$result = $connection->query("SELECT * FROM vacants where activo='true' and lat!='0.000000'", MYSQLI_USE_RESULT);

// Select all the rows in the markers table

if (!$result) {
  die('Invalid query: ' . mysqli_error());
}
header('Access-Control-Allow-Origin: *'); 
header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = mysqli_fetch_array($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . $row['id'] . '" ';
  echo 'title="' . parseToXML($row['title']) . '" ';
  echo 'specialty="' . parseToXML($row['specialty']) . '" ';
  echo 'description="' . parseToXML($row['description']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  
  echo '/>';

}

// End XML file
echo '</markers>';
?>