<?php 

$lang = array();
$lang['amenities-1'] = 'Cerradura electrónica';
$lang['amenities-2'] = 'Frigobar';
$lang['amenities-3'] = 'Room service';
$lang['amenities-4'] = 'Wi-Fi gratis';
$lang['amenities-5'] = 'Aire Acondicionado';
$lang['amenities-6'] = 'Seguridad 24 HS';
$lang['amenities-7'] = 'Aislamiento acústico';
$lang['amenities-8'] = 'Excelente vista Av. 9 de Julio<em>*</em>';
$lang['amenities-warning'] = '* Sujeto a disponibilidad.';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title></title>

	<link rel="stylesheet" href="../css/blueprints.css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400italic,400,900,300italic,300,700' rel='stylesheet' type='text/css'>

	<meta name="robots" content="noindex" />
</head>
<body>
	<div class="room-iframe">
		<a href="#" class="featherlight-close room-iframe-close">cerrar <i class="icon_close"></i></a>
		<h4>Habitación New Design</h4>

		<div class="room-slider">
			<img src="rooms/room-1-1.jpg" alt="">
			<img src="rooms/room-1-2.jpg" alt="">
			<img src="rooms/room-1-3.jpg" alt="">
			<img src="rooms/room-1-4.jpg" alt="">
		</div>
		
		<div class="room-iframe-container">
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
		
		<script>
			$('.room-slider').slick({
				autoplay: true,
				autoplaySpeed: 2000,
				speed: 1500,
				dots: false,
				arrows: false
			});
		</script>			
	</div>
</body>
</html>