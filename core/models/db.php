<?php 
	function db_connect()
	{
		$configs = require 'core/configs/db.php';
		$conn = mysqli_connect($configs['db_host'], $configs['db_user'], $configs['db_password'], $configs['db_name']);
		if(!$conn){
			die('Database connect error!');
		}
		return $conn;
	}
	function db_query($sql)
	{
		$conn = db_connect();
		$dbh = mysqli_query($conn, $sql);
		if(!$dbh){
			echo mysqli_error($conn);
			die('Database query error!');
		}
		return $dbh;
	}

	function getAllFromTable($table)
	{
		$sql = "SELECT * FROM $table";
		$dbh = db_query($sql);
		while($arr = mysqli_fetch_assoc($dbh)){
			$res[] = $arr;
		}
		return $res;
	}




?>