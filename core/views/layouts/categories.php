<?php
	$all_categories = $data['all_categories'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tima</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/css.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	 	<div class="head"></div>
	 	<header class="firstHeader">
	 		<div class="marginHeader">
	 			<div class="logo">
		 			<img src="/assets/img/logo.jpg" alt="logo" class="logoImg">
		 		</div>
		 		<div class="search">
					<span>Авторазборка в Алматы, доставка по всем регионам Казахстана</span>
		 			<div class="block">
		 				<input type="text" placeholder="Поиск по названию детали и модели..." name="search">
		 				<button>Найти</button>
		 			</div>
		 		</div>
		 		<div class="logo_two">
		 			<img src="/assets/img/text.jpg" alt="logo" class="zapshasti">
		 		</div>
		    </div>
	 	</header>
		<!-- menu -->
	 	
	 	<?php require_once 'core/views/templates/menu.tpl'; ?>
		 
	 	 

	 	 <div class="ggg">
				<p><a href="index.php">Главная</a> / Запчасти по моделям</p>
		</div>

		<div class="modelTwo">
			<h2>Выберите модель Вашего Автомобиля</h2>
		</div>
		
		
		<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<div class="centerBlock">
			<div class="marginCar">
				<div class="categoryCar">
					<div class="h3Linear">
						<h3 class="aside-block-header">
							Категории
						</h3>
					</div>
		
					<!-- spisok -->
					<div class="spisokBlock">
						<ul id="list">
							<li><a href="#">Авторазбор Toyota (ТОЙОТА) <i class="fa fa-plus" aria-hidden="true"></i></a> 
									<ul class="">
										<li><a href="#">lllllllllll</a>
												 
										</li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
									</ul>
							</li>
							
							<li><a href="#">Авторазбор PORSCHE <i class="fa fa-plus" aria-hidden="true"></i></a>
									<ul class="spoiler-body">
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
									</ul>
							</li>
							<li><a href="#">Авторазбор BMW <i class="fa fa-plus" aria-hidden="true"></i></a>
									<ul class="spoiler-body">
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
									</ul>
							</li>
							<li><a href="#">Авторазбор HYUNDAI <i class="fa fa-plus" aria-hidden="true"></i></a>
									<ul class="spoiler-body">
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
									</ul>
							</li>
							<li><a href="#">Авторазбор KIA< <i class="fa fa-plus" aria-hidden="true"></i>/a>
									<ul class="spoiler-body">
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
									</ul>
							</li>
							<li><a href="#">ДИСКИ И РЕЗИНА <i class="fa fa-plus" aria-hidden="true"></i></a>
									<ul class="spoiler-body">
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
									</ul>
							</li>
							<li><a href="#">Авторазбор CHEVROLET <i class="fa fa-plus" aria-hidden="true"></i></a>
									<ul class="spoiler-body">
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
									</ul>
							</li>
							<li><a href="#">Авторазбор DODGE <i class="fa fa-plus" aria-hidden="true"></i></a>
									<ul class="spoiler-body">
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
										<li><a href="#">lllllllllll</a></li>
									</ul>
							</li>
						</ul>
					</div>
					<!-- - - -  -->
					<br>
					<div class="h3Linear">
						<h3 class="aside-block-header">
							Корзина
						</h3>
					</div>

					<div class="karzina">
						<h2>Ваша карзина пуста</h2>
					</div>
					

					<div class="serchForm">
						<h3>НЕ НАШЛИ НУЖНУЮ ЗАПЧАСТЬ?</h3>
						<p>Заполните форму</p>
						<form action="#" method="post">
							<input type="text" name="userSearchName" placeholder="Ваше имя*">
							<input type="text" name="userSearchPhone" placeholder="Ваш телефон*">
							<input type="text" name="userSearchMess" placeholder="Нужна запчасть*">
							<br>
							<button>Отправить</button>
						</form>
					</div>
					
					<div class="asideBanner"></div>
					<div class="asideBanner"></div>

					<!-- - - - - - - - - - - - - - - - -->
				</div>

				<div class="badgesCar">
						<h3>Запчасти по моделям</h3>
						<div class="models">
								

								<?php for($i = 0; $i < count($all_categories); $i++): ?>
						 			<div class="markCar">
										<a href="/main/spares?category=<?= $all_categories[$i]['id']?>"><img src="/assets/img/<?= $all_categories[$i]['photo'];?>" alt="" class="obzorCar"></a>
										<div class="textTwo"><p><?= $all_categories[$i]['title'];?></p></div>
									</div>
			 			<?php endfor;?>

						</div>
				</div>
			</div>
		</div>

		<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

		<!-- footer -->
		
		<footer>
			<div class="marginFooter">
				<div class="footer">
						<div class="iii">
							<img src="/assets/img/logo-footer.png" alt="logo-footer" class="logo-footer"> 
						</div>
						 
						<span>
							Авторазборка Autobak.kz предоставляет Вам огромнейший выбор различных запчастей, которые можно найти не выходя из дома. Оцените качество, ассортимент и полное описание для каждой детали.
						</span> <br>
						<strong>
							После 18:00 просьба писать на  WhatsApp    или оставьте запрос в окошке мы Вам перезвоним.
						</strong>
				</div>
				<div class="footer">
						<br>
						<br>
						<b>Ваш аккаунт</b> <br>
						<br>
						<span>
							<a href="">Оформить заказ Войти</a>
						</span> <br>
						<span>
							<a href="">Войти</a>
						</span>
				</div>
				<div class="footer">
						<br>
						<br>
						<b>Информация</b> <br>
						<br>
						<span><a href="">Главная</a></span> <br>
						<span><a href="">Запчасти по моделям</a></span> <br>
						<span><a href="">Оплата</a></span> <br>
						<span><a href="">Доставка</a></span> <br>
						<span><a href="">Новости</a></span>
						<span><a href="">Контакты</a></span>
				</div>
				<div class="footer">
						<br>
						<br>
						<b>Контакты</b> <br>
						<br>
						<span> <i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; с 9:00 до 18:30 без выходных </span> <br>
						<span> <i class="fa fa-volume-control-phone" aria-hidden="true"></i> &nbsp; +7 (777) 394 66 44 </span> <br>
						<span> <i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp; +7 (777) 828 22 22 </span> <br>
						<span> <i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp; +7 (727) 397 38 16 </span> <br>
						<span> <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; avtobak@gmail.com </span>
				</div>	
			</div>
		</footer>
		<!-- lastFooter -->
		<div class="lastFooter">
				<div class="kartDiv">
					<a href="">Карта сайта</a> <span>|</span> <a href="">Контакты</a>
					<p>© 2012-2017 Autobak - авторазбор в Алматы. All Rights Reserved</p>
				</div>
				
				<div class="textFot">
					<div class="textResponsive">
						<img src="/assets/img/master_card.ico" alt="" class="hrefImg">
						<img src="/assets/img/visa.png" alt="" class="hrefImg">
						<img src="/assets/img/master_card.ico" alt="" class="hrefImg">
					</div>
					<div class="iconInst">
						 <i class="fa fa-instagram" aria-hidden="true"></i> 
					</div>
				</div>
		</div>
		<!-- end  footer -->

		<script src="/assets/js/menu.js"></script>
</body>
</html>



