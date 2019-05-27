<?php
//Tienen activa la cookie de aceptar cookies: cookieAlert3 = "1"
if (isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1) {
?>

	<!--Aquí van los pixel de Seguimiento de Google Adwords-->

	<!--Fin van los pixel de Seguimiento de Google Adwords-->


<?php
	//VIENE DE TWITTER
	if(isset($_SESSION['pk_campaign']) && $_SESSION['pk_campaign'] == 'anuntwtt' || isset($_SESSION['utm_campaign']) && $_SESSION['utm_campaign'] == 'anuntwtt') {
?>
		<!-- Twitter single-event website tag code -->

		<!-- End Twitter single-event website tag code -->
<?php

	}
	
	//VIENE DE FACEBOOK
    if($_SESSION['pk_campaign'] == 'anunfbk' || $_SESSION['utm_campaign'] == 'anunfbk' || $_SESSION['utm_source'] == 'FBPAGE' || $_SESSION['utm_source'] == 'fbpage') {
?>
		<!-- Facebook Pixel Code para formularios 20/07/2017 -->

	    <!-- End Facebook Pixel Code -->
<?php
	}
}
?>