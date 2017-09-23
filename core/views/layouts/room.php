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
		 
	 	<div class="comtentplace">
	 		<div class="authorization">
	 				<div class="userAvt">
	 					<p><b>Страница авторизации</b></p>
						<p><b>Новые клиенты</b></p>
	 				</div>
	 				<p>
	 					Создав учётную запись на нашем сайте, вы будете тратить меньше времени на оформление заказа, сможете хранить несколько адресов доставки, отслеживать состояние заказов, а также многое другое.
	 				</p>
	 				<button><a href="/main/account">Создать учетную запись</a></button>
	 		</div>
	 		<div class="registrationUser">
	 				<div class="reg">
	 					<p><b>Зарегистрированные клиенты</b></p>
	 				</div>
	 				<br>
	 				<p>Если у вас есть учётная запись на нашем сайте, пожалуйста, авторизируйтесь</p>
	 				<br>
	 				<div class="itgo">
	 					<form action="#" method="post">
		 					<div class="labal"><label><p><b>Адрес электронной почты (email)</b></p></label></div>
		 					<input type="email" name="email" required> <br>
		 					<div class="labal"><label><p><b>Пароль</b></p></label></div>
		 					<input type="text" name="password" required>	<br>

		 					<div class="ForgotYourPassword">
		 						<div class="RecoveryPassword"><p><a href="">Забыли пароль?</a></p></div> 
		 						 <button>Войти</button>
		 					</div>
		 				</form>
	 				</div>
	 		</div>
	 	</div>

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



