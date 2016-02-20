<div class="contact-iframe">
	<?php include_once("languages/languages.php"); ?>
	<a href="#" class="contact-iframe-close featherlight-close"><?php echo $lang['close']; ?> <i class="icon_close"></i></a>
	<h4><i class="icon_pin"></i> <?php echo $lang['contact-directions']; ?></h4>
	
	<div class="contact-iframe-container centered">
		<p><strong><?php echo $lang['directions-from-city']; ?></strong></p>
		<a href="http://mapa.buenosaires.gov.ar/comollego/?lat=-34.579282&lng=-58.421425&zl=13&modo=transporte&desde=geolocation&hasta=Bristol+Hotel%2C+Alojamiento" class="btn btn-main btn-althover btn-contact-gold btn-small" id="iframe-map-btn"><?php echo $lang['directions-map']; ?> <i class="arrow_carrot-right"></i></a>

		<p class="spacer-top"><strong><?php echo $lang['directions-gps']; ?></strong></p>
		<p><?php echo $lang['directions-gps-coordinates']; ?></p>
	</div>		
</div>