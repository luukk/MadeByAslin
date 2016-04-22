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

  include 'app/views/header.php';
  include 'app/views/middleSection.php';
  include 'app/views/footer.php';

}else{
  echo 'log in met facebook om deze pagina te kunnen bekijken';
  header('Location:'.$loginUrl);
}
