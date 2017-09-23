<?php
$all_models = getAllCarModels();
$all_categories = getAllCategories();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/assets/css/main.css">
	<link rel="stylesheet" href="/assets/css/admin_style.css">
</head>
<body>
<div class="nav">
			<a href="/main/" class="logout">На главную сайта</a>
			<a href="/admin/" class="logout">На главную админки</a>
			<a href="/admin/logout" class="logout">Выйти</a>
		</div>
	 	

	<div class="newZapchast">
		<h1>Добавить новую модель машины</h1>
	</div>
	
	<div class="formGO">
			<form action="/admin/add_new_model" method="post" enctype="multipart/form-data">
				<h1>Название модели машины</h1>
				<input type="text" name="new_model_title">
				<h1>Фотография модели машины</h1>
				<input type="file" name="new_model_photo">
				<br><br>
				<input type="submit" value="Добавить">
			</form>
	</div>
	
</body>
</html>