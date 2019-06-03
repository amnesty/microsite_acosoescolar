	<!--Header-->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JHK4F4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php
if ( strpos( $_SERVER['PHP_SELF'], 'gracias') ) {
	$first_string_ga_event = "gracias";
} 
elseif ( strpos( $_SERVER['PHP_SELF'], 'paso-g-2') )  {
	$first_string_ga_event = "paso-g-2";
} 
elseif ( strpos( $_SERVER['PHP_SELF'], 'descarga-realizada') ) {
	$first_string_ga_event = "descarga-realizada";
}
else {
 	$first_string_ga_event = $casos[$caso][2];	
}
?>	
	<header class="cont-header bcolor-green-section">
		<div class="cont-header-int grid-container-big padding-20 grid">
			<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $first_string_ga_event;?> logo header volver_campaña" data-e_l="<?php echo $first_string_ga_event;?> logo header volver_campaña" href="<?php echo URL_SITE; ?>" class="send-piwik-event"><img class="logo" src="<?php echo URL_SITE; ?>images/logo-amnistia.png"></a>
			<div class="header-right">
				<div class="header-social">
					<p class="white">Comparte</p>
<?php include_once ("includes/social_share_header.php"); ?>
				</div>
				<div class="btn">
					<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $first_string_ga_event;?> boton header firma" data-e_l="<?php echo $first_string_ga_event;?> boton header firma" href="#firma" class="firmar boton black bcolor-yellow send-piwik-event" >Firma</a>
					<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $first_string_ga_event;?> boton header socio" data-e_l="<?php echo $first_string_ga_event;?> boton header socio" target="_blank" href="<?php echo URL_SOCIO; ?>" class="socio boton white bcolor-green send-piwik-event" >Hazte socio/a</a>
				</div>
			</div>
		</div>
	</header><!--.Header-->