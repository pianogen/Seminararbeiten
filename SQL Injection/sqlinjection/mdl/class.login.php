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
		$sql = "SELECT user FROM benutzer 
				WHERE user='$user' and password='$pw'
				LIMIT 1;";
		$this->con->multi_query($sql);
		$row = $this->con->store_result();
		$result = mysqli_fetch_array($row);
		$_SESSION['user'] = $result[0]; 
		$_SESSION['sql'] = $sql;
	}
	
	public function __destruct() {
		mysqli_close($this->con);
	}
	
}
?>
	