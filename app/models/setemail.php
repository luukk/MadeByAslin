<?php

$email = isset($_GET['email']) ? $_GET['email'] : '';
if ($email == '' || $email == NULL) {
}else{
  echo $email;
  $query = 'INSERT INTO userdata (email) VALUE ("'.$email.'")';
  $result = $mysqli->query($query);
}
 ?>
