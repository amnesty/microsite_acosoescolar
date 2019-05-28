<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = 'Eme sufrió acoso escolar durante 4 años' . SEPARATOR . SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = 'Eme no era consciente de que lo que le llevaba viviendo 4 años en su nuevo cole era acoso escolar. Primero empezaron a insultarla, lo siguiente fue pegarla. Al final, un día, una compañera la tiró por las escaleras del colegio.';
$img_fb_url = URL_SITE . 'images/social/compartir-fb-caso-eme.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-caso-eme.jpg';
$page_url = URL_SITE . 'eme';

$share_fb = 'La historia de Eme ha hecho que firme la campaña #PupitresLibres de acoso escolar de Amnistía Internacional. ¡Conócela!';
$share_tw = 'La historia de Eme ha hecho que firme la campaña #PupitresLibres de acoso escolar de @amnistiaespana ¡Conócela!';
$share_wh = 'La historia de Eme me ha hecho firmar la campaña de Amnistía Internacional para lograr llenar todos los colegios de #PupitresLibres de acoso escolar ¡Conócela!';

$url_share_fb = $page_url . TRACK_FB_UTM;
$url_share_tw = $page_url . TRACK_TW_UTM;
$url_share_wh = $page_url . TRACK_WH_UTM;

//Asignar el caso
$caso = 2;
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
							<h2 class="black">Eme</h2>
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
						<p class="black p-bottom-caso">Eme sufrió acoso escolar durante 4 años.</p>
						<p class="black semibold">"Yo no sé por qué me tocó a mi, pero igual que me tocó a mí, sé que también le ha tocado a más gente de ese instituto. Y ahora lo cuento para que nadie más tenga que pasar lo que yo he pasado."</p>

						<div class="grid-video">
							<div class="video-responsive">
								<iframe src="https://www.youtube.com/embed/9Eb3AU1zV38" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
						
						<p class="black">Eme no era consciente de que lo que le llevaba viviendo 4 años en su nuevo cole era acoso escolar. Primero empezaron a insultarla, lo siguiente fue pegarla. Al final, un día, una compañera la tiró por las escaleras del colegio. La única persona que la ayudó fue la mujer encargada de las becas escolares. Cuando fue a denunciarlo a la jefatura de estudios le dijeron que no podían hacer nada, que era una "cosa de críos". El acoso solo terminó cuando los padres de Eme la cambiaron de instituto.
  						<br><br/>

						Amnistía Internacional con su campaña <span>#PupitresLibres</span> de acoso escolar trabaja para que la historia de Eme no se repita en ningún sitio. <br><br/>

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