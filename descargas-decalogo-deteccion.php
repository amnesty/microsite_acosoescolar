<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = 'Descargas: Decálogo' . SEPARATOR . SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = 'Detectar el acoso escolar es clave para poder prevenir e intervenir a tiempo. A veces, pequeñas señales pasan desapercibidas y podrían ser el comienzo de una relación de acoso escolar.';
$img_fb_url = URL_SITE . 'images/social/compartir-fb-descargas.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-descargas.jpg';
$page_url = URL_SITE . 'descargas-decalogo-deteccion';
//Asignar el caso

$share_fb = 'Descárgate este decálogo para detectar el bullying y compártelo para lograr #PupitresLibres de acoso escolar.';
$share_tw = '¿Sabes detectar el #acosoescolar? Con este decálogo de @amnistiaespana de la campaña #PupitresLibres podrás detectarlo y atajarlo. Descárgatelo gratis aquí 👇';
$share_wh = '¿Sabes detectar el #acosoescolar? Con este decálogo de @amnistiaespana de la campaña #PupitresLibres podrás detectarlo y atajarlo. Descárgatelo gratis aquí 👇';

$caso = 6;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include_once ("includes/head.php"); ?>
</head>

<body class="descargas">
<!--Header-->
<?php include_once ("includes/header.php"); ?>
<main>
	<section class="descargas-container">
		<div class="grid-container-big grid">
			<div class="descargas-container-inside">
				<div class="columna-contenido bcolor-grey-section">
					<div class="columna-contenido-inside">
						<div class="titulo-redes-container">
							<h2 class="black m-width">Decálogo para detectar el acoso escolar</h2>
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
						<p class="black">Detectar el acoso escolar es clave para poder prevenir e intervenir a tiempo. A veces, pequeñas señales pasan desapercibidas y podrían ser el comienzo de una relación de acoso escolar. <br><br/>Descárgate gratis este decálogo e infórmate de cómo detectar el acoso escolar a tiempo.</p>
					</div>
				</div>
				<div class="columna-formulario bcolor-white-section">
					<div class="cont-formulario-right">	
<?php include_once ("includes/descarga-form.php"); ?>
					</div>
				</div>
			</div>	
		</div>
	</section>
</main>

<?php include_once ("includes/footer.php"); ?>

</body>
</html>