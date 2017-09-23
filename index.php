<?php
	session_start();
	require_once 'core/library/main.php';
	require_once 'core/models/db.php';
	require_once 'core/models/car_models.php';
	require_once 'core/models/products.php';
	require_once 'core/models/categories.php';
	require_once 'core/models/users.php';

	$controllerName = getUrlSegment(0);
	$actionName = getUrlSegment(1);
	if(!empty($controllerName)) {
		$controllerName = getUrlSegment(0);
	}else {
		$controllerName = 'main';
	}
	if(!empty($actionName)) {
		$actionName = 'action_' . getUrlSegment(1);
	}else {
		$actionName = 'action_index';
	}
	if(file_exists('core/controllers/'. $controllerName . '.php')){
		require_once 'core/controllers/'. $controllerName . '.php';
		if(function_exists($actionName)){
			$actionName();
		}else {
			echo '404 not found!';
		}
	}else {
		echo '404 not found!';
	}




?>