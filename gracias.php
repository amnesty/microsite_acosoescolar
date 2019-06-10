<?php
include_once ("includes/config.php");
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = '¡Muchas gracias por firmar y defender el derechos de los niños y niñas a disfrutar de un mundo libre de acoso escolar!';
$img_fb_url = URL_SITE . 'images/social/compartir-fb-generico.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-generico.jpg';
$page_url = URL_SITE . 'gracias';

$share_fb = 'Yo ya he firmado para llenar todos los colegios de #PupitresLibres de acoso escolar.';
$share_tw = 'Una recogida de firmas de @amnistiaespana bien necesaria para conseguir #PupitresLibres de acoso escolar. ¡Me ha encantado!';
$share_wh = 'Yo ya he firmado para lograr que todos los colegios se llenen de #PupitresLibres de acoso escolar. ¡Súmate tú también!';

$url_share_fb = 'http://bit.ly/2I3Fo5Z';
$url_share_tw = 'http://bit.ly/2I4WArH';
$url_share_wh = 'http://bit.ly/2I1jn82';

$caso = $_GET['caso'];
if($caso) {
    $segmentacion_origen = "?origen=pupitres_libres&caso=".$casos[$caso][2];
}else {
    $segmentacion_origen = "?origen=pupitres_libres";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include_once ("includes/head.php"); ?>
</head>
<body class="gracias gracias1">
<!--Header-->
<?php include_once ("includes/header.php"); ?>

<?php
    // Pixels de retargetting de FB, Google, Twitter,...
    //include_once("includes/pixelretgracias.php");
?>
<main>
	<!--Modulo gracias-->
	<section class="modulo-gracias bcolor-grey-section text-center">
		<div class="grid-container-small grid">
			<h2 class="black">¡Muchas gracias!</h2>
			<p class="p-big black">Por firmar y defender el derechos de los niños y niñas a disfrutar de un mundo libre de acoso escolar.</p>
		</div>
	</section>

	<!--Modulo compartir-->
	<section class="modulo-compartir bcolor-white-section text-center">
		<div class="grid-container-medium modulo-compartir-inside grid">
			<h2 class="black">Comparte</h2>
			<img src="<?php echo URL_SITE; ?>images/icono-compartir.png">
			<p class="p-small black">Ahora puedes llegar mucho más lejos y multiplicar tu acción: comparte esta petición en tus redes sociales o en tus grupos de Whatsapp para que más personas de tu entorno firmen la campaña. <br><br/> Cuántos más seamos más fuerza tendremos para llenar los colegios de pupitres libres de acoso escolar.</p>
			<div class="container-botones-compartir">
				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp FB" data-e_l="<?php echo $casos[$caso][2]?> comp FB" data-shareurl="<?php echo $url_share_fb; ?>" class="white bcolor-green-section facebook facebook-share send-piwik-event" href="#">Comparte en facebook</a>

				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp TW" data-e_l="<?php echo $casos[$caso][2]?> comp TW" data-shareurl="<?php echo urlencode($url_share_tw); ?>" data-texto="<?php echo $share_tw; ?>" class="white bcolor-green-section twitter twitter-share send-piwik-event" href="#">Comparte en twitter</a>

<?php
if($isMobile) {
?>
				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp WH" data-e_l="<?php echo $casos[$caso][2]?> comp WH" data-enlace="<?php echo $page_url; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode($share_wh . ' ' . $url_share_wh);?>" class="white bcolor-green-section whatsapp send-piwik-event">Comparte en Whatsapp</a>
<?php
}
?>
			</div>
			<p class="p-small black">¡No te vayas todavía! Aún puedes hacer mucho más por los niños y niñas que sufren acoso escolar.</p>
			<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="gracias boton continuar" data-e_l="gracias boton continuar" class="bcolor-yellow black continuar-btn send-piwik-event" href="<?php echo URL_SITE; ?>paso-g-2">Continuar</a>
		</div>
	</section>

</main>

<!-- FOOTER -->
<footer class="bcolor-green-section text-center clear">
  <div class="grid">
    <p class="white">© 2019 AMNISTÍA INTERNACIONAL ESPAÑA</p>
    <p class="white">Más información sobre el uso de los datos en <a target="_blank" href="https://www.es.amnesty.org/politica-de-privacidad" class="underline" >https://www.es.amnesty.org/politica-de-privacidad</a></p>
  </div>
</footer>
<!--Boton Firma-->
<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $first_string_ga_event;?> boton footer firma" data-e_l="<?php echo $first_string_ga_event;?> boton footer firma" href="#firma" class="btn-fijo-firma boton black bcolor-yellow send-piwik-event">Firma</a>
<!--Boton Descarga-->
<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $first_string_ga_event;?> boton footer descarga" data-e_l="<?php echo $first_string_ga_event;?> boton footer descarga" href="#descarga" class="btn-fijo-descarga boton black bcolor-yellow send-piwik-event">Descarga</a>


<?php #include_once ("includes/footer.php"); ?>


    <!-- Piwik -->
    <script type="text/javascript">
        var nuevoFirmante = <?php echo $_GET['s']; ?>;
        var casoPiwik = <?php echo $_GET['caso']; ?>;
        //console.log('nuevoFirmante: '+nuevoFirmante);
        var _paq = _paq || [];
        _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
        _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
        _paq.push(["setDomains", ["*.es.amnesty.org",]]);


        // definimos custom events para cada caso
        /*
        if (casoPiwik == 1) {
            _paq.push(['setCustomDimension', 4, 'Antonio']);
        } else if (casoPiwik == 2) {
            _paq.push(['setCustomDimension', 4, 'Rosa']);
        } else if (casoPiwik == 3) {
            _paq.push(['setCustomDimension', 4, 'Jaime']);
        } else if (casoPiwik == 4) {
            _paq.push(['setCustomDimension', 4, 'Soledad']);
        } else {
            _paq.push(['setCustomDimension', 4, 'general']);
        }
        */

        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);

        // marcamos los goals, tanto geneŕicos como especiales de la micro
        _paq.push(["trackGoal", 6]);
        _paq.push(["trackGoal", 33]);
        if (nuevoFirmante == 2) {
            _paq.push(["trackGoal", 8]);
        }

        // Lanzamos eventos para cada caso
        /*
        if (casoPiwik == 1) {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias Antonio']);
        } else if (casoPiwik == 2) {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias Rosa']);
        } else if (casoPiwik == 3) {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias Jaime']);
        } else if (casoPiwik == 4) {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias Soledad']);
        } else {
            _paq.push(['trackEvent', 'FormJusticia', 'Gracias general']);
        }
        */

        (function() {
            var u="//estadisticas.es.amnesty.org/piwik/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src="//estadisticas.es.amnesty.org/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->

</body>
</html>
