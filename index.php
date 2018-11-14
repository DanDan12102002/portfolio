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

	<link href="" rel="stylesheet">
	<script src="" crossorigin="anonymous"></script>
	<script src=""></script>
	<link rel="stylesheet" href="./assets/css/style.css" type="text/css" />

	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

	<script src=""></script>
	<script src="./assets/js/jquery.validate.min.js"></script>

	<script src="./assets/js/script.js"></script>
</head>

<body>
	
	<section class="home">
		<div class="container">
			
		</div>
	</section>

</body>

</html>