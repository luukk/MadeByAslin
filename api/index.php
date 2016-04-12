<?php

  #index.php

  require_once __DIR__ . '/includes/facebook-sdk-v5/autoload.php';

  session_start();

  $fb = new Facebook\Facebook([
  'app_id' => '1108168172538729',
  'app_secret' => '7543fba6f8b03151ab11c6de17c40e80',
  'default_graph_version' => 'v2.5',
  isset($_SESSION['facebook_acces_token'])?$_SESSION['facebook_acces_token']: '1108168172538729'
  ]);

  $helper = $fb->getRedirectLoginHelper();
  $permissions = ['email', 'user_likes','user_location,user_birthday'];
  $loginUrl = $helper->getLoginUrl('http://localhost/bewijzenmap/jaar2/periode3/madebyaslin/api/login-callback.php', $permissions);
