<?php
	function action_index()
	{
		if(!empty($_SESSION['admin_auth']) && $_SESSION['admin_auth'] == 'yes'){
			header('Location: /admin/main');
		}else {
			renderAdmin('index', []);
		}
	}

	function action_auth()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{	
			$form_data = [
				'login' => $_POST['admin_login'],
				'password' => $_POST['admin_password']
			];
			if(checkAdmin($form_data['login']))
			{
				$_SESSION['admin_auth'] = 'yes';
				header('Location: /admin/main');
			}else {
				$_SESSION['admin_auth'] = 'no';
				renderAdmin('index', ['errors' => 'Неправильный логин или пароль!']);
			}
		}else {
			header('Location: /admin');
		}
		
	}

	function action_main()
	{
		if(empty($_SESSION['admin_auth']) || $_SESSION['admin_auth'] == 'no'){
			header('Location: /admin');
		}else {
			renderAdmin('main', []);
		}
	}

	function action_logout()
	{
		session_destroy();
		unset($_SESSION['admin_auth']);
		header('Location: /admin');
	}

	function action_add_new_spare()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{	
			$form_data  = [
				'new_spare_title' => $_POST['new_spare_title'],
				'new_spare_price' => $_POST['new_spare_price'],
				'new_spare_car_model' => $_POST['new_spare_car_model'],
				'new_spare_category' => $_POST['new_spare_category'],
				'new_spare_description' => $_POST['new_spare_description'],
				'new_spare_photo' => $_FILES['spare_img']['name']
			];
			
			move_uploaded_file($_FILES['spare_img']['tmp_name'], "assets/img/{$_FILES['spare_img']['name']}");
			if(addNewSpare($form_data)){
				header('Location: /admin/');
			}else {
				echo 'Ошибка добавления';
			}
		}else {
			renderAdmin('add_new_spare', []);
		}
		
	}

	function action_add_new_model()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$form_data = [
				'new_model_title' => $_POST['new_model_title'],
				'new_model_photo' => $_FILES['new_model_photo']['name']
			];
			move_uploaded_file($_FILES['new_model_photo']['tmp_name'], "assets/img/{$_FILES['new_model_photo']['name']}");
			if(addNewModel($form_data))
			{
				header('Location: /admin/');
			}else {
				echo 'Ошибка добавления модели';
			}
		}else{
			renderAdmin('add_new_model', []);
		}
		
	}

	function action_add_new_category()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$form_data = [
				'new_category_title' => $_POST['new_category_title'],
				'new_category_photo' => $_FILES['new_category_photo']['name']
			];
			move_uploaded_file($_FILES['new_category_photo']['tmp_name'], "assets/img/{$_FILES['new_category_photo']['name']}");
			if(addNewCategory($form_data))
			{
				header('Location: /admin/');
			}else {
				echo 'Ошибка добавления категории';
			}
		}else{
			renderAdmin('add_new_category', []);
		}	
	}


	function action_show_all_spares()
	{
		$spares = getAllSpares();
		renderAdmin('all_spares', ['spares' => $spares]);
	}

	function action_show_all_models()
	{
		$spares = getAllCarModels();
		renderAdmin('show_all_models', ['models' => $spares]);
	}

	function action_show_all_categories()
	{
		$spares = getAllCategories();
		renderAdmin('show_all_categories', ['categories' => $spares]);
	}

	function action_delete_spare()
	{
		$img_name = getSpareById($_GET['id'])['photo'];
		if(deleteSpareById($_GET['id'])){
			unlink('assets/img/' . $img_name);
			header('Location: /admin/show_all_spares');
		}else {
			echo 'Ошибка удаления';
		}
	}

	function action_delete_model()
	{
		if(deleteModelById($_GET['id'])){
			header('Location: /admin/show_all_models');
		}else {
			echo 'Ошибка удаления';
		}
	}

	function action_delete_category()
	{
		if(deleteCategoryById($_GET['id'])){
			header('Location: /admin/show_all_categories');
		}else {
			echo 'Ошибка удаления';
		}
	}

	function action_edit_spare()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{	

			$id = $_GET['id'];
			
			$form_data  = [
				'new_spare_title' => $_POST['new_spare_title'],
				'new_spare_price' => $_POST['new_spare_price'],
				'new_spare_car_model' => $_POST['new_spare_car_model'],
				'new_spare_category' => $_POST['new_spare_category'],
				'new_spare_description' => $_POST['new_spare_description'],
				'new_spare_photo' => $_FILES['spare_img']['name']
			];
			if(empty($form_data['spare_img'])) 
			{
				$img_name = getSpareById($_GET['id'])['photo'];
			}else {
				$old_img = getSpareById($_GET['id'])['photo'];
				unlink('assets/img/' . $old_img);
				$img_name = $_FILES['spare_img']['name'];
			}
			move_uploaded_file($_FILES['spare_img']['tmp_name'], "assets/img/" . $img_name);
			$form_data['new_spare_photo'] = $img_name;
			if(updateSpareInfoById($form_data, $id))
			{
				header('Location: /admin/');
			}else {
				echo 'Ошибка редактирования запчасти';
			}
		}else {
			$spare = getSpareById($_GET['id']);
			renderAdmin('edit_spare', ['spare' => $spare]);
		}
		
	}
?>