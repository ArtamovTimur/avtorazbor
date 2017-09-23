<?php
	function getAllCategories()
	{
		return getAllFromTable('categories');
	}

	function addNewCategory($data)
	{
		$sql = "INSERT INTO `categories` (title, photo) VALUES ('{$data['new_category_title']}', '{$data['new_category_photo']}')";
		if(db_query($sql)){
			return true;
		}else {
			return false;
		}
	}

	function deleteCategoryById($id)
	{
		$sql = "DELETE FROM `categories` WHERE id=$id";
		$dbh = db_query($sql);
		return $dbh;
	}

?>