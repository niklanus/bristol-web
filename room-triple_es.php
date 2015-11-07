<div class="room-iframe">
	<?php include_once("languages/lang.es.php"); ?>

	<script>
		$(document).ready(function() {
			$('.room-slider').slick({
				autoplay: true,
				autoplaySpeed: 2000,
				speed: 1000,
				dots: false,
				arrows: false
			});

			$(".room-iframe-amenities span")
				.velocity("transition.slideDownIn",
					{duration: 1200,delay: 0,stagger: 220});
		});
	</script>

	<a href="#" class="featherlight-close room-iframe-close">cerrar <i class="icon_close"></i></a>
	<h4>Habitación Triple</h4>

	<div class="room-iframe-main cf">

		<div class="row">
			<div class="col-md-8">
				<div class="room-slider">
					<img src="img/rooms/triple/1.jpg" alt="Hotel Bristol - Buenos Aires, Argentina">
					<img src="img/rooms/triple/2.jpg" alt="Hotel Bristol - Buenos Aires, Argentina">
					<img src="img/rooms/triple/3.jpg" alt="Hotel Bristol - Buenos Aires, Argentina">
					<img src="img/rooms/triple/4.jpg" alt="Hotel Bristol - Buenos Aires, Argentina">
				</div>
			</div>
			<div class="col-md-4">
				<div class="room-iframe-amenities">
					<span><?php echo $lang['amenities-1']; ?></span><span>
					<?php echo $lang['amenities-2']; ?></span><span>
					<?php echo $lang['amenities-3']; ?></span><span>
					<?php echo $lang['amenities-4']; ?></span><span>
					<?php echo $lang['amenities-5']; ?></span><span>
					<?php echo $lang['amenities-6']; ?></span><span>
					<?php echo $lang['amenities-7']; ?></span><span>
					<?php echo $lang['amenities-8-estandar']; ?></span>
					<p><?php echo $lang['amenities-warning']; ?></p>
				</div>
			</div>
		</div>

	</div>
</div>