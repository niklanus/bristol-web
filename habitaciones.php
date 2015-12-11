<?php include_once("languages/languages.php"); ?>
<!DOCTYPE html>
<!--[if IE 8]>    <html lang="en-us" class="ie8"> <![endif]-->
<!--[if lt IE 9]><!--> <html lang="es" class="ie9plus"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<title><?php echo $lang['nav-item-1-title']; ?>&nbsp;-&nbsp;<?php echo $lang['TITLE']; ?></title>
	
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">

	<meta property="og:image" content="img/og-image.jpg" />

	<link rel="stylesheet" href="css/blueprints.css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400italic,400,900,300italic,300,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="body-wrapper">
		<?php include("includes/nav-panel.php"); ?>

		<header class="header-default rooms">
			<?php include("includes/nav-default.php"); ?>
			
			<div class="header-default-content">
				<h1 class="main-title">
					<span class="line-1"></span>
					<span class="line-2"></span>
					<span class="text"><?php echo $lang['section-rooms-title']; ?></span>
					<span class="line-3"></span>
					<span class="line-4"></span>
				</h1>

				<p class="container rooms-info cf">
					<?php echo $lang['rooms-info-intro']; ?>
				</p>
			</div>
		</header>

		<section class="section-rooms cf">
			<a class="room room-estandar" href="#" data-featherlight="room-estandar_es.php">
				<div class="room-wrapper">
					<div class="room-content">
						<h3 class="main-title">
							<span class="line-1"></span>
							<span class="line-2"></span>
							<span class="text"><?php echo $lang['room-name-1']; ?></span>
							<span class="line-3"></span>
							<span class="line-4"></span>
						</h3>
					</div>
				</div>
				<div class="room-bg"></div>
				<a href="img/rooms-bg-2.jpg" data-imagelightbox="room-1-gallery"></a>
				<a href="img/rooms-bg-3.jpg" data-imagelightbox="room-1-gallery"></a>
				<a href="img/rooms-bg-4.jpg" data-imagelightbox="room-1-gallery"></a>
			</a>

			<a class="room room-superior" href="#" data-featherlight="room-superior_es.php">
				<div class="room-wrapper">
					<div class="room-content">
						<h3 class="main-title">
							<span class="line-1"></span>
							<span class="line-2"></span>
							<span class="text"><?php echo $lang['room-name-2']; ?></span>
							<span class="line-3"></span>
							<span class="line-4"></span>
						</h3>
					</div>
				</div>
				<div class="room-bg"></div>
			</a>

			<a class="room room-new-design" href="#" data-featherlight="room-new-design_es.php">
				<div class="room-wrapper">
					<div class="room-content">
						<h3 class="main-title">
							<span class="line-1"></span>
							<span class="line-2"></span>
							<span class="text"><?php echo $lang['room-name-3']; ?></span>
							<span class="line-3"></span>
							<span class="line-4"></span>
						</h3>
					</div>
				</div>
				<div class="room-bg"></div>
			</a>

			<a class="room room-triple" href="#" data-featherlight="room-triple_es.php">
				<div class="room-wrapper">
					<div class="room-content">
						<h3 class="main-title">
							<span class="line-1"></span>
							<span class="line-2"></span>
							<span class="text"><?php echo $lang['room-name-4']; ?></span>
							<span class="line-3"></span>
							<span class="line-4"></span>
						</h3>
					</div>
				</div>
				<div class="room-bg"></div>
			</a>
		</section>
		
		<?php include("includes/footer.php"); ?>
	</div>
	
</body>
</html>