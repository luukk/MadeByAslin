<?php
$lan = isset($_GET['lan']) ? $_GET['lan'] : 'nl';


$query  = 'SELECT '.$lan.' FROM language';
$result = $mysqli->query($query);
$a = array();

while($row = $result->fetch_assoc()){
  array_push($a,$row[$lan]);
}


$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
