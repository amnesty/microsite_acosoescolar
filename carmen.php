<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = SITE_DESCRIPTION;
$img_fb_url = URL_SITE . 'images/social/compartir-fb-caso-carmen.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-caso-carmen.jpg';
$page_url = URL_SITE . 'carmen';

$share_fb = 'La historia de Carmen y su hijo Juan ha hecho que firme la campaña #PupitresLibres de acoso escolar de Amnistía Internacional. ¡Conócela!';
$share_tw = 'La historia de Carmen y su hijo Juan ha hecho que firme la campaña #PupitresLibres de acoso escolar de @amnistiaespana ¡Conócela!';
$share_wh = 'La historia de Carmen y su hijo Juan me han hecho firmar la campaña de Amnistía Internacional para lograr llenar todos los colegios de #PupitresLibres de acoso escolar ¡Conócela!';

//Asignar el caso
$caso = 1;
?>
<!DOCTYPE html>
<html lang="es">
<head>	
<?php include_once ("includes/head.php"); ?>
</head>

<body class="caso-interior caso-carmen">
<!--Header-->
<?php include_once ("includes/header.php"); ?>

<main>
	<section class="caso-container">
		<div class="grid-container-big grid">
			<div class="caso-container-inside">
				<div class="columna-contenido bcolor-grey-section">
					<div class="columna-contenido-inside">
						<div class="titulo-redes-container">
							<h2 class="black">Carmen</h2>
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
						<p class="black p-bottom-caso">Carmen, una madre que no se quedó de brazos cruzados.</p>
						<p class="black semibold">"Yo a día de hoy me siento mal porque no he podido hacer nada para evitarle el daño. Te hace sentir una impotencia tan grande [...] Siento que como madre lo único que he podido hacer por mi hijo ha sido cambiarlo de colegio. Fue lo único que pude hacer por él. Absolutamente nada más."</p>
						<div class="grid-video">
							<div class="video-responsive">
								<iframe src="https://www.youtube.com/embed/9Eb3AU1zV38" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
						<p class="black">El hijo de Carmen, Juan, sufrió acoso escolar durante un curso entero. Hasta que no llegaron las vacaciones de Navidad, no se atrevió a contárselo a su madre. Y aquel día, se convirtió en el "chivato". Ante la mirada impasible de sus compañeros y compañeras, Juan no dejó de recibir insultos, empujones, agresiones físicas durante un curso escolar entero. Incluso dejaron de llamarle por su nombre. Carmen no recibió apoyo de la dirección del colegio. Incluso cuando consiguió que se abriera el protocolo de acoso, lo terminaron cerrando justificando que Juan "no se sentía inferior a sus acosadores". <br><br/>

						Amnistía Internacional con su campaña <span>#PupitresLibres</span> de acoso escolar trabaja para que la historia de el niño Juan no se repita en ningún sitio. <br><br/>

						Firma para exigir al gobierno espacios libres de acoso escolar.
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