<?php

class CallbackController extends DooController {
	//public $autorender = true;

	function __construct() {
		if (isset($_GET['error_reason']) && $_GET['error_reason']=='user_denied'){
			header('Location: error/'.$_GET['error_reason']);
		}
		die();
	}

	function index() {
		session_start();

		//instaclassを読み込み
		require_once THIRDPATH . 'instagramClass.php';
		//instaconfigを読み込み
		$dooconf = Doo::conf();
		require_once $dooconf -> SITE_PATH . $dooconf -> PROTECTED_FOLDER . "config/instagram.conf.php";

		// Instantiate the API handler object
		$instagram = new InstagramClass($config);

		$accessToken = $instagram -> getAccessToken();
		$_SESSION['InstagramAccessToken'] = $accessToken;
		$instagram -> setAccessToken($_SESSION['InstagramAccessToken']);
		$popular = $instagram -> getPopularMedia();

		// After getting the response, let's iterate the payload
		$data['response'] = json_decode($popular, true);

		$this -> render('callbackindex', $data);
	}

}
?>