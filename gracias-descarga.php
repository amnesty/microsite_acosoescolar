<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = SITE_DESCRIPTION;
$img_fb_url = URL_SITE . 'images/social/compartir-fb-generico.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-generico.jpg';
$page_url = URL_SITE . 'gracias-descarga';
//Asignar el caso --> Gracias
$share_fb = 'Yo ya he firmado para llenar todos los colegios de #PupitresLibres de acoso escolar.';
$share_tw = 'Una recogida de firmas de @amnistiaespana bien necesaria para conseguir #PupitresLibres de acoso escolar. ¡Me ha encantado!';
$share_wh = 'Yo ya he firmado para lograr que todos los colegios se llenen de #PupitresLibres de acoso escolar. ¡Súmate tú también!';

$caso = 8;
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once ("includes/head.php"); ?>
<body class="gracias gracias-descarga">
<!--Header-->
<?php include_once ("includes/header.php"); ?>

<main>
	<!--Modulo gracias-->
	<section class="modulo-gracias bcolor-grey-section text-center">
		<div class="grid-container-small grid">
			<h2 class="black">¡Muchas gracias!</h2>
			<p class="p-big black">Te hemos enviado a tu correo electrónico el material descargable. Y gracias por defender los derechos de los niños y niñas a disfrutar de un mundo libre de acoso escolar.</p>
		</div>
	</section>
	
	<!--Modulo donativo-->
	<section class="modulo-donativo bcolor-white-section">
		<div class="grid-container-small grid container-donativo">
			<img src="images/pulseras-donativo.png" alt="pulseras de apoyo: coles libres de acoso escolar">
			<div class="right">
				<p class="p-small black"><span>Haz un donativo para ayudarnos a seguir con nuestro trabajo y te enviamos a casa esta pulsera</span>: la podrás regalar a los niños, niñas y adolescentes de tu entorno para concienciarles a que colaboren a crear un cole libre de acoso escolar.</p>
				<a target="_blank" class="bcolor-yellow black" href="<?php echo URL_DONA; ?>">Haz un donativo</a>
			</div>
		</div>
	</section>	

	<!--Modulo hazte socio-->
	<section class="modulo-hazte-socio text-center">
		<div class="grid-container-small grid">
			<p class="black"><span>Únete a la familia de Amnistía Internacional</span></p>
			<p class="black p-small">Sólo con el apoyo de personas como tú podemos trabajar con total independencia y exigir al gobierno español un sistema educativo libre de acoso escolar. <br><br/> Contigo a nuestro lado, podemos conseguir el mundo en el que los niños y niñas disfrutan de su infancia y desarrollan al máximo su potencial y confianza en el futuro.</p>
			<a target="_blank" class="white bcolor-green" href="<?php echo URL_SOCIO; ?>">Hazte socio/a</a>
		</div>
	</section>


</main>

<footer class="bcolor-green-section text-center clear">
	<div class="grid">
		<p class="white">2019 Amnistía Internacional</p>
		<p class="white">Más información sobre el uso de los datos en <a class="underline" href="#" target="_blank"> https://www.es.amnesty.org/politica-de-privacidad</a></p>
	</div>
</footer>

<!--Boton Firma-->

<a href="#" class="btn-fijo-firma boton black bcolor-yellow">Firma</a>

</body>
</html>