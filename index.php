<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = SITE_DESCRIPTION;
$img_fb_url = URL_SITE . 'images/social/compartir-fb-generico.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-generico.jpg';
$page_url = URL_SITE;

$share_fb = 'Yo ya he firmado para llenar todos los colegios de #PupitresLibres de acoso escolar.';
$share_tw = 'Una recogida de firmas de @amnistiaespana bien necesaria para conseguir #PupitresLibres de acoso escolar. ¡Me ha encantado!';
$share_wh = 'Yo ya he firmado para lograr que todos los colegios se llenen de #PupitresLibres de acoso escolar. ¡Súmate tú también!';

//Asignar el caso
$caso = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>	
<?php include_once ("includes/head.php"); ?>
</head>

<body class="index">
<div class="KW_progressContainer">
	<div class="KW_progressBar"></div>
</div>
<?php include_once ("includes/header.php"); ?>
	<main>
		<!--Modulo cabecera-->
		<section class="modulo-home">
			<img src="<?php echo URL_SITE; ?>images/cabecera_mobile_300.jpg" alt="<?php echo $site_title;?>">
			<div class="modulo-home-inside grid-container-big grid">
				<div class="cont-formulario">
<?php include_once ("includes/firma-form.php"); ?>
				</div><!--.cont-formulario-->
			</div><!--.modulo-home-inside-->
		</section><!--.modulo-home-->

		<!--Modulo texto-->
		<section class="modulo-texto-home bcolor-yellow-section text-center">
			<div class="grid">
				<p class="grid-container-small p-big black">Miles de niños, niñas y adolescentes en España sufren acoso escolar. Un problema invisible que les impide vivir su infancia como debe ser. 
					<br><br/>
					Ir al cole con una sonrisa y no sufrir acoso escolar es su derecho y tú eres parte de la solución: firma para exigir al gobierno un sistema de denuncias que los y las adolescentes utilicen de verdad, y que alumnos, alumnas y profesorado sean formados para prevenir e intervenir ante casos de acoso escolar.
				<br><br/>
				Contigo podemos conseguir coles libres de acoso escolar y para ello eres importante.
				</p>
			</div>
		</section>

		<!--Modulo testimonios-->
		<section class="modulo-testimonios-home bcolor-green-section">
			<div class="grid">
				<div class="grid-container-small text-center">
					<h2 class="white">4 Historias de personas valientes que han luchado contra el acoso escolar</h2>
					<p class="p-big white">Eme ha sufrido acoso escolar durante muchos años, como Juan el hijo de Carmen. José Luis como profesor y Violeta como mediadora han visto como muchos niños y niñas venían acosados. Nunca se han callado y nos han contado qué han hecho para acabar con ello. <br><br/>
					Saben que existe una solución y que si nos unimos, podemos conseguirlo.
					</p>
				</div>
				<div class="owl-carousel grid-container-big">
					<!--Testimonio-1-->
					<div class="item testimonios-container">
						  <img src="<?php echo URL_SITE; ?>images/carmen.jpg" class="imagen-testimonio" alt="Caso Carmen" style="width:100%">
						  <div class="testimonios-container-info">
						  	<h3 class="white text-center">Carmen</h3>
						  	<p class="white text-center">Una madre que no se quedó de brazos cruzados</p>
						  	<a href="<?php echo URL_SITE; ?>carmen" class="bcolor-yellow black text-center">Ver su historia</a>
						  </div>
					</div>

					<!--Testimonio-2-->
					<div class="item testimonios-container">
					  <img src="<?php echo URL_SITE; ?>images/eme.jpg" class="imagen-testimonio" alt="Caso Eme" style="width:100%">
					  <div class="testimonios-container-info">
					  	<h3 class="white text-center">Eme</h3>
					  	<p class="white text-center">Sufrió acoso escolar durante 4 años</p>
					  	<a href="<?php echo URL_SITE; ?>eme" class="bcolor-yellow black text-center">Ver su historia</a>
					  </div>
					</div>

					<!--Testimonio-3-->
					<div class="item testimonios-container">
					  <img src="<?php echo URL_SITE; ?>images/joseluis.jpg" class="imagen-testimonio" alt="Caso José Luis" style="width:100%">
					  <div class="testimonios-container-info">
					  	<h3 class="white text-center">José Luis</h3>
					  	<p class="white text-center">Un profesor frente al acoso escolar</p>
					  	<a href="<?php echo URL_SITE; ?>joseluis" class="bcolor-yellow black text-center">Ver su historia</a>
					  </div>
					</div>

					<!--Testimonio-4-->
					<div class="item testimonios-container">
					  <img src="<?php echo URL_SITE; ?>images/violeta.jpg" class="imagen-testimonio" alt="Caso Violeta" style="width:100%">
					  <div class="testimonios-container-info">
					  	<h3 class="white text-center">Violeta</h3>
					  	<p class="white text-center">Trabaja contra el acoso escolar dentro de su cole</p>
					  	<a href="<?php echo URL_SITE; ?>violeta" class="bcolor-yellow black text-center">Ver su historia</a>
					  </div>
					</div>

				</div>
			</div>
		</section>

		<!--Modulo Broncano-->
		<section class="modulo-broncano-home center">
			<div class="grid-container-small grid">
				<h2 class="white">¿Qué es la ayuda entre iguales?</h2>
				<p class="p-big white">El presentador David Broncano ha querido saber qué es la ayuda entre iguales y ha entrevistado a varios chicos y chicas que forman parte de esta iniciativa para prevenir y combatir el acoso escolar, en el colegio IES Miguel Catalán de Coslada, en Madrid. Porque él también sabe que es posible tener pupitres libres de acoso escolar en los colegios.</p>
				<a class="btn-modulo bcolor-yellow black" href="<?php echo URL_SITE; ?>broncano">Ver entrevista</a>
			</div>
		</section>

		<!--Modulo propuestas-->
		<section class="modulo-propuestas-home bcolor-white-section text-center">
			<div class="grid-container-medium grid">
				<h2>Lo que proponemos</h2>
				<p class="p-big black">El acoso escolar tiene solución si se ponen en marcha acciones concretas y desde Amnistía Internacional, vamos a exigir al gobierno que se tomen el problema en serio dedicándole los recursos humanos y económicos necesarios. <br><br/>
				No es una cosa de críos: los adultos tenemos que actuar para garantizar a los/as menores espacios libres de acoso escolar.
				<div class="container-propuestas flex">
					<div class="container-propuestas-col">
						<img src="<?php echo URL_SITE; ?>images/propuesta-1.jpg" alt="sistema de denuncias">
						<h3>Sistema de <br> denuncias</h3>
						<p class="p-small black">Rápido, eficaz y hecho a medida de niños, niñas y adolescentes, para que se sientan escuchados, seguros y protegidos.</p>
					</div>

					<div class="container-propuestas-col">
						<img src="<?php echo URL_SITE; ?>images/propuesta-3.jpg" alt="formación del profesorado">
						<h3>Formación del<br>profesorado</h3>
						<p class="p-small black">Para que sepan detectar e intervenir en los casos de acoso escolar en las aulas.</p>
					</div>

					<div class="container-propuestas-col">
						<img src="<?php echo URL_SITE; ?>images/propuesta-2.jpg" alt="ayuda entre iguales">
						<h3>Ayuda entre<br>iguales</h3>
						<p class="p-small black">Para que sepan detectar e intervenir en los casos de acoso escolar en las aulas.</p>
					</div>

					<div class="container-propuestas-col">
						<img src="<?php echo URL_SITE; ?>images/propuesta-4.jpg" alt="reconocerlo en casa">
						<h3>Reconocerlo<br>en casa</h3>
						<p class="p-small black">Ayudar a padres y madres a reconocer cuándo sus hijos sufren acoso y que sepan cómo actuar.</p>
					</div>

					<div class="container-propuestas-col">
						<img src="<?php echo URL_SITE; ?>images/propuesta-5.jpg" alt="datos reales">
						<h3>Datos<br>reales</h3>
						<p class="p-small black">Que se recojan de manera adecuada datos para conocer la realidad del acoso escolar en España.</p>
					</div>
				</div>
				<p class="p-big black">Si quieres saber más sobre las propuestas de Amnistía Internacional descarga gratis el informe completo.</p>
				<a href="<?php echo URL_SITE; ?>descargas-informe" class="btn-propuestas-descarga bcolor-yellow black">Descargar</a>
			</div>
		</section>

		<!--Modulo acciones-->
		<section class="modulo-acciones-home text-center">
			<div class="grid-container-medium grid">
				<h2 class="white">¿Qué puedes hacer tú además de firmar?</h2>
				<p class="p-big white">Tú eres parte de la solución. Si quieres que tu colegio sea un lugar libre de acoso escolar, puedes descargarte nuestros materiales didácticos y poner tu granito de arena en la lucha contra el acoso escolar.</p>
				<div class="container-acciones">
					<a class="bcolor-yellow black" href="<?php echo URL_SITE; ?>descargas-decalogo-deteccion">Cómo detectar el <br> acoso escolar</a>
					<a class="bcolor-yellow black" href="<?php echo URL_SITE; ?>descargas-cartel">Aulas libres de <br> acoso escolar</a>
					<a class="bcolor-yellow black" href="<?php echo URL_SITE; ?>descargas-hoja-de-firmas">Multiplica la campaña <br> en tu cole</a>
				</div>
				<p class="p-big white">Para septiembre</p>
				<div class="container-acciones-2">
					<a class="disabled black">Calendario para detectar <br>el acoso escolar</a>
					<a class="disabled black">Implementa la ayuda<br>entre iguales en tu cole</a>
				</div>
			</div>
		</section>

		<!--Modulo apoyo-->
		<section class="modulo-apoyo-home bcolor-grey-section">
			<div class="grid-container-medium grid">
				<h2 class="black">Muestra tu apoyo</h2>
				<div class="container-apoyo">
					<div class="left">
						<p class="p-small black">Haz un donativo para ayudarnos a seguir con nuestro trabajo de denuncia y te enviamos a casa esta pulsera: la podrás regalar a los niños, niñas y adolescentes de tu entorno para concienciarles a que colaboren a crear un cole libre de acoso escolar.</p>
						<a target="_blank" href="<?php echo URL_DONA; ?>" class="bcolor-yellow black" >Haz un donativo</a>
					</div>
					<img src="<?php echo URL_SITE; ?>images/pulseras-apoyo.png" alt="pulseras de apoyo:coles libres de acoso escolar">
				</div>
			</div>
		</section>

		<!--Modulo socio-->
		<section class="modulo-socio-home bcolor-white-section text-center">
			<div class="grid-container-small grid">
				<h2 class="black">Hazte socio/a y únete a nuestra familia</h2>
				<p class="black p-big">Sólo con el apoyo de personas como tú podemos trabajar con total independencia y exigir al gobierno español que tome medidas urgentes para conseguir un sistema educativo libre de acoso escolar.</p>
				<p class="black p-big">Contigo a nuestro lado, podemos conseguir el mundo que queremos: un mundo en el que los niños y niñas disfrutan de su infancia y desarrollan al máximo su potencial y confianza en el futuro.
				</p>
				<a target="_blank" href="<?php echo URL_SOCIO; ?>" class="white bcolor-green" >Hazte socio/a</a>
			</div>
		</section>	
	</main>

<?php include_once ("includes/footer.php"); ?>

</body>
</html>