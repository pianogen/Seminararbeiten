<?php

class mdl_login {
	
	private $con;
	private $db;
	public function __construct() {
		$this->con = mysqli_connect('localhost', 'root');
		if (!$this->con)
		{
			die('Verbindung schlug fehl: '. mysqli_error());
		}
	}
	
	public function login($user, $pw) {
		$this->con->select_db('seminar');
		$sql = $this->con->prepare("SELECT user FROM benutzer 
									WHERE user=? and password=? 
									LIMIT 1;");
		$sql->bind_param("ss",
						 $this->con->real_escape_string($user),
						 $this->con->real_escape_string($pw)
						 );
		$sql->execute();
		$sql->bind_result($username);
		$sql->fetch();
		$_SESSION['user'] = $username; 
	}
	
	public function __destruct() {
		mysqli_close($this->con);
	}
	
}
?>
	