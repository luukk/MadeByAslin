<?php
require_once __DIR__ . '/includes/facebook-sdk-v5/autoload.php';
session_start();


$fb = new Facebook\Facebook([
'app_id' => '1108168172538729',
'app_secret' => '7543fba6f8b03151ab11c6de17c40e80',
'default_graph_version' => 'v2.5',
isset($_SESSION['facebook_acces_token'])?$_SESSION['facebook_acces_token']: '1108168172538729'
]);

$helper = $fb->getRedirectLoginHelper();
try {

  $accessToken = $helper->getAccessToken();
  $response = $fb->get('/me?locale=en_US&fields=name,email,gender,location,birthday',$accessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();
$birthday = json_decode(json_encode($user['birthday']),TRUE);
$fbirth = date('Y',strtotime($birthday['date']));
$fname = $user['name'];
header("Location: http://localhost/bewijzenmap/jaar2/periode3/madebyaslin/index.php?name=".$fname."&email=".$femail."&age=".$fbirth);
 ?>
