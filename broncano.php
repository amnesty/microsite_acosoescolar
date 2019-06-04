<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = 'David Broncano ha querido saber qué es la ayuda entre iguales' . SEPARATOR .SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = 'El presentador David Broncano ha querido saber qué es la ayuda entre iguales y ha entrevistado a varios chicos y chicas que forman parte de esta iniciativa para prevenir y combatir el acoso escolar, en un colegio en El Escorial.';
$img_fb_url = URL_SITE . 'images/social/compartir-fb-broncano.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-broncano.jpg';
$page_url = URL_SITE . 'broncano';

$share_fb = 'David Broncano quiere #PupitresLibres de acoso escolar en los colegios y por eso ha entrevistado a estos chicos. Yo que tú, no me perdía el vídeo.';
$share_tw = 'No te pierdas este vídeo de Broncano entrevistando a chicos y chicas que luchan por #PupitresLibres de acoso escolar en su colegio de mano de @amnistiaespana. A mí me ha encantado.';
$share_wh = '¿Has visto esta entrevista de Broncano a chicos y chicas que luchan contra el acoso escolar en sus colegios? A mí me ha encantado.';

$url_share_fb = 'http://bit.ly/2I6ZYlR';
$url_share_tw = 'http://bit.ly/2I4yywW';
$url_share_wh = 'http://bit.ly/2I5Sy2k';

//Asignar el caso
$caso = 5;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include_once ("includes/head.php"); ?>
</head>

<body class="broncano">
<!--Header-->
<?php include_once ("includes/header.php"); ?>

<main>
	<section class="caso-container">
		<div class="grid-container-big grid">
			<div class="caso-container-inside">
				<div class="columna-contenido bcolor-grey-section">
					<div class="columna-contenido-inside">
						<div class="titulo-redes-container">
							<h2 class="black m-width">¿Qué es la ayuda entre iguales?</h2>
							<div class="compartir-columna-contenido">
								<p class="green p-super-small">Comparte</p>
<?php include ("includes/social_share_interior.php"); ?>
							</div>
						</div>
						<div class="compartir-columna-contenido-down">
							<div class="compartir-columna-contenido-down-inside">
								<p class="green p-super-small">Comparte</p>
<?php include ("includes/social_share_interior.php"); ?>
							</div>
						</div>
						<p class="black">David Broncano se animó a conocerlo de la mano de Paula, Celia y Raúl. Paula va a 3º de la ESO, Celia a 1º de la ESO y Raúl a 2º de bachillerato.</p>
						<div class="grid-video">
							<div class="video-responsive">
								<!--<iframe src="https://www.youtube.com/embed/NrCLMYShG0U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
								<div data-idyt="NrCLMYShG0U" data-category="Vídeos" data-action="Reproducir" data-label="Caso David Broncano" id="videocase"></div>
							</div>
						</div>
						<p class="black">El presentador David Broncano ha querido saber qué es la ayuda entre iguales y ha entrevistado a varios chicos y chicas que forman parte de esta iniciativa para prevenir y combatir el acoso escolar en el colegio IES Miguel Catalán de Coslada, en Madrid. Porque él también sabe que es posible tener pupitres libres de acoso escolar en los colegios.
						</p>
					</div>
				</div>
				<div class="columna-formulario bcolor-white-section">
					<div class="cont-formulario-interior">
<?php include_once ("includes/firma-form.php"); ?>	
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include_once ("includes/footer.php"); ?>

</body>
</html>