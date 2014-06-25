<?php

class mdl_liste {
	
	private $con;
	private $db;
	public function __construct() {
		$this->con = mysqli_connect('localhost', 'root');
		if (!$this->con)
		{
			die('Verbindung schlug fehl: '. mysqli_error());
		}
	}
	
	public function all() {
		mysqli_select_db($this->con, 'seminar');
		$sql = "Select titel, hersteller, launch from games;";
		$query = mysqli_multi_query($this->con, $sql);
		$row = mysqli_store_result($this->con);
		while ($result = mysqli_fetch_array($row)){
			$array[] = $result;
		}
		return($array);
		
	}
	public function select($value) {
		$this->con->select_db('seminar');
		$sql = "SELECT titel,hersteller,launch FROM games
				WHERE titel LIKE '%$value%';";
		$query = $this->con->multi_query($sql);
		$row = $this->con->store_result();
		while ($result = mysqli_fetch_array($row)){
			$array[] = $result;
		}
		return($array);
	} 
	
	public function __destruct() {
		mysqli_close($this->con);
	}
	
}