<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Заголовок</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!— Подключение jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		
		<script language="javascript">
			$(document).ready(function (){
				var i=2;
				setInterval(function(){
					$('.imgg').fadeOut(2000);
					$('#img'+i).fadeIn(2000);
					i++;
					if(i==7){i=1;}
				}, 5000);	
			});
		</script>

	</head>
	<body>
		<header>
			<div class="wrap_head_block">
				<div class="wrap_podklad">
					<div class="podklad"></div>
					<div class="head_block">
						<a href="/" id="logo"></a>
						<div class="slogan">изготовление и монтаж банных печей, печных порталов,<br />каминов и предметов декора</div>
						<div class="phone"><span>+7 (495)</span> 229-30-27</div>
						<a class="mail" href="mailto:info@talc.ru">info<span>@</span>talc.ru</a>
					</div>
				</div>
			</div>
			<? if(substr_count($_SERVER['REQUEST_URI'],"/company/") or substr_count($_SERVER['REQUEST_URI'],"/contacts/")){?>
				<div class="wrap_slider-mini_block">
					<div class="slider-mini">
						<a href="/"><img src="/images/slide1-mini.png" id="img1" class="imgg" border="0" /></a>
						<a href="/"><img src="/images/slide2-mini.png" id="img2" class="imgg" style="display:none" border="0"/></a>
						<a href="/"><img src="/images/slide3-mini.png" id="img3" class="imgg" style="display:none" border="0"/></a>
						<a href="/"><img src="/images/slide4-mini.png" id="img4" class="imgg" style="display:none" border="0"/></a>
						<a href="/"><img src="/images/slide5-mini.png" id="img5" class="imgg" style="display:none" border="0"/></a>
						<a href="/"><img src="/images/slide6-mini.png" id="img6" class="imgg" style="display:none" border="0"/></a>
						<img src="/images/frame_slider-mini.png" class="frame_slider-mini" />
					</div>
				</div>
				<div class="wrap_menu-mini_block">
					<div class="menu-mini_block">
						<div class="top_menu">
							<ul>
								<li><a href="/">О компании</a></li>
								<li><a href="#">Производство</a></li>
								<li><a href="#">Галерея</a></li>
								<li><a href="#">Как оформить заказ</a></li>
								<li><a href="#">Доставка и оплата</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
			<? } elseif(substr_count($_SERVER['REQUEST_URI'],"/")){?>
				<div class="wrap_slider_block">
					<div class="slider">
						<a href="/"><img src="/images/slide1.png" id="img1" class="imgg" border="0" /></a>
						<a href="/"><img src="/images/slide2.jpg" id="img2" class="imgg" style="display:none" border="0"/></a>
						<a href="/"><img src="/images/slide3.jpg" id="img3" class="imgg" style="display:none" border="0"/></a>
						<a href="/"><img src="/images/slide4.jpg" id="img4" class="imgg" style="display:none" border="0"/></a>
						<a href="/"><img src="/images/slide5.jpg" id="img5" class="imgg" style="display:none" border="0"/></a>
						<a href="/"><img src="/images/slide6.jpg" id="img6" class="imgg" style="display:none" border="0"/></a>
						<img src="/images/frame_slider.png" class="frame_slider" />
					</div>
				</div>
				<div class="wrap_menu_block">
					<div class="menu_block">
						<div class="top_menu">
							<ul>
								<li><a href="/">О компании</a></li>
								<li><a href="#">Производство</a></li>
								<li><a href="#">Галерея</a></li>
								<li><a href="#">Как оформить заказ</a></li>
								<li><a href="#">Доставка и оплата</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
						<div class="section_menu">
							<ul>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-1.png" />камины</a></li>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-2.png" />банные печи</a></li>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-3.png" />плитка</a></li>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-4.png" />печи-камины</a></li>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-5.png" />эксклюзив</a></li>
							</ul>
						</div>
						<a class="price" href="#">прайс-лист</a>
					</div>
				</div>
			<? } ?>
			<div class="clear_div">&nbsp;</div>
		</header>

		<main>
			<div class="wrap_about_block">
				<div class="about_block">
					<h1>О нас</h1>
					<div class="left_text">
						<p>Более 10-ти лет камнеобрабатывающая компания «Камнирус» занимается изготовлением и монтажом изделий, собственного производства, из талькомагнезита, мрамора и гранита. Из талькомагнезита мы изготавливаем такие изделия как облицовки для банных печей, печные порталы, обогревательные камины и предметы</p>
					</div>
					<div class="right_text">
						<p>облицовки для банных печей, печные порталы, обогревательные камины и предметы декора. В своей работе наша компания использует только высокосортный, хорошо зарекомендовавший себя во всем мире талькомагнезит сорта «blue sky» добываемый в Финляндии.</p>
					</div>
					<a class="more" href="#">читать полностью...</a>
					<div class="clear_div">&nbsp;</div>
					<div class="about_boxes_menu">
						<ul>
							<li><img src="/images/about_box-1.png" /></li>
							<li><a href="#"><div class="over"></div><img src="/images/about_box-2.png" /></a></li>
							<li><a href="#"><div class="over"></div><img src="/images/about_box-3.png" /></a></li>
							<li><a href="#"><div class="over"></div><img src="/images/about_box-4.png" /></a></li>
							<li><a href="#"><div class="over"></div><img src="/images/about_box-5.png" /></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="wrap_allproject_block">
				<div class="allproject_block">
					<a class="allproject" href="#">все проекты</a>
					<h1>Выполненные проекты</h1>
					<div class="project_anons">
						<a href="#"><img src="/images/project-1.png" /></a>
						<a class="text" href="#">В своей работе наша компания<br />использует только высокосортный<br />работе наша компания</a>
					</div>
					<div class="project_anons">
						<a href="#"><img src="/images/project-2.png" /></a>
						<a class="text" href="#">В своей работе наша компания<br />использует только высокосортный<br />работе наша компания</a>
					</div>
					<div class="project_anons">
						<a href="#"><img src="/images/project-3.png" /></a>
						<a class="text" href="#">В своей работе наша компания<br />использует только высокосортный<br />работе наша компания</a>
					</div>
					<div class="project_anons">
						<a href="#"><img src="/images/project-4.png" /></a>
						<a class="text" href="#">В своей работе наша компания<br />использует только высокосортный<br />работе наша компания</a>
					</div>
				</div>
			</div>
			<div class="wrap_news_block">
				<div class="news_block">
					<div class="left_text">
						<h1>Новости</h1>
						<div class="news_anons">
							<a href="#"><img src="/images/news_img-1.png" /></a>
							<div class="date">12.12.2014</div>
							<a class="text" href="#">Более 10-ти лет камнеобрабатывающая компания «Камнирус» занимается изготовлением и монтажом изделий, собственного производства, из изделия талькомагнезита, мрамора и гранита. Из талькомагнезита мы изготавливаем такие изделия как облицовки для банных печей, печные порталы, обогревательные камины и предметы...</a>
						</div>
						<div class="news_anons">
							<a href="#"><img src="/images/news_img-2.png" /></a>
							<div class="date">12.12.2014</div>
							<a class="text" href="#">Более 10-ти лет камнеобрабатывающая компания «Камнирус» занимается изготовлением и монтажом изделий, собственного производства, из изделия талькомагнезита, мрамора и гранита. Из талькомагнезита мы изготавливаем такие изделия как облицовки для банных печей, печные порталы, обогревательные камины и предметы...</a>
						</div>
						<div class="news_anons">
							<a href="#"><img src="/images/news_img-3.png" /></a>
							<div class="date">12.12.2014</div>
							<a class="text" href="#">Более 10-ти лет камнеобрабатывающая компания «Камнирус» занимается изготовлением и монтажом изделий, собственного производства, из изделия талькомагнезита, мрамора и гранита. Из талькомагнезита мы изготавливаем такие изделия как облицовки для банных печей, печные порталы, обогревательные камины и предметы...</a>
						</div>
						<a class="allnews" href="#">ВСЕ новости</a>
					</div>
					<div class="right_text">
						<h1>Статьи</h1>
						<div class="news_anons">
							<a href="#"><img src="/images/news_img-3.png" /></a>
							<a class="date" href="#">«Камнирус» занимается изготовлением и монтажом</a>
							<a class="text" href="#">Более 10-ти лет камнеобрабатывающая компания «Камнирус» занимается изготовлением и монтажом изделий, собственного производства, из изделия талькомагнезита, мрамора и гранита. Из талькомагнезита мы изготавливаем такие изделия как облицовки для банных печей, печные порталы, обогревательные камины и предметы...</a>
						</div>
						<div class="news_anons">
							<a href="#"><img src="/images/news_img-1.png" /></a>
							<a class="date" href="#">«Камнирус» занимается изготовлением и монтажом</a>
							<a class="text" href="#">Более 10-ти лет камнеобрабатывающая компания «Камнирус» занимается изготовлением и монтажом изделий, собственного производства, из изделия талькомагнезита, мрамора и гранита. Из талькомагнезита мы изготавливаем такие изделия как облицовки для банных печей, печные порталы, обогревательные камины и предметы...</a>
						</div>
						<div class="news_anons">
							<a href="#"><img src="/images/news_img-2.png" /></a>
							<a class="date" href="#">«Камнирус» занимается изготовлением и монтажом</a>
							<a class="text" href="#">Более 10-ти лет камнеобрабатывающая компания «Камнирус» занимается изготовлением и монтажом изделий, собственного производства, из изделия талькомагнезита, мрамора и гранита. Из талькомагнезита мы изготавливаем такие изделия как облицовки для банных печей, печные порталы, обогревательные камины и предметы...</a>
						</div>
						<a class="allnews" href="#">ВСЕ статьи</a>
					</div>
				</div>
			</div>

			<div class="wrap_fos_block">
				<div class="fos_block">
					<h1>Отправить заявку</h1>
					<form class="form_modal" method="post" action="#">
					
						<div class="left_text">
							<label class="line_field" for="USER_NAME">Имя<span class="starrequired">*</span> <input type="text" name="USER_NAME" maxlength="50" size="30" value="" required /></label>
							<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
							<label class="line_field" for="PHONE">Телефон<span class="starrequired">*</span> <input type="text" name="PHONE" maxlength="255" size="30" value="" required /></label>
							<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
							<label class="line_field" for="USER_EMAIL">E-Mail<span class="starrequired">*</span> <input type="text" name="USER_EMAIL" maxlength="255" size="30" value="" required /></label>
						</div>
						<div class="right_text">
							<textarea name="INFO_POLE" rows="5" cols="30" placeholder="Текст сообщения*" required ></textarea>
						</div>
						<div style="margin: 33px 387px 10px 0px; float:right"><label for="CAPTCHA"><span style="float: left; margin: 10px; display: inline-block;">Введите символы<span class="starrequired">*</span></span><img src="/images/kaptcha.png" style="float: left;" /><input class="short" type="text" name="CAPTCHA" maxlength="255" size="15" value="" required /></label></div>
						<div class="clear_div">&nbsp;</div>
						<p style="text-align: center; color: #f00;">* — поля обязательные для заполнения</p>
						<button name="" value="" type="submit">Отправить</button>
					</form>
				</div>
			</div>

			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="copyright">Talc © 2014
				<div class="creator"><a href="http://www.divier.ru/" target="_blank">Создание сайта</a> ДиВиЕР</div>
			</div>
		</footer>
	</body>
</html>