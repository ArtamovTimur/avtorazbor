<?php
if(!empty($data['errors'])){
	echo '<h1 align="center">' . $data['errors'] . '</h1>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/css/admin_style.css">
	<title>Document</title>
</head>
<body>
	<h1 align="center">Авторизация</h1>
	<form action="/admin/auth" method="post">
		<div align="center"> 
			<h3>Введите логин</h3>
			<input type="text" name="admin_login">
			<h3>Введите пароль</h3>
			<input type="text" name="admin_password">
			<br><br>
			<input type="submit" value="Войти">	
		<div>
	</form>
	
</body>
</html>