<?php
require_once 'api/index.php';
require 'app/config/config.php';
require 'app/config/database.php';
include 'app/models/getlanguage.php';
include 'app/models/setemail.php';
include 'app/views/head.php';

if(isset($_GET['name']) || isset($_GET['email']) || isset($_GET['age'])){
  $name = $_GET['name'];
  $age = $_GET['age'];
  $email = $_GET['email'];
  //echo 'ingelogt!';
}else{
  $email = '';
  $age = '';
  $name = '';
  header('Location:'.$loginUrl);
//  echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
}


 ?>

<?php
  include 'app/views/header.php';
 ?>

</body>
</html>
