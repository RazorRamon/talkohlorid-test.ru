<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>���������</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!� ����������� jQuery -->
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
		
		<script type="text/javascript" src="/js/highslide.js"></script>
		<link rel="stylesheet" type="text/css" href="/js/highslide.css">

		<script type="text/javascript">
			hs.graphicsDir = '/js/graphics/';
			hs.align = 'center';
			hs.transitions = ['expand', 'crossfade'];
			hs.outlineType = 'rounded-white';
			hs.fadeInOut = true;

			//hs.dimmingOpacity = 0.75;

			// Add the controlbar
			hs.addSlideshow({
				//slideshowGroup: 'group1',
				interval: 5000,
				repeat: false,
				useControls: true,
				fixedControls: 'fit',
				overlayOptions: {
					opacity: 0.75,
					position: 'bottom center',
					hideOnMouseOut: true
				}
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
						<div class="slogan">������������ � ������ ������ �����, ������ ��������,<br />������� � ��������� ������</div>
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
								<li><a href="/">� ��������</a></li>
								<li><a href="#">������������</a></li>
								<li><a href="#">�������</a></li>
								<li><a href="#">��� �������� �����</a></li>
								<li><a href="#">�������� � ������</a></li>
								<li><a href="#">��������</a></li>
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
								<li><a href="/">� ��������</a></li>
								<li><a href="#">������������</a></li>
								<li><a href="#">�������</a></li>
								<li><a href="#">��� �������� �����</a></li>
								<li><a href="#">�������� � ������</a></li>
								<li><a href="#">��������</a></li>
							</ul>
						</div>
						<div class="section_menu">
							<ul>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-1.png" />������</a></li>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-2.png" />������ ����</a></li>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-3.png" />������</a></li>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-4.png" />����-������</a></li>
								<li><a href="#"><div class="over"></div><img src="/images/sect_ico-5.png" />���������</a></li>
							</ul>
						</div>
						<a class="price" href="#">�����-����</a>
					</div>
				</div>
			<? } ?>
			<div class="clear_div">&nbsp;</div>
		</header>

		<main>
			<div class="wrap_content_block">
				<div id="left_sitebar">
					<ul class="catalog">
						<li><a href="#">������</a></li>
						<li class="active expand">
							<a class="active" href="#">������ ����</a>
							<ul class="open">
								<li class="active expand"><a class="selected" href="#">���� Kastor</a>
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
						<li><a href="#">������</a></li>
						<li><a href="#">����-������</a></li>
						<li><a href="#">���������</a></li>
					</ul>
					<a href="#" class="button_price">�����-����</a>
				</div>

				<div id="content">
					<h1>KSIS 37</h1>
					<div class="tovar_img-block">
						<a href="#" class="img_wrap">
							<img src="/images/tovar_img-1.png" />
						</a>
					</div>
					<div class="tovar_text-block">
						<h2>������� ������� � ��������������� Kastor KS-20 PK</h2>
						<div class="price">����: 138 200 ���.</div>
						<p>������� ������� � ���������������. �������� ��������� ��������� ������� ����������� � ��������� ��������� � ����� ��������� �����, ���� ����������� ������ � ����� ���.</p>
						<h3>�������� ��������:</h3>
						<ul>
							<li>������������� ���� ������� ����� �KASTOR�</li>
							<li>��������� ���� � ����������� ����</li>
							<li>�������� ������ ������  � ��������� ��������</li>
							<li>��� ��� �����</li>
							<li>����� ������</li>
						</ul>
						<h3>������:</h3>
						<p>���� � ��������������� ���������� ������ � ���������� ����������, � ����� ��� �� ������� ��������������� ������������ � �������� ����� ����, ���, ����������, ��������� � ����� �������.</p>
						<h3>��������������:</h3>
						<p>�������� ����: 660�670�1560<br />
							������� ������������� ���������: 8 - 20 �3<br />
							�������� ��������: 18 ���<br />
							��� ����: 550 ��<br />
							��� �����: 130-140 ��<br /i>
							������� ��������: 129 ��</p>
					</div>
					<div class="clear_div">&nbsp;</div>
					<div class="schema_block">
						<div>
							<a href="/images/tovar_schema-1.jpg" class="schema_wrap highslide" onclick="return hs.expand(this)">
								<img src="/images/tovar_schema-1-mini.png" />
								<div class="schem_lupa"></div>
								������ 20 ����������
							</a>
							<a href="/images/tovar_schema-2.jpg" class="schema_wrap highslide" onclick="return hs.expand(this)">
								<img src="/images/tovar_schema-2-mini.png" />
								<div class="schem_lupa"></div>
								����� 20 ����������
							</a>
							<a href="/images/tovar_schema-3.jpg" class="schema_wrap highslide" onclick="return hs.expand(this)">
								<img src="/images/tovar_schema-3-mini.png" />
								<div class="schem_lupa"></div>
								������� 20 ����������
							</a>
							<a href="/images/tovar_schema-4.jpg" class="schema_wrap highslide" onclick="return hs.expand(this)">
								<img src="/images/tovar_schema-4-mini.png" />
								<div class="schem_lupa"></div>
								����� ������
							</a>
						</div>
						<div class="clear_div">&nbsp;</div>
						<a href="#" target="_blank" class="download-pdf">������� PDF</a>
					</div>
					<div class="clear_div">&nbsp;</div>
					<h1>��������� ������</h1>
					<form class="form_modal-tovar" method="post" action="#">
						<div class="left_text">
							<label class="line_field" for="USER_NAME">���<span class="starrequired">*</span> <input type="text" name="USER_NAME" maxlength="50" size="30" value="" required /></label>
							<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
							<label class="line_field" for="PHONE">�������<span class="starrequired">*</span> <input type="text" name="PHONE" maxlength="255" size="30" value="" required /></label>
							<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
							<label class="line_field" for="USER_EMAIL">E-Mail<span class="starrequired">*</span> <input type="text" name="USER_EMAIL" maxlength="255" size="30" value="" required /></label>
						</div>
						<div class="right_text">
							<textarea name="INFO_POLE" rows="5" cols="30" placeholder="����� ���������*" required ></textarea>
						</div>
						<div style="margin: 20px 0px 10px 130px; float:left">
							<label for="CAPTCHA">
								<span style="float: left; margin: 10px; display: inline-block;">������� �������<span class="starrequired">*</span></span>
								<img src="/images/kaptcha.png" style="float: left;" />
								<input class="short" type="text" name="CAPTCHA" maxlength="255" size="15" value="" required />
							</label>
						</div>
						<div class="clear_div">&nbsp;</div>
						<p style="text-align: center; color: #f00;">* � ���� ������������ ��� ����������</p>
						<div class="wrap_tovar-button"><button name="" value="" type="submit">���������</button></div>
					</form>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>

			<div class="above-footer_block"></div>

		</main>
		<footer>
			<div class="copyright">Talc � 2014
				<div class="creator"><a href="http://www.divier.ru/" target="_blank">�������� �����</a> ������</div>
			</div>
		</footer>
	</body>
</html>