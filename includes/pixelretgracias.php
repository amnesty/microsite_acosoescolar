<?php
//Tienen activa la cookie de aceptar cookies: cookieAlert3 = "1"
if (isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1) {

    //VIENE DE GOOGLE Grants
    if($_SESSION['pk_campaign'] == 'anunggl' || $_SESSION['utm_campaign'] == 'anunggl') {
?>
		<!-- Google Code for pixel_firmas_grant Conversion Page -->


		<!-- Fin Google Code for pixel_firmas_grant Conversion Page -->
		
<?php
    }

    //VIENE DE GOOGLE Display
    if($_SESSION['pk_campaign'] == 'anunggl_visual' || $_SESSION['utm_campaign'] == 'anunggl_visual') {
?>
		<!-- Google Code for Pixel_firmas Conversion Page -->
		

		<!-- FinGoogle Code for Pixel_firmas Conversion Page -->
<?php
    }

    //VIENE DE FACEBOOK
    if($_SESSION['pk_campaign'] == 'anunfbk' || $_SESSION['utm_campaign'] == 'anunfbk' || $_SESSION['utm_source'] == 'FBPAGE' || $_SESSION['utm_source'] == 'fbpage') {
?>
    <!--  Facebook Pixel Code  -->
    

    <!-- End Facebook Pixel Code -->
<?php
    }

	//VIENE DE TWITER
    if($_SESSION['pk_campaign'] == 'anuntwtt' || $_SESSION['utm_campaign'] == 'anuntwtt' || $_SESSION['utm_source'] == 'anuntwtt' ) {
?>
    <!-- Twitter single-event website tag code -->


    <!-- End Twitter single-event website tag code -->
<?php
    }
}
?>