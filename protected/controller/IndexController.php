<?php

class IndexController extends DooController {

    function index() {
        //instaclassを読み込み
        require_once '\instadiff\Instagram.php';
        //instaconfigを読み込み
        require_once '\instadiff\config.inc.php';
        
        //セッションを開始
        session_start();
        
        //認証が通っていれば、callbackに渡す
        if (isset($_SESSION['InstagramAccessToken']) && !empty($_SESSION['InstagramAccessToken'])) {
            header('Location: callback');
            die();
        }

        $instagram = new Instagram($config);
        
        //instaに認証を渡す
        $instagram->openAuthorizationUrl();

    }

}
?>