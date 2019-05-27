	<!--Header-->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JHK4F4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    <div class="KW_progressContainer">
        <div class="KW_progressBar">
        </div>
    </div>
	<header class="cont-header bcolor-green-section">

<?php
if (strpos( $_SERVER['PHP_SELF'], 'gracias')) {
?>
		
		<div class="cont-header-int grid-container-big padding-20 grid">
			<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="gracias logo header volver_campaña" data-e_l="gracias logo header volver_campaña" href="<?php echo URL_SITE; ?>" class="send-piwik-event"><img class="logo" src="<?php echo URL_SITE; ?>images/logo-amnistia.png"></a>
			<div class="header-right">
				<div class="header-social">
					<p class="white">Comparte</p>
<?php include_once ("includes/social_share_header.php"); ?>
				</div>
				<div class="btn">
					<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="gracias boton header firma" data-e_l="gracias boton header firma" href="#firma" class="firmar boton black bcolor-yellow send-piwik-event" >Firma</a>
					<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="gracias boton header socio" data-e_l="gracias boton header socio" target="_blank" href="<?php echo URL_SOCIO; ?>" class="socio boton white bcolor-green send-piwik-event" >Hazte socio/a</a>
				</div>
			</div>
		</div>

<?php
} else {
?>

		<div class="cont-header-int grid-container-big padding-20 grid">
			<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> logo header volver_campaña" data-e_l="<?php echo $casos[$caso][2]?> logo header volver_campaña" href="<?php echo URL_SITE; ?>" class="send-piwik-event"><img class="logo" src="<?php echo URL_SITE; ?>images/logo-amnistia.png"></a>
			<div class="header-right">
				<div class="header-social">
					<p class="white">Comparte</p>
<?php include_once ("includes/social_share_header.php"); ?>
				</div>
				<div class="btn">
					<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> boton header firma" data-e_l="<?php echo $casos[$caso][2]?> boton header firma" href="#firma" class="firmar boton black bcolor-yellow send-piwik-event" >Firma</a>
					<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> boton header socio" data-e_l="<?php echo $casos[$caso][2]?> boton header socio" target="_blank" href="<?php echo URL_SOCIO; ?>" class="socio boton white bcolor-green send-piwik-event" >Hazte socio/a</a>
				</div>
			</div>
		</div>
<?php
} 
?>


	</header><!--.Header-->