<?php

class IndexController extends DooController {

    function index()
    {
        //instaclassを読み込み
        require_once THIRDPATH . 'instagramClass.php';
        //instaconfigを読み込み
        $dooconf = Doo::conf();
        $this->session = Doo::session($this->conf->SERVER_NAME);
        
        require_once $dooconf->SITE_PATH . $dooconf->PROTECTED_FOLDER . "config/instagram.conf.php";

        //認証が通っていれば、callbackに渡す
        if (isset($this->session->InstagramAccessToken) && !empty($this->session->InstagramAccessToken)) {
            header('Location: callback');
            die();
        }

        $instagram = new Instagram($config);

        //instaに認証を渡す
        $instagram->openAuthorizationUrl();

    }

}
