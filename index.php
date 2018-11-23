<?php
	# -------- META---------- #
$meta = new stdClass();
	# Название сайта
$meta->sitename = '';
	# Заголовок
$meta->title = '';
	# Описание
$meta->desc = '';
	# Текущий линк на страницу
	//$meta->url = getBaseUrl();
	# Картинка для соц. сетей, размер: 1200x630px
	//$meta->image = $meta->url.'/assets/images/social.jpg';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru">

<head>
	<title>
		<?php echo $meta->title; ?>
	</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="title" content="<?php echo $meta->title; ?>" />
	<meta name="description" content="<?php echo $meta->desc; ?>" />
	<link rel="image_src" href="<?php echo $meta->image; ?>" />

	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $meta->title; ?>" />
	<meta property="og:description" content="<?php echo $meta->desc; ?>" />
	<meta property="og:image" content="<?php echo $meta->image; ?>" />
	<meta property="og:url" content="<?php echo $meta->url; ?>" />
	<meta property="og:site_name" content="<?php echo $meta->sitename; ?>" />

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo $meta->title; ?>">
	<meta name="twitter:description" content="<?php echo $meta->desc; ?>">
	<meta name="twitter:image" content="<?php echo $meta->image; ?>">

	<meta itemprop="name" content="<?php echo $meta->title; ?>" />
	<meta itemprop="description" content="<?php echo $meta->desc; ?>" />
	<meta itemprop="image" content="<?php echo $meta->image; ?>" />

	<script src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script src="./assets/public/js/jquery.validate.min.js"></script>
	<link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="./node_modules/popper.js/dist/popper.js" crossorigin="anonymous"></script>
	<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<link href="./node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./node_modules/animate.css/animate.min.css">

	
	
	<link rel="stylesheet" href="./assets/public/css/styles.min.css" type="text/css" />
	<script src="./node_modules/wow.js/dist/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>

