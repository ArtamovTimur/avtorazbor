<?php
	$all_models = $data['car_models'];
	$new_spares = $data['new_products'];
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
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="/assets/css/style.css">
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
		<!-- nameMark -->
	 	<div class="nameMark">
	 		<div class="markMargin">
	 			<h1 class="zagolovok">Выберите марку Вашего Автомобиля</h1>
	 		</div>
	 	</div>

	 	<div class="markiMashin">
	 		 <div class="flexCenter"> 
						<?php for($i = 0; $i < count($all_models); $i++): ?>
			 			<div class="blockMark col-md-1">
			 					<a href="/main/categories?model=<?= $all_models[$i]['id']?>"><img src="/assets/img/<?= $all_models[$i]['photo']; ?>" alt="mark" class="imgMark"></a>
			 			</div>
			 			<?php endfor;?>
			 			
	 		</div>
		</div>
		
	 
		
		<!-- slider -->
			
		  <div class="go">
			  <div class="sliderCenter">
			  		<div class="slider-box">
						    <div class="slider">  
						        <img src="/assets/img/pain1.png" alt="" class="slider_img">
						        <img src="/assets/img/pain2.png" alt="" class="slider_img">
						        <img src="/assets/img/pain3.png" alt="" class="slider_img">
						        <img src="/assets/img/pain4.png" alt="" class="slider_img">
						        <img src="/assets/img/pain5.png" alt="" class="slider_img">
						     </div>
						    <div class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
						    <div class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
				 	 </div>
			  </div>
		  </div>
		
		<!-- form -->
		
		<div class="content">
			<div class="contentMargin">
				<div class="imgPng">
						<h2>Разборка иномарок от компании Автобак</h2>

						<div class="imgCateori">
							<div class="warranty">
							
							</div>
							<div class="delivery">
								
							</div>
						</div>
				</div>
				<div class="form">
						<div class="formObertka">
							<div class="textForm">
								 <h4>НЕ НАШЛИ НУЖНУЮ ЗАПЧАСТЬ?</h4>
								 <span>Заполните форму</span>
							</div>
							<form action="" method="post">
								<input type="text" placeholder="Ваше имя*">
								<input type="tel" placeholder="Ваш телефон*">
								<input type="text" placeholder="Марка автомобиля*"> <br>
								<input type="text" placeholder="Нужна запчасть*"> <br>
								<button>Отправить</button>
							</form>
						</div>
				</div>
			</div>
		</div>
		
		<!-- map -->
		
		<div class="map">
			
		</div>
		
		<!-- content text -->
		
		<div class="contentText">
			<p>
				Автозапчасти — не роскошь, а вынужденная необходимость. Но цена на новые детали зачастую говорит об обратном. На помощь автовладельцам приходят разборки иномарок, предлагающие детали б/у. И действительно, зачем платить непомерные суммы за новую деталь, если бывшие в употреблении запчасти отличаются от них только низкой ценой! Более того, специалисты утверждают, что детали б/у порой гораздо надежнее новых! Например, новый рычаг может иметь микроскопическую, незаметную для невооруженного глаза трещину, которая станет причиной аварии. А рычаг, бывший в эксплуатации, уже прошел полноценные испытания и доказал, что он исправно работает даже при максимальных нагрузках. Надежность в эксплуатации продемонстрирует и оригинальный двигатель б/у, технические характеристики которого идеально подойдут для фирменного иностранного авто — седана, минивэна, кроссовера, универсала или хэтчбека знаменитой марки. Разборка иномарок — отличный выход и в ситуации, когда необходимо купить ролик натяжителя ремня, а в оригинале он продается только в сборе с натяжным элементом, который в вашей машине работает исправно и не нуждается в замене или кузов б/у, заказывать который нужно с завода и ждать несколько месяцев, а на нашем скаладе он уже есть в наличии.
			</p>
		</div>

		<!-- text -->
		
		<div class="text">
		     <h3>Авторазбор в Алматы запчасти из США, Японии и Германии отправка по всему Казахстану</h3><br>
		     <p>
		     	Запчасти на Toyota, Lexus, Nissan, Infiniti, Mitsubishi, Subaru, Honda, Mazda, Suzuki, Mercedes,  BMW, Audi, Volkswagen, Porsсhe, Hyundai, Kia гарантия качества 100%.
		     </p> <br>
		     <br>
		     <b>Пять причин выбрать разборку в Алматы от компании Avtobak.kz</b>
		</div>
			
		<!-- razrabotka -->

		<div class="razrabotka">
			<div class="obj">
				<div class="img">
						<img src="/assets/img/1.png" alt="img" class="redCap">
				</div>
				<div class="textR">
					<span>Ассортимент</span>
					<p>
						Разборка автомобилей, действующая в Алматы — это тысячи деталей на десятки автомобилей. Ассортимент оригинальных запчастей, их аналогов и деталей б/у постоянно пополняется за счет иномарок, непрерывным потоком поступающих на разборку.
					</p>
				</div>
			</div>
			<div class="obj">
				<div class="img">
						<img src="/assets/img/2.png" alt="img" class="redCap">
				</div>
				<div class="textR">
					<span>Цены</span> 
					<p>
						Разборка Autobak.kz — это демократичные цены, которые нам удается сохранять за счет быстрого оборота запчастей. Менеджеры разборки иномарок Автобак оперативно подбирают деталь исходя из ценовых ожиданий клиента. Поэтому каждый автовладелец находит на нашей разборке нужные ему запчасти по оптимальной стоимости.
					</p>
				</div>
			</div>
			<div class="obj">
				<div class="img">
						<img src="/assets/img/3.png" alt="img" class="redCap">
				</div>
				<div class="textR">
					<span>Удобство</span> 
					<p>
						Найти недорогую разборку с хорошим ассортиментом — только полдела. Не менее важно отыскать среди изобилия запчастей нужную деталь. На сайте разборки компании Автобак работает электронный каталог, однако он не в состоянии вместить весь ассортимент. Если вы не нашли нужную позицию в каталоге, заполните форму поиска, и наши специалисты помогут вам. Менеджеры разборки иномарок Автобак знают толк в запчастях и понимают своих клиентов с полуслова. Они подбирают деталь по описанию, фотографии, каталожному номеру и другим отличительным признакам.
					</p>
				</div>
			</div>
			<div class="obj">
				<div class="img">
						<img src="/assets/img/4.png" alt="img" class="redCap">
				</div>
				<div class="textR">
					<span>Доставка</span> 
					<p>
						После выбора и оплаты запчасти перед автовладельцем встает вопрос доставки. Интернет-магазин Автобак перекладывает его решение на свои плечи. Мы осуществляем доставку по регионам Казахстана автобусом, грузовым или железнодорожным транспортом. В зависимости от размера груза и удаленности региона время ожидания детали составляет от одного до девяти дней.
					</p>
				</div>
			</div>
			<div class="obj">
				<div class="img">
						<img src="/assets/img/5.png" alt="img" class="redCap">
				</div>
				<div class="textR">
					<span>Возврат и обмен</span> 
					<p>
						Но даже когда запасная часть оплачена и благополучно отправлена, специалисты разборки иномарок Автобак чувствуют ответственность перед клиентом. Если вдруг по какой-то причине деталь не подходит, мы решаем и эту проблему. Интернет-магазин Автобак дает 100% гарантию возврата денег (разумеется, в обмен на деталь). Есть и второй путь: обменять неподошедшую деталь на подходящую. И все-таки выбор запчастей на разборке иномарок, независимо от того, где она находится,— в Алматы, Костанае или Астане— дело индивидуальное.
					</p>
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
		 
		<script src="/assets/js/slider.js"></script>
		<script src="/assets/js/menu.js"></script>
</body>
</html>