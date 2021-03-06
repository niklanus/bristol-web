<?php include_once("languages/languages.php"); ?>
<!DOCTYPE html>
<!--[if IE 8]>    <html lang="en-us" class="ie8"> <![endif]-->
<!--[if lt IE 9]><!--> <html lang="es" class="ie9plus"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<title><?php echo $lang['nav-item-3-title']; ?>&nbsp;-&nbsp;<?php echo $lang['TITLE']; ?></title>
	
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

		<header class="header-default salones">
			<?php include("includes/nav-default.php"); ?>
			
			<div class="header-default-content">
				<h1 class="main-title">
					<span class="line-1"></span>
					<span class="line-2"></span>
					<span class="text"><?php echo $lang['section-salones-title']; ?></span>
					<span class="line-3"></span>
					<span class="line-4"></span>
				</h1>
			</div>
		</header>

		<section class="section-list">
			<div class="container">
				<div class="list-item salon cf">
					<div class="pic salon-1">
						<div class="pic-overlay">
							<a href="" class="btn btn-main btn-small"><?php echo $lang['salones-booking']; ?></a>
						</div>
					</div>
					<div class="text">
						<?php echo $lang['salon-1']; ?>				
					</div>
				</div>
				<div class="list-item salon alt cf">
					<div class="pic salon-2">
						<div class="pic-overlay">
							<a href="" class="btn btn-main btn-small"><?php echo $lang['salones-booking']; ?></a>
						</div>
					</div>
					<div class="text">
						<?php echo $lang['salon-2']; ?>				
					</div>
				</div>
			</div>
		</section>
		
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>