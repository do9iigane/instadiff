<?php

class CallbackController extends DooController {
	//public $autorender = true;

	function __construct() {
		//ユーザが認証を拒否した際の処理
		if (isset($_GET['error_reason']) && $_GET['error_reason']=='user_denied'){
			header('Location: error/'.$_GET['error_reason']);
			die();
		}
		$this->conf = Doo::conf();
		$this->session = Doo::session($this->conf->SERVER_NAME);


	}

	function index() {
		//instaclassを読み込み
		require_once THIRDPATH . 'instagramClass.php';
		//instaconfigを読み込み
		$dooconf = Doo::conf();
		require_once $this -> conf -> SITE_PATH . $this->conf -> PROTECTED_FOLDER . "config/instagram.conf.php";
		// Instantiate the API handler object
		$instagram = new InstagramClass($config);


		//if (!empty($accessToken)) {
		//	header('Location: user/');
		//}

		if(empty($this->session->InstagramAccessToken)){
			$accessToken = $instagram -> getAccessToken();
			$this->session->InstagramAccessToken = $accessToken;
		}else{
			$accessToken = $this->session->InstagramAccessToken;
		}

		$instagram -> setAccessToken($accessToken);
		$popular = $instagram -> getPopularMedia();

		// After getting the response, let's iterate the payload
		$data['response'] = json_decode($popular, true);

		$this -> render('callback/index', $data);
	}

}
?>
