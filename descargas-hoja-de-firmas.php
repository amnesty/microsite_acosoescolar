<?php
include_once ("includes/config.php");
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = 'Descargas: Hoja de firmas' . SEPARATOR .SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = 'La firma es una forma de compromiso y de que podamos tener más impacto a la hora de presionar al gobierno para que ponga en marcha las medidas que exigimos para garantizar que todos los alumnos y alumnas disfruten de aulas libres de acoso escolar.';
$img_fb_url = URL_SITE . 'images/social/compartir-fb-descargas.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-descargas.jpg';
$page_url = URL_SITE . 'descargas-hoja-de-firmas';
//Asignar el caso

$share_fb = 'Descárgate esta hoja y recoge firmas para lograr #PupitresLibres de acoso escolar en tu colegio o instituto.';
$share_tw = 'Tú puedes organizar una recogida de apoyos en colegios o institutos para exigir con @amnistiaespana #PupitresLibres de #acosoescolar. ¡Descárgate esta hoja de firmas y que empiece la recogida de firmas!';
$share_wh = 'Tú puedes organizar una recogida de apoyos en colegios o institutos para exigir con @amnistiaespana #PupitresLibres de #acosoescolar. ¡Descárgate esta hoja de firmas y que empiece la recogida de firmas!';

$url_share_fb = 'http://bit.ly/2IlbtpU';
$url_share_tw = 'http://bit.ly/2IlbwSC';
$url_share_wh = 'http://bit.ly/2HYadZS';

$caso = 10;
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
							<h1 class="black m-width">Hoja de firmas para el colegio</h1>
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
						<img src="<?php echo URL_SITE; ?>images/hoja-firmas-interior.png" alt="hoja de firmas contra el acoso escolar" class="hoja-firmas-interior">
					</div><!--.columna-contenido-inside-->	
				</div><!--.columna-contenido-->
				<div width="100%" height="100%" class="columna-formulario bcolor-white-section">
					<div style="height:100%" class="cont-formulario-right">
						<?php #include_once ("includes/descarga-form.php"); ?>
						<p>Rellena el formulario para recibirlo vía email</p>
						<a name="descarga" id="descarga"></a>
 						<iframe style="height:100%; min-height: 520px;" src="https://crm.es.amnesty.org/descargas-hoja-de-firmas"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<?php include_once ("includes/footer.php"); ?>

</body>
</html>
