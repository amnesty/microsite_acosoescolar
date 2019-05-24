<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = SITE_DESCRIPTION;
$img_fb_url = URL_SITE . 'images/social/compartir-fb-generico.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-generico.jpg';
$page_url = URL_SITE . 'gracias';

$share_fb = 'Yo ya he firmado para llenar todos los colegios de #PupitresLibres de acoso escolar.';
$share_tw = 'Una recogida de firmas de @amnistiaespana bien necesaria para conseguir #PupitresLibres de acoso escolar. ¡Me ha encantado!';
$share_wh = 'Yo ya he firmado para lograr que todos los colegios se llenen de #PupitresLibres de acoso escolar. ¡Súmate tú también!';

//Asignar el caso --> Gracias
$caso = 7;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include_once ("includes/head.php"); ?>
</head>
<body class="gracias gracias1">
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
	
	<!--Modulo compartir-->
	<section class="modulo-compartir bcolor-white-section text-center">
		<div class="grid-container-medium modulo-compartir-inside grid">
			<h2 class="black">Comparte</h2>
			<img src="<?php echo URL_SITE; ?>images/icono-compartir.png">
			<p class="p-small black">Ahora puedes llegar mucho más lejos y multiplicar tu acción: comparte esta petición en tus redes sociales o en tus grupos de Whatsapp para que más personas de tu entorno firmen la campaña. <br><br/> Cuántos más seamos más fuerza tendremos para llenar los colegios de pupitres libres de acoso escolar.</p>
			<div class="container-botones-compartir">
				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp FB" data-e_l="<?php echo $casos[$caso][2]?> comp FB" data-shareurl="<?php echo URL_SITE . TRACK_FB_UTM; ?>" class="white bcolor-green-section facebook facebook-share send-piwik-event" href="#">Comparte en facebook</a>

				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp TW" data-e_l="<?php echo $casos[$caso][2]?> comp TW" data-shareurl="<?php echo urlencode(URL_SITE . TRACK_TW_UTM); ?>" data-texto="<?php echo $share_tw; ?>" class="white bcolor-green-section twitter twitter-share send-piwik-event" href="#">Comparte en twitter</a>

<?php
if($isMobile) {
?>					
				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp WH" data-e_l="<?php echo $casos[$caso][2]?> comp WH" data-enlace="<?php echo $page_url; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode($share_wh . ' ' . URL_SITE.TRACK_WH_UTM);?>" class="white bcolor-green-section whatsapp send-piwik-event">Comparte en Whatsapp</a>
<?php
}
?>	
			</div>
			<p class="p-small black">¡No te vayas todavía! Aún puedes hacer mucho más por los niños y niñas que sufren acoso escolar.</p>
			<a class="bcolor-yellow black continuar-btn" href="<?php echo URL_SITE; ?>gracias-2">Continuar</a>
		</div>
	</section>

</main>

<?php include_once ("includes/footer.php"); ?>

</body>
</html>