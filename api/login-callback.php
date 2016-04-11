<?php
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
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
  $response = $fb->get('/me?locale=en_US&fields=name,email,gender,location',$accessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  $_SESSION['facebook_access_token'] = (string) $accessToken;
  echo "succes!<br>";
}
$user = $response->getGraphUser();
var_dump($user);
var_dump(
    $user->getField('location'), $user['location']
);
echo '<br>Name: ' . $user['name'];
//echo "<img src=".$user['picture']['url']." /> ";

 ?>
 <!--
 $fb = new Facebook\Facebook([
  'app_id' => '{app-id}',
  'app_secret' => '{app-secret}',
  'default_graph_version' => 'v2.4',
]);

$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
$response = $fb->get('/me?locale=en_US&fields=name,email');
$userNode = $response->getGraphUser();
var_dump(
    $userNode->getField('email'), $userNode['email']
);
-->
