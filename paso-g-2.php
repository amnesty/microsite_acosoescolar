<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = '¡Muchas gracias por firmar y defender el derechos de los niños y niñas a disfrutar de un mundo libre de acoso escolar!';
$img_fb_url = URL_SITE . 'images/social/compartir-fb-generico.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-generico.jpg';
$page_url = URL_SITE . 'paso-g-2';

$share_fb = 'Yo ya he firmado para llenar todos los colegios de #PupitresLibres de acoso escolar.';
$share_tw = 'Una recogida de firmas de @amnistiaespana bien necesaria para conseguir #PupitresLibres de acoso escolar. ¡Me ha encantado!';
$share_wh = 'Yo ya he firmado para lograr que todos los colegios se llenen de #PupitresLibres de acoso escolar. ¡Súmate tú también!';

$url_share_fb = $page_url . TRACK_FB_UTM;
$url_share_tw = $page_url . TRACK_TW_UTM;
$url_share_wh = $page_url . TRACK_WH_UTM;

$caso = $_GET['caso'];
if($caso) {
    $segmentacion_origen = "?origen=pupitres_libres&caso=".$casos[$caso][2];
}else {
    $segmentacion_origen = "?origen=pupitres_libres";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include_once ("includes/head.php"); ?>
</head>
<body class="gracias gracias2">
<!--Header-->
<?php include_once ("includes/header.php"); ?>

<main>
	<!--Modulo gracias-->
	<section class="modulo-gracias bcolor-grey-section text-center">
		<div class="grid-container-small grid">
			<h2 class="black">¡Muchas gracias!</h2>
			<p class="p-big black">Por firmar y defender el derechos de los niños y niñas a disfrutar de un mundo libre de acoso escolar.</p>
		</div>
	</section>
	
	<!--Modulo donativo-->
	<section class="modulo-donativo bcolor-white-section">
		<div class="grid-container-small grid container-donativo">
			<img src="<?php echo URL_SITE; ?>images/pulseras-donativo.png" alt="pulseras de apoyo: coles libres de acoso escolar">
			<div class="right">
				<p class="p-small black"><span>Haz un donativo para ayudarnos a seguir con nuestro trabajo y te enviamos a casa esta pulsera</span>: la podrás regalar a los niños, niñas y adolescentes de tu entorno para concienciarles a que colaboren a crear un cole libre de acoso escolar.</p>
				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="gracias boton dona" data-e_l="gracias boton dona" target="_blank" class="bcolor-yellow black send-piwik-event" href="<?php echo URL_DONA; ?>">Haz un donativo</a>
			</div>
		</div>
	</section>	

	<!--Modulo hazte socio-->
	<section class="modulo-hazte-socio text-center">
		<div class="grid-container-small grid">
			<p class="black"><span>Únete a la familia de Amnistía Internacional</span></p>
			<p class="black p-small">Sólo con el apoyo de personas como tú podemos trabajar con total independencia y exigir al gobierno español un sistema educativo libre de acoso escolar. <br><br/> Contigo a nuestro lado, podemos conseguir el mundo en el que los niños y niñas disfrutan de su infancia y desarrollan al máximo su potencial y confianza en el futuro.</p>
			<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="gracias boton socio" data-e_l="gracias boton socio" target="_blank" class="white bcolor-green send-piwik-event" href="<?php echo URL_SOCIO; ?>">Hazte socio/a</a>
		</div>
	</section>
	
</main>

<?php include_once ("includes/footer.php"); ?>

</body>
</html>