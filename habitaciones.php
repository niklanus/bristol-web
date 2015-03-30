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

	<link rel="stylesheet" href="css/blueprints.css">
	<link rel="stylesheet" href="css/components/elegant-icons.css">
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

				<div class="container rooms-info cf">
					<div class="row">
						<div class="col-sm-4">
							<?php echo $lang['rooms-info-intro']; ?>
						</div>
						<div class="col-sm-8">
							<div class="rooms-amenities">
								<span><?php echo $lang['amenities-1']; ?></span><span>
								<?php echo $lang['amenities-2']; ?></span><span>
								<?php echo $lang['amenities-3']; ?></span><span>
								<?php echo $lang['amenities-4']; ?></span><span>
								<?php echo $lang['amenities-5']; ?></span><span>
								<?php echo $lang['amenities-6']; ?></span><span>
								<?php echo $lang['amenities-7']; ?></span><span>
								<?php echo $lang['amenities-8']; ?></span>
								<p class="warning"><?php echo $lang['amenities-warning']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<section class="section-rooms cf">
			<a class="room room-1" href="#" data-featherlight="rooms/room-1-es.php">
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
			
			<a class="room room-2" href="#" data-featherlight="rooms/room-2-es.php">
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
			<a class="room room-3" href="#" data-featherlight="rooms/room-3-es.php">
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
			<a class="room room-4" href="#" data-featherlight="rooms/room-4-es.php">
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

	<script>
		$(window).load(function() {
			$(".rooms-amenities span")
			  .velocity("transition.slideDownIn", {
			    duration: 1500,
			    delay: 0,
			    stagger: 220
			  });
			})
	</script>
	
</body>
</html>