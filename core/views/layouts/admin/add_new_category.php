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
	 <div class="newZapchast"><h1>Добавить новую категорию запчасти</h1></div>
	<div class="formGO">
		<form action="/admin/add_new_category" method="post" enctype="multipart/form-data">
			<h1>Название категории запчасти</h1>
			<input type="text" name="new_category_title">
			<h1>Фотография категории</h1>
			<input type="file" name="new_category_photo">
			<br><br>
			<input type="submit" value="Добавить">
		</form>
	</div>
	
</body>
</html>