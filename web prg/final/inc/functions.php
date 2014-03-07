<?php
	include_once __DIR__ . '/password.php';

	function GetConnection(){
		global $password;

		$conn = mysqli_connect('localhost', 'plotkinm', $password, 'plotkinm_db');
		return $conn;
	}

	function fetch_all($sql){
		$conn = GetConnection();
		$results = $conn->query($sql);

		$arr = array();

		while ($row = $results->fetch_assoc()) {
			$arr[] = $row;
		}

		$conn->close();

		return $arr;
	}