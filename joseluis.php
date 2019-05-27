<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = 'José Luis: un profesor frente al acoso escolar' . SEPARATOR . SITE_TITLE .SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = SITE_DESCRIPTION;
$img_fb_url = URL_SITE . 'images/social/compartir-fb-caso-joseluis.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-caso-joseluis.jpg';
$page_url = URL_SITE . 'joseluis';

$share_fb = 'Profesores como José Luis son los que necesitamos para lograr #PupitresLibres de acoso escolar. Yo ya he firmado la campaña para lograrlo.';
$share_tw = 'Profesores como José Luis son los que necesitamos para lograr #PupitresLibres de acoso escolar. Yo ya he firmado la campaña de @amnistiaespana para lograrlo.';
$share_wh = 'Profesores como José Luis son los que necesitamos para lograr #PupitresLibres de acoso escolar. Yo ya he firmado la campaña de Amnistía Internacional para lograrlo.';

//Asignar el caso
$caso = 3;
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
							<h2 class="black">José Luis</h2>
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
						<p class="black p-bottom-caso">La historia de José Luis: un profesor frente al acoso escolar.</p>
						<p class="black semibold">"La formación que tenemos el profesorado es desigual, deberíamos recibir más. Porque a veces no es tan sencillo. Te lo tiene que contar alguien y al ser posible, que alguien te lo cuente antes que la propia víctima, porque cuando te lo cuenta la víctima a lo mejor la cosa ya está muy avanzada, y ahí ya hay herida."</p>

						<div class="grid-video">
							<div class="video-responsive">
								<iframe src="https://www.youtube.com/embed/9Eb3AU1zV38" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
						
						<p class="black">José Luis es profesor de alemán en un instituto madrileño. Ha tenido que gestionar varios casos de acoso escolar, pero considera que el profesorado debería recibir mucha más formación para poder atajar el problema con rapidez. Y está convencido de una cosa: si en su instituto no hubiera un compromiso claro para luchar contra el acoso escolar, muchos más chavales y chavalas lo sufrirían.
  						<br><br/>

						Amnistía Internacional con su campaña <span>#PupitresLibres</span> de acoso escolar trabaja para que los y las docentes tengan más formación para prevenir o actuar en casos de acoso escolar.<br><br/>

						Firma para exigir al gobierno que tome medidas para impulsar la formación del profesorado sobre como actuar frente al acoso escolar.
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