<?php
if(!empty($data['categories'])){
	$categories = $data['categories'];
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
<div class="nav">
			<a href="/main/" class="logout">На главную сайта</a>
			<a href="/admin/" class="logout">На главную админки</a>
			<a href="/admin/logout" class="logout">Выйти</a>
		</div>
		<hr>
	<h1>Все модели машин</h1>
	<div class="wrap">
		<?php for($i = 0; $i < count($categories); $i++):?>
			<div class="product-block">
				<img src="/assets/img/<?= $categories[$i]['photo'];?>" alt="" width="300"><hr>
				<h3><?= $categories[$i]['title'];?></h3>
				<p><a href="/admin/edit_category?id=<?= $categories[$i]['id'];?>">Редактировать</a></p>
				<p><a href="/admin/delete_category?id=<?= $categories[$i]['id'];?>">Удалить</a></p>
				
			</div>
		<?php endfor;?>
	</div>
</body>
</html>