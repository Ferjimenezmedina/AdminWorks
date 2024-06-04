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

    $cat="Informatica/Telecomunicaciones";
    $subcategory="Desarrollador(a) Java - Senior";

    $server="localhost";
    $username="root";
    $password="";   
    $database="adminworks";
    header('Access-Control-Allow-Origin: *'); 
    header("Content-type: text/xml");

    // Start XML file, echo parent node
    echo "<?xml version='1.0' ?>";
    echo '<markers>';

    // Opens a connection to a MySQL server
    $connection=mysqli_connect($server,$username, $password, $database);
    if (!$connection) 
    {
      die('Not connected : ' . mysqli_error());
    }

    $result =$connection->query("SELECT id from categories where category ='".$cat."'");
    if (!$result) 
    {
      die('Invalid query: ' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($result))
    {
        $id_cat=$row['id'];
        
    }

    $result = $connection->query("SELECT id from subcategories where subcategory ='".$subcategory."'");
    if (!$result) {
      die('Invalid query: ' . mysqli_error());
    }
    while ($row = mysqli_fetch_array($result))
    {
        $id_subc=$row['id'];
    }

if ($cat !="") 
{
     
    if ($subcategory != "") {
        $result2 = $connection->query("SELECT * FROM vacants where activo='true' and lat!='0.000000' and category_id='".$cat."' and  subcategory_id='".$subcategory."'", MYSQLI_USE_RESULT);
        if (!$result2) 
        {
            die('Invalid query: ' . mysqli_error());
        }       
        
        // Iterate through the rows, printing XML nodes for each
        while ($row2 = mysqli_fetch_array($result2))
        {
          // Add to XML document node
          echo '<marker ';
          echo 'id="' . $row2['id'] . '" ';
          echo 'title="' . parseToXML($row2['title']) . '" ';
          echo 'specialty="' . parseToXML($row2['specialty']) . '" ';
          echo 'description="' . parseToXML($row2['description']) . '" ';
          echo 'lat="' . $row2['lat'] . '" ';
          echo 'lng="' . $row2['lng'] . '" ';
          
          echo '/>';
           echo '</markers>';
        }

        // End XML file
       
    }
    else
    {
        $result3 = $connection->query("SELECT * FROM vacants where activo='true' and lat!='0.000000' and category_id='".$cat."'"); 
        if(!$result3) 
        {
            die('Invalid query: ' . mysqli_error());
        }
        while ($row3 = mysqli_fetch_array($result3)){
  
          
          // Add to XML document node
          echo '<marker ';
          echo 'id="' . $row3['id'] . '" ';
          echo 'title="' . parseToXML($row3['title']) . '" ';
          echo 'specialty="' . parseToXML($row3['specialty']) . '" ';
          echo 'description="' . parseToXML($row3['description']) . '" ';
          echo 'lat="' . $row3['lat'] . '" ';
          echo 'lng="' . $row3['lng'] . '" ';
          
          echo '/>';
           echo '</markers>';
        }

        // End XML file
       

    }
    
}
else
{
    $result4 = $connection->query("SELECT * FROM vacants where activo='true' and lat!='0.000000'", MYSQLI_USE_RESULT);
    if (!$result4) {
  die('Invalid query: ' . mysqli_error());
}
     
    while ($row4 = mysqli_fetch_array($result4)){
        
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . $row4['id'] . '" ';
  echo 'title="' . parseToXML($row4['title']) . '" ';
  echo 'specialty="' . parseToXML($row4['specialty']) . '" ';
  echo 'description="' . parseToXML($row4['description']) . '" ';
  echo 'lat="' . $row4['lat'] . '" ';
  echo 'lng="' . $row4['lng'] . '" ';
  
  echo '/>';

 echo '</markers>';

}


}





?>