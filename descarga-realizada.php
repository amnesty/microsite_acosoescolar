<?php
include_once ("includes/config.php"); 
$site_name = SITE_NAME;
$site_title = SITE_TITLE;
$page_title = SITE_TITLE . SEPARATOR . SITE_NAME ;
$description = '¡Muchas gracias por firmar y defender el derechos de los niños y niñas a disfrutar de un mundo libre de acoso escolar!';
$img_fb_url = URL_SITE . 'images/social/compartir-fb-generico.jpg';
$img_tw_url = URL_SITE . 'images/social/compartir-tw-generico.jpg';
$page_url = URL_SITE . 'descarga-realizada';

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
<?php include_once ("includes/head.php"); ?>
<body class="gracias gracias-descarga">
<!--Header-->
<?php include_once ("includes/header.php"); ?>
<?php
    // Pixels de retargetting de FB, Google, Twitter,...
    //include("includes/pixelretgracias.php");
?>
<main>
	<!--Modulo gracias-->
	<section class="modulo-gracias bcolor-grey-section text-center">
		<div class="grid-container-small grid">
			<h2 class="black">¡Muchas gracias!</h2>
			<p class="p-big black">Te hemos enviado a tu correo electrónico el material descargable. Y gracias por defender los derechos de los niños y niñas a disfrutar de un mundo libre de acoso escolar.</p>
		</div>
	</section>
	
	<!--Modulo donativo-->
	<section class="modulo-donativo bcolor-white-section">
		<div class="grid-container-small grid container-donativo">
			<img src="<?php echo URL_SITE; ?>images/pulseras-donativo.png" alt="pulseras de apoyo: coles libres de acoso escolar">
			<div class="right">
				<p class="p-small black"><span>Haz un donativo para ayudarnos a seguir con nuestro trabajo y te enviamos a casa esta pulsera</span>: la podrás regalar a los niños, niñas y adolescentes de tu entorno para concienciarles a que colaboren a crear un cole libre de acoso escolar.</p>
				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="descarga-realizada boton dona" data-e_l="descarga-realizada boton dona" target="_blank" class="bcolor-yellow black send-piwik-event" href="<?php echo URL_DONA; ?>">Haz un donativo</a>
			</div>
		</div>
	</section>	

	<!--Modulo hazte socio-->
	<section class="modulo-hazte-socio text-center">
		<div class="grid-container-small grid">
			<p class="black"><span>Únete a la familia de Amnistía Internacional</span></p>
			<p class="black p-small">Sólo con el apoyo de personas como tú podemos trabajar con total independencia y exigir al gobierno español un sistema educativo libre de acoso escolar. <br><br/> Contigo a nuestro lado, podemos conseguir el mundo en el que los niños y niñas disfrutan de su infancia y desarrollan al máximo su potencial y confianza en el futuro.</p>
			<a target="_blank" class="white bcolor-green" href="<?php echo URL_SOCIO; ?>">Hazte socio/a</a>

			<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="descarga-realizada boton socio" data-e_l="descarga-realizada boton socio" target="_blank" class="white bcolor-green send-piwik-event" href="<?php echo URL_SOCIO; ?>">Hazte socio/a</a>

		</div>
	</section>


</main>

<?php include_once ("includes/footer.php"); ?>

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