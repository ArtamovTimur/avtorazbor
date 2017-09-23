<?php
	function getNewProducts()
	{
		$sql = "SELECT * FROM `products` order by `id` desc LIMIT 2";
		$dbh = db_query($sql);
		while($arr = mysqli_fetch_assoc($dbh)){
			$res[] = $arr;
		}
		return $res;
	}

	function getAllSparesByCategoryAndModel($cat, $model)
	{
		$sql = "SELECT * FROM `products` WHERE car_model_id='{$model}' AND category_id='{$cat}'";
		$dbh = db_query($sql);
		while($arr = mysqli_fetch_assoc($dbh)){
			$res[] = $arr;
		}
		return $res;
	}

	function getSpareById($id)
	{
		$sql = "SELECT * FROM `products` WHERE id=$id";
		$dbh = db_query($sql);
		$res = mysqli_fetch_assoc($dbh);
		return $res;
	}


	function addNewSpare($data)
	{
		$sql = "INSERT INTO `products` (title, price, car_model_id, category_id, description, photo) VALUES ('{$data['new_spare_title']}', '{$data['new_spare_price']}', '{$data['new_spare_car_model']}', '{$data['new_spare_category']}', '{$data['new_spare_description']}', '{$data['new_spare_photo']}')";
		if(db_query($sql)){
			return true;
		}else {
			return false;
		}
	}

	function getAllSpares()
	{
		return getAllFromTable('products');
	}


	function deleteSpareById($id)
	{
		$sql = "DELETE FROM `products` WHERE id=$id";
		$dbh = db_query($sql);
		return $dbh;
	}

	function updateSpareInfoById($data, $id)
	{
		$sql = "UPDATE `products` SET title='{$data['new_spare_title']}', price='{$data['new_spare_price']}', car_model_id='{$data['new_spare_car_model']}', category_id='{$data['new_spare_category']}', description='{$data['new_spare_description']}', photo='{$data['new_spare_photo']}' WHERE id=$id";
		if(db_query($sql)){
			return true;
		}else {
			return false;
		}
	}
?>