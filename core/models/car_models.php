<?php
	function getAllCarModels()
	{
		return getAllFromTable('car_models');
	}

	function addNewModel($data)
	{
		$sql = "INSERT INTO `car_models` (title, photo) VALUES ('{$data['new_model_title']}', '{$data['new_model_photo']}')";
		if(db_query($sql)){
			return true;
		}else {
			return false;
		}
	}

	function deleteModelById($id)
	{
		$sql = "DELETE FROM `car_models` WHERE id=$id";
		$dbh = db_query($sql);
		return $dbh;
	}
?>