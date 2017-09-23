<?php
if(!empty($data['spares'])){
	$spares = $data['spares'];
}
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

	<h1>Все запчасти</h1>
		<div class="nav">
			<a href="/main/" class="logout">На главную сайта</a>
			<a href="/admin/" class="logout">На главную админки</a>
			<a href="/admin/logout" class="logout">Выйти</a>
		</div>
		<hr>
	<div class="wrap">
		<?php for($i = 0; $i < count($spares); $i++):?>
			<div class="product-block">
				<img src="/assets/img/<?= $spares[$i]['photo'];?>" alt="" width="300"><hr>
				<h3><?= $spares[$i]['title'];?></h3>
				<p><a href="/admin/edit_spare?id=<?= $spares[$i]['id'];?>">Редактировать</a></p>
				<p><a href="/admin/delete_spare?id=<?= $spares[$i]['id'];?>">Удалить</a></p>
				
			</div>
		<?php endfor;?>
	</div>
</body>
</html>