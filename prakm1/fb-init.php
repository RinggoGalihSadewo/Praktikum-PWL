<?php

require './vendor/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '1107354076414207',
	'app_secret' => '56dbd6e1f9126bf30afabcedd0d71e32',
	'default_graph_version' => 'v2.7'
]);


$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/pwl/prakm1/");

try {
	$accessToken = $helper->getAccessToken();
	if(isset($accessToken)){
		$_SESSION['access_token'] = (string)$accessToken;

		header("Location:home.php");
	}
} catch (Exception $e) {
	
}





