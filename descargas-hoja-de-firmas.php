<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = 'Descargas: Hoja de firmas' . SEPARATOR .SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = SITE_DESCRIPTION;
$img_fb_url = URL_SITE . 'images/social/compartir-fb-caso-eme.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-caso-eme.jpg';
$page_url = URL_SITE . 'descargas-hoja-de-firmas';
//Asignar el caso

$share_fb = '¿Quieres organizar una recogida de firmas para exigir #PupitresLibres de acoso escolar en tu colegio o instituto? Te lo ponemos bien fácil. Descárgate aquí la hoja de firmas, imprime varias copias y envíalas con las firmas de decenas de personas que apoyan la campaña a nuestras oficinas o al grupo local de Amnistía Internacional más cercano a ti. Así formarás parte de la campaña de @amnistiaespana para exigir colegios e institutos libres de acoso escolar.';
$share_tw = 'Tú puedes organizar una recogida de apoyos en colegios o institutos para exigir con @amnistiaespana #PupitresLibres de #acosoescolar. ¡Descárgate esta hoja de firmas y que empiece la recogida de firmas! ';
$share_wh = 'Tú puedes organizar una recogida de apoyos en colegios o institutos para exigir con @amnistiaespana #PupitresLibres de #acosoescolar. ¡Descárgate esta hoja de firmas y que empiece la recogida de firmas! ';

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
							<h2 class="black m-width">Hoja de firmas para el colegio</h2>
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
						<p>Movilizar y concienciar a los padres, madres y profesorado del colegio contra el acoso escolar es el primer paso para combatirlo. Además, la firma es una forma de compromiso con la causa y una forma de que podamos tener más impacto a la hora de presionar al gobierno para que ponga en marcha las medidas que exigimos para garantizar que todos los alumnos y alumnas disfruten de aulas libres de acoso escolar. <br><br/> Descarga esta hoja de firmas. Imprime varias copias y organiza una recogida de firmas en el colegio para implicar a todos y a todas y envíalas a nuestras oficinas o al grupo local de Amnistía Internacional más cercano a ti.</p>
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