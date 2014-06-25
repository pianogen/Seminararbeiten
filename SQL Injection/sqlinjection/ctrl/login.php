<?php

class login {
	private $login;	
	private $resolver;
	
	public function __construct(mdl_login $mdl, resolver $resolver){
		$this->login = $mdl;
		$this->resolver = $resolver;
	}
	public function show() { 
		include 'view/show_login.php';
	}
	
	public function login() {
		if (($_POST['user'] == "") OR ($_POST['pw'] == "")){
			include 'view/show_login_no_input.php';
		}
		else {
			$result = $this->login->login($_POST['user'], $_POST['pw']);
			include 'view/logged_in.php';
		}
	}
	
	public function logoff() {
		session_destroy();
		include 'view/start.php';
	}
}

?>