<?php
include_once ("includes/config.php");
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = 'Violeta trabaja contra el acoso escolar dentro de su cole' . SEPARATOR . SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = 'Violeta forma parte del proyecto de “ayuda entre iguales en su instituto”. Ella, junto a sus compañeros y compañeras, son personas de referencia para quienes están sufriendo acoso escolar y no saben cómo gestionar el problema.';
$img_fb_url = URL_SITE . 'images/compartir-fb-caso-violeta.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-caso-violeta.jpg';
$page_url = URL_SITE . 'violeta';

$share_fb = 'Programas de ayuda entre iguales como en el que participa Violeta son fundamentales para lograr llenar los colegios de #PupitresLibres de acoso escolar. Yo ya he firmado para conseguirlo. ¡Conócelo!';
$share_tw = 'Programas de ayuda entre iguales como en el que participa Violeta son fundamentales para lograr llenar los colegios de #PupitresLibres de acoso escolar. Yo ya he firmado la campaña de @amnistiaespana para conseguirlo. ¡Conócelo!';
$share_wh = 'Programas de ayuda entre iguales como en el que participa Violeta son fundamentales para lograr llenar los colegios de #PupitresLibres de acoso escolar. Yo ya he firmado la campaña de Amnistía Internacional para conseguirlo. ¡Conócelo!';

$url_share_fb = 'http://bit.ly/2I5UND3';
$url_share_tw = 'http://bit.ly/2HZvJ0i';
$url_share_wh = 'http://bit.ly/2I1jtMW';

//Asignar el caso
$caso = 4;
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
							<h2 class="black m-width">Violeta</h2>
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
						<p class="black p-bottom-caso">Violeta trabaja contra el acoso escolar dentro de su cole.</p>
						<p class="black semibold">"Realmente los chavales no utilizan el teléfono (de denuncias) para llamar, que habría que poner otro mecanismo de denuncia, no sé… redes sociales o una cuenta de correo privada... pero no creo que el teléfono sea muy efectivo."</p>
						<div class="grid-video">
							<div class="video-responsive">
								<!--<iframe src="https://www.youtube.com/embed/9Eb3AU1zV38" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
								<div data-idyt="9Eb3AU1zV38" data-category="Vídeos" data-action="Reproducir" data-label="Caso Violeta" id="videocase"></div>
							</div>
						</div>
						<p class="black">Violeta forma parte del proyecto de “ayuda entre iguales en su instituto”. Ella, junto a sus compañeros y compañeras, son personas de referencia para quienes están sufriendo acoso escolar y no saben cómo gestionar el problema. Ella tiene claro que es más fácil para un compañero o compañera hablar con ella que con el profesorado. Porque ella vive en la misma realidad y no lo ve como “una cosa de niños”. Violeta sí que se imagina un colegio sin acoso escolar. Sería un lugar en el que todo el mundo se tratase con respeto. <br><br/>

						Amnistía Internacional con su campaña <span>#PupitresLibres</span> de acoso escolar trabaja para que haya más jóvenes como Violeta en los colegios e institutos. <br><br/>

						Firma para exigir al gobierno que impulse el proyecto de ayuda entre iguales en todas las escuelas
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
