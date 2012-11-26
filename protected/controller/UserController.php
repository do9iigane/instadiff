<?php

class UserController extends DooController {
	//public $autorender = true;

	function __construct() {
		$this->conf = Doo::conf();
		$this->session = Doo::session($this->conf->SERVER_NAME);
// 		//ユーザが認証を拒否した際の処理
// 		if (isset($_GET['error_reason']) && $_GET['error_reason']=='user_denied'){
// 			header('Location: error/'.$_GET['error_reason']);
// 			die();
// 		}
	}

	function index() {
		//instaclassを読み込み
		require_once THIRDPATH . 'instagramClass.php';
		require_once $this -> conf -> SITE_PATH . $this->conf -> PROTECTED_FOLDER . "config/instagram.conf.php";
		// Instantiate the API handler object
		$instagram = new InstagramClass($config);

		$instagram -> setAccessToken($this->session->InstagramAccessToken);

		$popular = $instagram -> getPopularMedia();

		// After getting the response, let's iterate the payload
		$data['response'] = json_decode($popular, true);

		$this -> render('user/index', $data);
	}

}