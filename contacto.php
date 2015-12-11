<?php include_once("languages/languages.php"); ?>
<!DOCTYPE html>
<!--[if IE 8]>    <html lang="en-us" class="ie8"> <![endif]-->
<!--[if lt IE 9]><!--> <html lang="es" class="ie9plus"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<title><?php echo $lang['nav-item-4-title']; ?>&nbsp;-&nbsp;<?php echo $lang['TITLE']; ?></title>
	
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">

	<meta property="og:image" content="img/og-image.jpg" />

	<link rel="stylesheet" href="css/blueprints.css">
	<link rel="stylesheet" href="css/components/elegant-icons.css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400italic,400,900,300italic,300,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body class="body-contact">
	<div class="body-wrapper">
		<?php include("includes/nav-panel.php"); ?>

		<header class="header-default contact">
			<?php include("includes/nav-default.php"); ?>
			
			<div class="header-default-content" id="contact-map-container">
				<div id="map_canvas" class="contact-map"></div>
			</div>
		</header>

		<section class="contact-items cf">
			<div class="container">
				<div class="col-md-4">
					<div class="contact-item">
						<div class="header alt">
							<h4><i class="icon_pin"></i> Ubicación</h4>
						</div>
						<div class="content">
							<address>
								<strong>Cerrito 286</strong> (C1010AAF)<br>
								Ciudad de Buenos Aires<br>
								Argentina
							</address>
							<a href="#" data-featherlight="contact/comollegar-es.html" class="btn btn-main btn-althover btn-contact-red btn-small">Como llegar <i class="arrow_carrot-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-item">
						<div class="header">
							<h4><i class="icon_phone"></i> Teléfono</h4>
						</div>
						<div class="content">
							<div class="contact-phone">
								<p><a href="tel:+5411-5252-6400"><span>(+54 11)</span> 5252-6400</a></p>
								<p><a href="tel:+5411-4382-5400"><span>(+54 11)</span> 4382-5400</a></p>
								<p class="desc">lineas rotativas</p>
							</div>
							<!--<div class="contact-fax">
								<p><span>(+54 11)</span> 4382-3284</p>
								<p class="desc">fax</p>
							</div>-->
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-item">
						<div class="header">
							<h4><i class="icon_mail"></i> Email</h4>
						</div>
						<div class="content">
							<div class="contact-mail">
								<p>reservas@hotelbristol.com.ar</p>
								<a href="mailto:reservas@hotelbristol.com.ar" class="btn btn-main btn-althover btn-contact-gold btn-small">Enviar email <i class="arrow_carrot-right"></i></a>
								<a href="#" data-featherlight="contact/form-es.html" class="btn btn-main btn-althover btn-contact-gold btn-small">Form. contacto <i class="arrow_carrot-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<?php include("includes/footer-contact.php"); ?>

	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBN5l2KRXtun3ErzrPtiVoyYw6nLBdxkvs&sensor=false"></script>

	<script>
		$(window).on("resize", function () {
			var vh = $(window).height();
			$("#contact-map-container").height(vh-420);

			if ( vh > 629) {
				$("body").addClass('js');
			};

			if ( ($("body").hasClass('js')) && (vh < 629)) {
				$("body").removeClass('js');
			};
		});

    	$("document").ready(function (){
    		var vh = $(window).height();
			$("#contact-map-container").height(vh-420);

			if ( vh > 629) {
				$("body").addClass('js');
			}

    		var myLatlng = new google.maps.LatLng(-34.605203,-58.382493);
			var mapOptions = {
				center: myLatlng,
				zoom: 16,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				disableDefaultUI: true
			};
			var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			var marker = new google.maps.Marker({
			    position: myLatlng,
			    map: map,
			    title: 'Hotel Bristol'
			});
    	})
    </script>
</body>
</html>