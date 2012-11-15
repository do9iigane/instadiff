<?php

class UserController extends DooController {
	//public $autorender = true;

	function __construct() {
		//ユーザが認証を拒否した際の処理
		if (isset($_GET['error_reason']) && $_GET['error_reason']=='user_denied'){
			header('Location: error/'.$_GET['error_reason']);
			die();
		}

	}

	function index() {
		session_start();
		$this -> render('userindex', $data);
	}

}
?>