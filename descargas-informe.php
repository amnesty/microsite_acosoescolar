<?php
include_once ("includes/config.php");
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = 'Descargas: Informe Acoso Escolar' . SEPARATOR . SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = 'Miles de casos de acoso escolar permanecen ocultos en España. Ni se registran oficialmente ni hay herramientas para que padres, madres y profesorado puedan detectarlo';
$img_fb_url = URL_SITE . 'images/social/compartir-fb-descargas.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-descargas.jpg';
$page_url = URL_SITE . 'descargas-informe';

$share_fb = 'Descárgate gratis este informe sobre bullying en España y descubre qué es #PupitresLibres de acoso escolar.';
$share_tw = 'Consigue gratis nuestro informe sobre #acosoescolar en España.';
$share_wh = 'Consigue gratis nuestro informe sobre #acosoescolar en España.';

$url_share_fb = 'http://bit.ly/2I23iyV';
$url_share_tw = 'http://bit.ly/2HXYvOU';
$url_share_wh = 'http://bit.ly/2I15IOj';

//Asignar el caso
$caso = 7;
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
							<h2 class="black m-width">Informe sobre acoso escolar</h2>
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
						<p class="black">Miles de casos de acoso escolar permanecen ocultos en España. Ni se registran oficialmente ni hay herramientas para que padres, madres y profesorado puedan detectarlo...<br><br/>El acoso escolar, además de afectar a los niños y niñas que lo sufren, destroza su autoestima, su salud, su rendimiento académico y en general, su derecho a crecer felices y sin miedo. <br><br/>En este informe encontrarás soluciones bien claras para lograr #PupitresLibres de acoso escolar e información sobre cuál es la situación del acoso en España. Y lo hacemos público para que tú también lo sepas: el acoso escolar tiene solución. <br><br/><span>Descárgate gratis el informe en un PDF</span> y entérate de lo que sucede en los colegios e institutos de tu alrededor. Solo tienes que rellenar este breve formulario.</p>
						<img src="<?php echo URL_SITE; ?>images/informe-interior.png" alt="informe sobre el acoso escolar" class="informe-interior">
					</div><!--.columna-contenido-inside-->	
				</div><!--.columna-contenido-->
				
				<div width="100%" height="100%" class="columna-formulario bcolor-white-section">
					<div style="height:100%" class="cont-formulario-right">
						<?php #include_once ("includes/descarga-form.php"); ?>
						<p>Rellena el formulario para recibirlo vía email</p>
						<a name="descarga" id="descarga"></a>
 						<iframe style="height:100%; min-height: 520px;" src="https://crm.es.amnesty.org/descargas-informe"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<?php include_once ("includes/footer.php"); ?>

</body>
</html>
