<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/assets/css/main.css">
	<link rel="stylesheet" href="/assets/css/admin_style.css">
</head>
<body>
	<h1>Панель администратора</h1>
		<div class="nav">
			<a href="/main/" class="logout">На главную сайта</a>
			<a href="/admin/" class="logout">На главную админки</a>
			<a href="/admin/logout" class="logout">Выйти</a>
		</div>
	<hr>

	<div class="wrap">
		<div class="show">
			<h2>Просмотр</h2>
			<ul>
				<li><a href="/admin/show_all_spares">Просмотреть все запчасти</a></li>
				<li><a href="/admin/show_all_models">Просмотреть все модели машин</a></li>
				<li><a href="/admin/show_all_categories">Просмотреть все категории запчастей</a></li>
				<li><a href="/admin/show_all_users">Просмтреть всех пользователей</a></li>
			</ul>
		</div>

		<div class="edit">
			<h2>Операции</h2>
			<ul>
				<li><a href="/admin/add_new_spare">Добавить новую запчасть</a></li>
				<li><a href="/admin/add_new_model">Довать новую модель машины</a></li>
				<li><a href="/admin/add_new_category">Довать новую категорию запчасти</a></li>
			</ul>
		</div>
	</div>
</body>
</html>