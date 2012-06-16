<?php

class CallbackController extends DooController {

    function index() {
        session_start();
		//instaclassを読み込み
		require LIBPATH . 'instadiff/Instagram.php';
		//instaconfigを読み込み
		require_once LIBPATH . 'instadiff/config.inc.php';
        
        // Instantiate the API handler object
        $instagram = new Instagram($config);
        //var_dump($instagram);
        

        $accessToken = $instagram -> getAccessToken();
	   
	   var_dump($accessToken);
	   exit;
	   
        $_SESSION['InstagramAccessToken'] = $accessToken;

        $instagram -> setAccessToken($_SESSION['InstagramAccessToken']);
        
        $popular = $instagram -> getPopularMedia();
		
        // After getting the response, let's iterate the payload
        $response = json_decode($popular, true);

    }

}
?>