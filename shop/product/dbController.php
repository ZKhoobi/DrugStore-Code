<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "drugstore";
	private $conn;
	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $this->conn;
	}
	
	function selectDB($conn) {
		mysqli_select_db($this->conn,$this->database);
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		if($result)
		{
			while($row=mysqli_fetch_assoc($result)) {
				$resultset[] = $row;
			}
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($conn,$query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
}
?>