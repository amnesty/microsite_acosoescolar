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

$url_share_fb = $page_url . TRACK_FB_UTM;
$url_share_tw = $page_url . TRACK_TW_UTM;
$url_share_wh = $page_url . TRACK_WH_UTM;

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
				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp FB" data-e_l="<?php echo $casos[$caso][2]?> comp FB" data-shareurl="<?php echo URL_SITE . TRACK_FB_UTM; ?>" class="white bcolor-green-section facebook facebook-share send-piwik-event" href="#">Comparte en facebook</a>

				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp TW" data-e_l="<?php echo $casos[$caso][2]?> comp TW" data-shareurl="<?php echo urlencode(URL_SITE . TRACK_TW_UTM); ?>" data-texto="<?php echo $share_tw; ?>" class="white bcolor-green-section twitter twitter-share send-piwik-event" href="#">Comparte en twitter</a>

<?php
if($isMobile) {
?>					
				<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp WH" data-e_l="<?php echo $casos[$caso][2]?> comp WH" data-enlace="<?php echo $page_url; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode($share_wh . ' ' . URL_SITE.TRACK_WH_UTM);?>" class="white bcolor-green-section whatsapp send-piwik-event">Comparte en Whatsapp</a>
<?php
}
?>	
			</div>
			<p class="p-small black">¡No te vayas todavía! Aún puedes hacer mucho más por los niños y niñas que sufren acoso escolar.</p>
			<a class="bcolor-yellow black continuar-btn" href="<?php echo URL_SITE; ?>gracias-2">Continuar</a>
		</div>
	</section>

</main>

<?php include_once ("includes/footer.php"); ?>

<?php /*
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
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        // marcamos los goals, tanto geneŕicos como especiales de la micro
        _paq.push(["trackGoal", 6]);
        _paq.push(["trackGoal", 33]);
        _paq.push(['trackGoal', 45]);
        if (nuevoFirmante == 1) {
            _paq.push(["trackGoal", 57]);
        } else if (nuevoFirmante == 2) {
            _paq.push(["trackGoal", 8]);
            _paq.push(["trackGoal", 59]);
        } else {
            _paq.push(["trackGoal", 58]);
        }
        // Lanzamos eventos para cada caso
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

*/ ?>
</body>
</html>