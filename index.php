<?php include_once("languages/languages.php"); ?>
<!DOCTYPE html>
<!--[if IE 8]>    <html lang="en-us" class="ie8"> <![endif]-->
<!--[if lt IE 9]><!--> <html lang="es" class="ie9plus"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<title><?php echo $lang['TITLE']; ?></title>
	
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
<body class="preloader">
	<!-- Preloader -->
	<div id="preloader">
	    <div id="preloader-status">
	    	<div class="nav-logo"></div>
	    	<span></span>
	    </div>
	</div>

	<div class="body-wrapper">
		<?php include("includes/nav-panel.php"); ?>

		<header class="header-full">
			<?php include("includes/nav-default.php"); ?>

			<div class="header-slider">
				<div class="slide">
					<div class="slide-centering">
						<div class="slide-content">
							<div class="slide-home-featured">
								<?php echo $lang['slide-home-1']; ?>
							</div>							
						</div>
					</div>
					<div class="bg home-1"></div>
				</div>
			</div>
		</header>

		<section class="section-about" id="about">
			<h2 class="main-title">
				<span class="line-1"></span>
				<span class="line-2"></span>
				<span class="text"><?php echo $lang['section-about-title']; ?></span>
				<span class="line-3"></span>
				<span class="line-4"></span>
			</h2>

			<div class="container cf">
				<div class="row">
					<div class="col-sm-6">
						<p><?php echo $lang['section-about-p1']; ?></p>
						<p><?php echo $lang['section-about-p2']; ?></p>
						<p><?php echo $lang['section-about-p3']; ?></p>
					</div>

					<div class="col-sm-6">
						<p><?php echo $lang['section-about-p4']; ?></p>
						<p><?php echo $lang['section-about-p5']; ?></p>
						<p><?php echo $lang['section-about-p6']; ?></p>
					</div>
				</div>
			</div>
		</section>

		<?php include("includes/footer.php"); ?>
	</div>

	<!-- Preloader -->
	<script type="text/javascript">
		//<![CDATA[
		$(window).load(function() {
			$('#preloader-status').fadeOut(800);
			$('#preloader').delay(600).fadeOut(800);
			$('body').css('overflow', 'auto');
			$(".slide-home-featured p, .slide-home-featured h1")
			  .blast({ delimiter: "word" })
			  .velocity("transition.slideDownIn", {
			    duration: 2400,
			    stagger: 70,
			    delay: 0
			  });
			$(".slide-home-featured .btn")
			  .velocity("transition.fadeIn", {
			    duration: 800,
			    delay: 2000
			  });
			//$('.header-slider').slick('slickPlay');
			})
		//]]>
	</script>

	
</body>
</html>