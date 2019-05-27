<footer class="bcolor-green-section text-center clear">
  <div class="grid">
    <p class="white">2019 Amnistía Internacional</p>
    <p class="white">Más información sobre el uso de los datos en <a target="_blank" href="https://www.es.amnesty.org/politica-de-privacidad" class="underline" >https://www.es.amnesty.org/politica-de-privacidad</a></p>
  </div>
</footer>
  <!--Boton Firma-->

<?php
if (strpos( $_SERVER['PHP_SELF'], 'gracias')) {
?>  
  <a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="gracias boton footer firma" data-e_l="gracias boton footer firma" href="#firma" class="btn-fijo-firma boton black bcolor-yellow send-piwik-event">Firma</a>
<?php
} else {
?>
  <a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?=$casos[$caso][2]?> boton footer firma" data-e_l="<?=$casos[$caso][2]?> boton footer firma" href="#firma" class="btn-fijo-firma boton black bcolor-yellow send-piwik-event">Firma</a>
<?php
} 
?>

<?php include_once ("includes/cookies.php"); ?>

<?php //include ("includes/pixelret.php"); ?>

<?php /*
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
  _paq.push(["setDomains", ["*.es.amnesty.org",]]);
  _paq.push(['trackPageView']);
  _paq.push(['trackVisibleContentImpressions']);
  _paq.push(['enableLinkTracking']);
  _paq.push(['MediaAnalytics::removePlayer', 'youtube']);
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