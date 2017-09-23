<?php
	session_start();
	function action_index()
	{

		$all_car_models = getAllCarModels();
		$new_products = getNewProducts();
		render('index', ['car_models' => $all_car_models, 'new_products' => $new_products]);
	}

	function action_categories()
	{
		$car_model = $_GET['model'];
		$_SESSION['model'] = $car_model;
		$all_categories = getAllCategories();
		render('categories', ['all_categories' => $all_categories]);
	}

	function action_spares()
	{
		$category = $_GET['category'];
		$_SESSION['category'] = $category;
		$model = $_SESSION['model'];
		$spares = getAllSparesByCategoryAndModel($category, $model);
		render('spares', ['spares' => $spares]);
	}

	function action_spare()
	{
		$id = $_GET['id'];
		$spare = getSpareById($id);
		render('spare', ['spare' => $spare]);
	}

	function action_cabinet()
	{
		render('room', []);
	}

	function action_account()
	{
		render('account', []);
	}

	function action_registration()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$spam = $_POST['check'];
			$form_data = [
				'new_user_name' => $_POST['username'],
				'new_user_email' => $_POST['useremail'],
				'new_user_password' => $_POST['userpass'],
				'new_user_passwordv' => $_POST['userpassv']
			];
			if(validForm($form_data))
			{	
				if(checkEmail($form_data['new_user_email'])){
				if($form_data['new_user_password'] !== $form_data['new_user_passwordv']){
					render('account', ['errors' => 'Пароли не совпадают']);
				}
				if(addNewUser($form_data)){
						echo 'Успешно добавлен';
					}else {
						echo 'Ошибка добавления';
					}
				}else {
					render('account', ['errors' => 'Этот email уже занят!', 'old_data' => $form_data]);
				}
			}else {
				render('account', ['errors' => ['Одно из полей не заполнено'], 'old_data' => $form_data]);
			}
			
		}else {
			header('Location: /main/account');
		}
	}

	function action_contacts()
	{
		render('contact', []);
	}
	
?>