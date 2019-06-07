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



<?php include_once ("includes/cookies.php"); ?>

<?php //include ("includes/pixelret.php"); ?>

<!-- Piwik -->
<script type="text/javascript">
  var _paq3 = _paq3 || [];
  _paq3.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq3.push(["setCookieDomain", "*.es.amnesty.org"]);
  _paq3.push(["setDomains", ["*.es.amnesty.org",]]);
  _paq3.push(['trackPageView']);
  _paq3.push(['trackVisibleContentImpressions']);
  _paq3.push(['enableLinkTracking']);
  _paq3.push(['MediaAnalytics::removePlayer', 'youtube']);
  (function() {
    var u="//estadisticas.es.amnesty.org/piwik/";
    _paq3.push(['setTrackerUrl', u+'piwik.php']);
    _paq3.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//estadisticas.es.amnesty.org/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
