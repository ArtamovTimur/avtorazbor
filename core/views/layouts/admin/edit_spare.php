<?php
$all_models = getAllCarModels();
$all_categories = getAllCategories();
$spare = $data['spare'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Редактирование запчасти</title>
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
			<h1>Редактировать запчать</h1>
		</div>
	<div class="formGO">
		
	<form action="/admin/edit_spare?id=<?= $spare['id'];?>" method="post" enctype="multipart/form-data">
		<h1>Название запчасти</h1>
		<input type="text" name="new_spare_title" value="<?= $spare['title'];?>">
		<h1>Цена запчасти</h1>
		<input type="text" name="new_spare_price" value="<?= $spare['price'];?>">
		<h1>Модель машины для запчасти</h1>
		<select name="new_spare_car_model" id="">
		<?php for($i = 0; $i < count($all_models); $i++): ?>
			<option value="<?= $all_models[$i]['id'];?>"><?= $all_models[$i]['title'];?></option>
		<?php endfor; ?>
		</select>
		<h1>Категория запчасти</h1>
		<select name="new_spare_category" id="">
		<?php for($j = 0; $j < count($all_categories); $j++): ?>
			<option value="<?= $all_categories[$j]['id'];?>"><?= $all_categories[$j]['title'];?></option>
		<?php endfor; ?>
		</select>
		<h1>Описание запчасти</h1>
		<textarea name="new_spare_description" id="" cols="30" rows="10">
			<?= trim($spare['description']);?>
		</textarea>
		<h1>Старая фотография</h1>
		<img src="/assets/img/<?= $spare['photo']; ?>" alt="">
		<h1>Добавить новую фотография запчасти</h1>
		<input type="file" name="spare_img">
		<br><br>
		<input type="submit" value="Сохранить">
	</form>
	</div>
</body>
</html>