<!DOCTYPE html>
<!--[if IE 8]>    <html lang="en-us" class="ie8"> <![endif]-->
<!--[if lt IE 9]><!--> <html lang="es" class="ie9plus"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<?php include_once("languages/languages.php"); ?>

	<title><?php echo $lang['nav-item-2-title']; ?>&nbsp;-&nbsp;<?php echo $lang['TITLE']; ?></title>
	
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

		<header class="header-default gastronomy">
			<?php include("includes/nav-default.php"); ?>
			
			<div class="header-default-content">
				<h1 class="main-title">
					<span class="line-1"></span>
					<span class="line-2"></span>
					<span class="text"><?php echo $lang['section-gastronomy-title']; ?></span>
					<span class="line-3"></span>
					<span class="line-4"></span>
				</h1>
			</div>
		</header>

		<section class="section-list">
			<div class="container">
				<div class="list-item">
					<div class="list-item-pic pic-1"></div>
					<div class="list-item-text">
						<?php echo $lang['services-restaurant']; ?>				
					</div>
				</div>
			</div>
		</section>
		
		<?php include("includes/footer.php"); ?>
	</div>

	<script src="js/imagelightbox.min.js"></script>
	
	<script>
	    /*$(function(){
	        $('.room').imageLightbox();
	    });*/

		$( function(){
				// ACTIVITY INDICATOR

			var activityIndicatorOn = function()
				{
					$( '<div id="imagelightbox-loading"><div></div></div>' ).appendTo( 'body' );
				},
				activityIndicatorOff = function()
				{
					$( '#imagelightbox-loading' ).remove();
				},


				// OVERLAY

				overlayOn = function()
				{
					$( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
				},
				overlayOff = function()
				{
					$( '#imagelightbox-overlay' ).remove();
				},


				// CLOSE BUTTON

				closeButtonOn = function( instance )
				{
					$( '<button type="button" id="imagelightbox-close" title="Close"></button>' ).appendTo( 'body' ).on( 'click touchend', function(){ $( this ).remove(); instance.quitImageLightbox(); return false; });
				},
				closeButtonOff = function()
				{
					$( '#imagelightbox-close' ).remove();
				},


				// CAPTION

				captionOn = function()
				{
					var description = $( 'a[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"] img' ).attr( 'alt' );
					if( description.length > 0 )
						$( '<div id="imagelightbox-caption">' + description + '</div>' ).appendTo( 'body' );
				},
				captionOff = function()
				{
					$( '#imagelightbox-caption' ).remove();
				},


				// NAVIGATION

				navigationOn = function( instance, selector )
				{
					var images = $( selector );
					if( images.length )
					{
						var nav = $( '<div id="imagelightbox-nav"></div>' );
						for( var i = 0; i < images.length; i++ )
							nav.append( '<button type="button"></button>' );

						nav.appendTo( 'body' );
						nav.on( 'click touchend', function(){ return false; });

						var navItems = nav.find( 'button' );
						navItems.on( 'click touchend', function()
						{
							var $this = $( this );
							if( images.eq( $this.index() ).attr( 'href' ) != $( '#imagelightbox' ).attr( 'src' ) )
								instance.switchImageLightbox( $this.index() );

							navItems.removeClass( 'active' );
							navItems.eq( $this.index() ).addClass( 'active' );

							return false;
						})
						.on( 'touchend', function(){ return false; });
					}
				},
				navigationUpdate = function( selector )
				{
					var items = $( '#imagelightbox-nav button' );
					items.removeClass( 'active' );
					items.eq( $( selector ).filter( '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ).index( selector ) ).addClass( 'active' );
				},
				navigationOff = function()
				{
					$( '#imagelightbox-nav' ).remove();
				},


				// ARROWS

				arrowsOn = function( instance, selector )
				{
					var $arrows = $( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>' );

					$arrows.appendTo( 'body' );

					$arrows.on( 'click touchend', function( e )
					{
						e.preventDefault();

						var $this	= $( this ),
							$target	= $( selector + '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ),
							index	= $target.index( selector );

						if( $this.hasClass( 'imagelightbox-arrow-left' ) )
						{
							index = index - 1;
							if( !$( selector ).eq( index ).length )
								index = $( selector ).length;
						}
						else
						{
							index = index + 1;
							if( !$( selector ).eq( index ).length )
								index = 0;
						}

						instance.switchImageLightbox( index );
						return false;
					});
				},
				arrowsOff = function()
				{
					$( '.imagelightbox-arrow' ).remove();
				};


			var selectorA = 'a[data-imagelightbox="room-1-gallery"]';
			var instanceA = $( selectorA ).imageLightbox(
			{
				onStart:		function(){ overlayOn(); arrowsOn( instanceA, selectorA ); closeButtonOn( instanceA ); },
				onEnd:			function(){ overlayOff(); arrowsOff(); activityIndicatorOff(); closeButtonOff(); },
				onLoadStart: 	function(){ activityIndicatorOn(); },
				onLoadEnd:	 	function(){ $( '.imagelightbox-arrow' ).css( 'display', 'block' ); activityIndicatorOff(); }
			});

			var selectorB = 'a[data-imagelightbox="room-2-gallery"]';
			var instanceB = $( selectorB ).imageLightbox(
			{
				onStart:		function(){ overlayOn(); arrowsOn( instanceB, selectorB ); closeButtonOn( instanceB ); },
				onEnd:			function(){ overlayOff(); arrowsOff(); activityIndicatorOff(); closeButtonOff(); },
				onLoadStart: 	function(){ activityIndicatorOn(); },
				onLoadEnd:	 	function(){ $( '.imagelightbox-arrow' ).css( 'display', 'block' ); activityIndicatorOff(); }
			});

			var selectorC = 'a[data-imagelightbox="room-3-gallery"]';
			var instanceC = $( selectorC ).imageLightbox(
			{
				onStart:		function(){ overlayOn(); arrowsOn( instanceC, selectorC ); closeButtonOn( instanceC ); },
				onEnd:			function(){ overlayOff(); arrowsOff(); activityIndicatorOff(); closeButtonOff(); },
				onLoadStart: 	function(){ activityIndicatorOn(); },
				onLoadEnd:	 	function(){ $( '.imagelightbox-arrow' ).css( 'display', 'block' ); activityIndicatorOff(); }
			});

			var selectorD = 'a[data-imagelightbox="room-4-gallery"]';
			var instanceD = $( selectorD ).imageLightbox(
			{
				onStart:		function(){ overlayOn(); arrowsOn( instanceD, selectorD ); closeButtonOn( instanceD ); },
				onEnd:			function(){ overlayOff(); arrowsOff(); activityIndicatorOff(); closeButtonOff(); },
				onLoadStart: 	function(){ activityIndicatorOn(); },
				onLoadEnd:	 	function(){ $( '.imagelightbox-arrow' ).css( 'display', 'block' ); activityIndicatorOff(); }
			});


		});
	</script>

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