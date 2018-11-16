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

	<script src="./assets/public/js/script.js"></script>
	
	<link rel="stylesheet" href="./assets/public/css/styles.min.css" type="text/css" />
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
							<div class="link"><a href="">Главная</a></div>
						</div>
						<div class="col-sm-3">
							<div class="link"><a href="">Обо мне</a></div>
						</div>
						<div class="col-sm-3">
							<div class="link"><a href="">Услуги</a></div>
						</div>
						<div class="col-sm-3">
							<div class="link"><a href="">Контакты</a></div>
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
					About Us
				</div>
			</div>
		</div>
	</section>

</body>

</html>