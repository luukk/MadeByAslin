<?php
$lan = isset($_GET['lan']) ? $_GET['lan'] : 'nl';

//echo $lan;

$query  = 'SELECT * FROM '. $lan;
$result = $mysqli->query($query);

$a = array();

while($row = $result->fetch_assoc()){
  array_push($a,$row['text']);
}
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
