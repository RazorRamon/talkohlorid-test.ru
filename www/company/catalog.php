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
			<div class="wrap_content_block">
				<div id="left_sitebar">
					<ul class="catalog">
						<li><a href="#">Камины</a></li>
						<li class="active expand">
							<a class="active" href="#">Банные печи</a>
							<ul class="open">
								<li class="active expand"><a class="selected" href="#">Печи Kastor</a>
									<ul class="open">
										<li><a href="#">KSIS 20</a></li>
										<li><a href="#">KSIS 27</a></li>
										<li class="active expand"><a class="selected" href="#">KSIS 37</a></li>
										<li><a href="#">KS-20 PK</a></li>
										<li><a href="#">KS-27 PK</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#">Плитка</a></li>
						<li><a href="#">Печи-камины</a></li>
						<li><a href="#">Эксклюзив</a></li>
					</ul>

					<a href="#" class="button_price">Прайс-лист</a>

				</div>
				<div id="content">
					<h1>KSIS 37</h1>
					<div class="filtr">
						<b>Облицовка</b>
						<ul>
							<li><a href="#">Оптима</a></li>
							<li><a href="#">Президент</a></li>
							<li class="active"><a href="#">Русский стандарт</a></li>
						</ul>
					</div>
					<div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-1.png" /></a>
							<a class="name_tovar" href="#">Оптима в Талькомагнезите Kastor KS-27 PK</a>
							<div class="price">79 300 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-2.png" /></a>
							<a class="name_tovar" href="#">Русский вариант в Талькомагнезите Kastor KS-20 PK</a>
							<div class="price">138 200 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-3.png" /></a>
							<a class="name_tovar" href="#">Портал для банной печи мраморный М02</a>
							<div class="price">138 200 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-2.png" /></a>
							<a class="name_tovar" href="#">Русский вариант в Талькомагнезите Kastor KS-20 PK</a>
							<div class="price">138 200 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-3.png" /></a>
							<a class="name_tovar" href="#">Портал для банной печи мраморный М02</a>
							<div class="price">138 200 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-1.png" /></a>
							<a class="name_tovar" href="#">Оптима в Талькомагнезите Kastor KS-27 PK</a>
							<div class="price">79 300 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-1.png" /></a>
							<a class="name_tovar" href="#">Оптима в Талькомагнезите Kastor KS-27 PK</a>
							<div class="price">79 300 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-2.png" /></a>
							<a class="name_tovar" href="#">Русский вариант в Талькомагнезите Kastor KS-20 PK</a>
							<div class="price">138 200 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-3.png" /></a>
							<a class="name_tovar" href="#">Портал для банной печи мраморный М02</a>
							<div class="price">138 200 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-2.png" /></a>
							<a class="name_tovar" href="#">Русский вариант в Талькомагнезите Kastor KS-20 PK</a>
							<div class="price">138 200 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-3.png" /></a>
							<a class="name_tovar" href="#">Портал для банной печи мраморный М02</a>
							<div class="price">138 200 руб.</div>
						</div>
						<div class="tovar_preview">
							<a class="imgage_preview" href="#"><img src="/images/tovar_img-preview-1.png" /></a>
							<a class="name_tovar" href="#">Оптима в Талькомагнезите Kastor KS-27 PK</a>
							<div class="price">79 300 руб.</div>
						</div>
						<div class="clear_div">&nbsp;</div>
					</div>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>

			<div class="above-footer_block"></div>

		</main>
		<footer>
			<div class="copyright">Talc © 2014
				<div class="creator"><a href="http://www.divier.ru/" target="_blank">Создание сайта</a> ДиВиЕР</div>
			</div>
		</footer>
	</body>
</html>