<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = 'Descargas: Cartel Aulas Libres' . SEPARATOR . SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = 'Todas las aulas deberían ser un espacios libres de acoso escolar  para los alumnos y alumnas. Señaliza tu aula como “aula libre de acoso escolar” con este cartel.';
$img_fb_url = URL_SITE . 'images/social/compartir-fb-descargas.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-descargas.jpg';
$page_url = URL_SITE . 'descargas-cartel';

$share_fb = 'Descárgate este cartel para señalar que tu aula está libre de bullying. ¡Logremos #PupitresLibres de acoso escolar!.';
$share_tw = '¿Aulas libres de #acosoescolar? ¡Claro que sí! Señalízalas con este cartel descargable y haz que la campaña #PupitresLibres de @amnistiaespana llegue a todos los colegios e institutos.';
$share_wh = '¿Aulas libres de #acosoescolar? ¡Claro que sí! Señalízalas con este cartel descargable y haz que la campaña #PupitresLibres de @amnistiaespana llegue a todos los colegios e institutos.';

$url_share_fb = $page_url . TRACK_FB_UTM;
$url_share_tw = $page_url . TRACK_TW_UTM;
$url_share_wh = $page_url . TRACK_WH_UTM;

//Asignar el caso
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
							<h2 class="black m-width">Cartel aulas libres de acoso escolar</h2>
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
						<p class="black">Todas las aulas deberían ser un espacios libres de acoso escolar  para los alumnos y alumnas. Señaliza tu aula como “aula libre de acoso escolar” con este cartel. <br><br/>Descárgate gratis el cartel y colócalo en un lugar visible para que alumnos y alumnas sepan que en su aula no hay espacio para el acoso.</p>
					</div>
					<img src="<?php echo URL_SITE; ?>images/carteles-interior.png" alt="cartel #PupitresLibres de acoso escolar">
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