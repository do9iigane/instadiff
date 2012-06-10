<?php

class IndexController extends DooController {

	function index() {
		echo 'You are visiting '.$_SERVER['REQUEST_URI'];
	}

}
?>