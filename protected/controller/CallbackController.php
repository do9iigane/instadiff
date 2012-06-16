<?php

class CallbackController extends DooController {

    function index() {
        session_start();
		
		//instaclassを読み込み
		require_once THIRDPATH . 'instagramClass.php';
		//instaconfigを読み込み
		$dooconf = Doo::conf();
		require_once $dooconf->SITE_PATH.$dooconf->PROTECTED_FOLDER."config/instagram.conf.php";
		        
        // Instantiate the API handler object
        $instagram = new InstagramClass($config);        

        $accessToken = $instagram -> getAccessToken();	   
        $_SESSION['InstagramAccessToken'] = $accessToken;

        $instagram -> setAccessToken($_SESSION['InstagramAccessToken']);
        
        $popular = $instagram -> getPopularMedia();
		
        // After getting the response, let's iterate the payload
        $response = json_decode($popular, true);
		var_dump($response);
    }

}
?>