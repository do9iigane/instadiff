<?php

/**
 * Configuration params, make sure to write exactly the ones
 * instagram provide you at http://instagr.am/developer/
 */
 
 if($_SERVER['SERVER_NAME']=="localhost"||$_SERVER['SERVER_NAME']=='instadiff.do9vm.com'){
     //開発
     $config = array(
        'client_id' => 'd0eeb40f62674e6cb6605fb3a4f9c564',
        'client_secret' => 'f4793d01654c40759444568e9733d4cc',
        'grant_type' => 'authorization_code',
        //'redirect_uri' => 'http://localhost/heroku/instadiff/callback',
        'redirect_uri' => 'http://instadiff.do9vm.com/callback?type=mobile',
     );
 }else{
     //本番
     $config = array(
        'client_id' => 'f080fc1fb4b447a49795275a7fcb9036',
        'client_secret' => '6e7b34c2d54f4dc984254825267731d8',
        'grant_type' => 'authorization_code',
        'redirect_uri' => 'https://instadiff.herokuapp.com/callback',
     );
 }
