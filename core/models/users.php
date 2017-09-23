<?php
	function checkAdmin($login)
	{
		$sql = "SELECT * FROM `users` WHERE login='{$login}' AND role=2";
		$dbh = db_query($sql);
		$res = mysqli_fetch_assoc($dbh);
		if(!empty($res)){
			return true;
		}
		return false;
	}

	function checkEmail($email)
	{
		$sql = "SELECT id FROM `users` WHERE email='{$email}'";
		$dbh = db_query($sql);
		if($dbh->num_rows >= 1){
			return false;
		}else {
			return true;
		}
	}

	function addNewUser($data)
	{
		$sql = "INSERT INTO `users` (name, password, email) VALUES ('{$data['new_user_name']}', '{$data['new_user_email']}', '{$data['new_user_password']}')";
		$dbh = db_query($sql);
		return $dbh;
	}


?>