<body>
	<header>
		<div class="container">
			<div class="row head">
				<div class="col-sm-3">
					<div class="logo">
						<img src="./assets/public/images/logo.png" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row menu">
						<div class="col-sm-3">
							<div class="link"><a href="" class="go-to-block" data-target=".home">Главная</a></div>
						</div>
						<div class="col-sm-3">
							<div class="link"><a href="" class="go-to-block" data-target=".about-me">Обо мне</a></div>
						</div>
						<div class="col-sm-3">
							<div class="link"><a href="" class="go-to-block" data-target=".services">Услуги</a></div>
						</div>
						<div class="col-sm-3">
							<div class="link" class="go-to-block" data-target=".contacts"><a href="">Контакты</a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row networks">
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://www.facebook.com/profile.php?id=100017213259299&ref=bookmarks"><i class="fa fa-facebook-f"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://www.instagram.com/dan_prozar/"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://vk.com/dan_proz"><i class="fa fa-vk"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="home">
		<div class="container">
			<div class="row content">
				<div class="col-sm-6">
					<div class="welcome-text">
						<div class="hello">
							<div class="p">
								Добро пожаловать! <span class="smaller">Меня зовут</span>
							</div>
						</div>
						<div class="name">
							<div class="p h1">
								<span class="d">Д</span>аня Прозар
							</div>
						</div>
						<div class="spec-on">
							<div class="p">
								Front-end web разработчик
							</div>
						</div>
						<div class="text-about">
							<div class="p">
								Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.
							</div>
						</div>
					</div>
					<div class="row buttons">
						<div class="col-sm-6"><button class="btn btn-banner go-to-block" data-target=".portfolio">Мои работы</button></div>
						<div class="col-sm-6"><button class="btn btn-banner go-to-block" data-target=".hire-me">Заказать у меня сайт</button></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-me">
		<div class="container">
			<div class="title-gen">
				<div class="p1">
					Немного про меня
				</div>
			</div>
			<div class="pod-title">
				<div class="p1">
					Front-end web разработчик
				</div>
			</div>
			<div class="description">
				<div class="p1">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui laborum adipisci pariatur consequuntur, modi rerum error eos magni repudiandae, est impedit provident, doloribus itaque non? Cupiditate praesentium corrupti non doloremque.
				</div>
			</div>
			<div class="row skills top">
				<div class="col-sm-6">
					<div class="skill-bar">
						<p>HTML</p>
						<div id="html" class="progressbar" aria-valuenow="90">
							<div class="bar" role="progressbar"></div>
							<span class="label"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="skill-bar">
						<p>JavaScript & Frameworks</p>
						<div id="js" class="progressbar" aria-valuenow="75">
							<div class="bar" role="progressbar"></div>
							<span class="label"></span>
						</div>
					</div>
				</div>
			</div>

			<div class="row skills">
				<div class="col-sm-6">
					<div class="skill-bar">
						<p>CSS & Preprocesors</p>
						<div id="css" class="progressbar" aria-valuenow="95">
							<div class="bar" role="progressbar"></div>
							<span class="label"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="skill-bar">
						<p>PHP & Frameworks</p>
						<div id="php" class="progressbar" aria-valuenow="60">
							<div class="bar" role="progressbar"></div>
							<span class="label"></span>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</section>
	<section class="services">
		<div class="container">
			<div class="title">
				<div class="p1">
					Услуги
				</div>
			</div>
			<div class="service row">
				<div class="col-sm-4">
					<div class="ser-item">
						<div class="icon">
							<!-- Some icon -->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="100%" height="100%">
								<g>
									<path d="M30,0c-0.553,0-1,0.447-1,1v13.292c0,0.553,0.447,1,1,1s1-0.447,1-1V2.018C45.979,2.546,58,14.896,58,30   c0,15.439-12.561,28-28,28S2,45.439,2,30c0-7.46,2.9-14.479,8.166-19.764c0.391-0.392,0.389-1.024-0.002-1.414   C9.772,8.434,9.14,8.434,8.75,8.824C3.107,14.486,0,22.007,0,30c0,16.542,13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z" fill="#6e41ff"/>
									<path d="M28.555,33.532c0.614,0.845,1.563,1.376,2.604,1.457C31.252,34.997,31.345,35,31.437,35c0.942,0,1.848-0.372,2.519-1.044   c0.737-0.737,1.114-1.756,1.033-2.797s-0.612-1.99-1.459-2.606l-12.944-9.363c-0.396-0.286-0.945-0.242-1.293,0.104   c-0.348,0.348-0.391,0.896-0.104,1.293L28.555,33.532z M32.355,30.172c0.371,0.27,0.604,0.687,0.64,1.144   c0.036,0.456-0.13,0.903-0.453,1.227c-0.324,0.323-0.779,0.488-1.228,0.453c-0.456-0.035-0.873-0.269-1.141-0.637l-5.713-7.897   L32.355,30.172z" fill="#6e41ff"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
						</div>
						<div class="title">
							<div class="p1">Заголовок</div>
						</div>
						<div class="text">
							<div class="p1">Lorem ipsum dolor sit amet consectetur.</div>
						</div>
						<div class="row buttons">
							<div class="col-sm-12"><button class="btn btn-banner">Button</button></div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="ser-item">
						<div class="icon">
							<!-- Some icon -->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="100%" height="100%">
								<g>
									<path d="M30,0c-0.553,0-1,0.447-1,1v13.292c0,0.553,0.447,1,1,1s1-0.447,1-1V2.018C45.979,2.546,58,14.896,58,30   c0,15.439-12.561,28-28,28S2,45.439,2,30c0-7.46,2.9-14.479,8.166-19.764c0.391-0.392,0.389-1.024-0.002-1.414   C9.772,8.434,9.14,8.434,8.75,8.824C3.107,14.486,0,22.007,0,30c0,16.542,13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z" fill="#6e41ff"/>
									<path d="M28.555,33.532c0.614,0.845,1.563,1.376,2.604,1.457C31.252,34.997,31.345,35,31.437,35c0.942,0,1.848-0.372,2.519-1.044   c0.737-0.737,1.114-1.756,1.033-2.797s-0.612-1.99-1.459-2.606l-12.944-9.363c-0.396-0.286-0.945-0.242-1.293,0.104   c-0.348,0.348-0.391,0.896-0.104,1.293L28.555,33.532z M32.355,30.172c0.371,0.27,0.604,0.687,0.64,1.144   c0.036,0.456-0.13,0.903-0.453,1.227c-0.324,0.323-0.779,0.488-1.228,0.453c-0.456-0.035-0.873-0.269-1.141-0.637l-5.713-7.897   L32.355,30.172z" fill="#6e41ff"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
						</div>
						<div class="title">
							<div class="p1">Заголовок</div>
						</div>
						<div class="text">
							<div class="p1">Lorem ipsum dolor sit amet consectetur.</div>
						</div>
						<div class="row buttons">
							<div class="col-sm-12"><button class="btn btn-banner">Button</button></div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="ser-item">
						<div class="icon">
							<!-- Some icon -->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="100%" height="100%">
								<g>
									<path d="M30,0c-0.553,0-1,0.447-1,1v13.292c0,0.553,0.447,1,1,1s1-0.447,1-1V2.018C45.979,2.546,58,14.896,58,30   c0,15.439-12.561,28-28,28S2,45.439,2,30c0-7.46,2.9-14.479,8.166-19.764c0.391-0.392,0.389-1.024-0.002-1.414   C9.772,8.434,9.14,8.434,8.75,8.824C3.107,14.486,0,22.007,0,30c0,16.542,13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z" fill="#6e41ff"/>
									<path d="M28.555,33.532c0.614,0.845,1.563,1.376,2.604,1.457C31.252,34.997,31.345,35,31.437,35c0.942,0,1.848-0.372,2.519-1.044   c0.737-0.737,1.114-1.756,1.033-2.797s-0.612-1.99-1.459-2.606l-12.944-9.363c-0.396-0.286-0.945-0.242-1.293,0.104   c-0.348,0.348-0.391,0.896-0.104,1.293L28.555,33.532z M32.355,30.172c0.371,0.27,0.604,0.687,0.64,1.144   c0.036,0.456-0.13,0.903-0.453,1.227c-0.324,0.323-0.779,0.488-1.228,0.453c-0.456-0.035-0.873-0.269-1.141-0.637l-5.713-7.897   L32.355,30.172z" fill="#6e41ff"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
						</div>
						<div class="title">
							<div class="p1">Заголовок</div>
						</div>
						<div class="text">
							<div class="p1">Lorem ipsum dolor sit amet consectetur.</div>
						</div>
						<div class="row buttons">
							<div class="col-sm-12"><button class="btn btn-banner">Button</button></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row buttons">
				<div class="col-sm-6"><button class="btn btn-banner go-to-block" data-target=".portfolio">Скачать Резюме</button></div>
				<div class="col-sm-6"><button class="btn btn-banner go-to-block" data-target=".hire-me">Заказать у меня сайт</button></div>
			</div>
		</div>
	</section>



	<div class="to-top fadeIn go-to-block" data-target=".home">
		<span class="icon"><i class="fa fa-rocket"></i></span>
	</div>

	<script src="./assets/public/js/script.js"></script>
</body>

</html>