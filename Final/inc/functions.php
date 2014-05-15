<?php
	include_once __DIR__ . '/password.php';
	
	function GetConnection(){
		global $password;
		
		$conn = mysqli_connect('localhost', 'n02698405', $password, 'n02698405_db');
		return $conn;
	}
	
	function fetch_all($sql){
		$conn = GetConnection();
		$results = $conn->query($sql);
		
		echo $conn->error;
		
		$arr = array();
		
		while ($row = $results->fetch_assoc()) {
			$arr[] = $row;
		}
		
		$conn->close();
		
		return $arr;
	}
	
	function escape_all($row, $conn){
		$row2 = array();
		foreach ($row as $key => $value) {
			$row2[$key] = $conn->real_escape_string($value);
		}
		return $row2;
	}
