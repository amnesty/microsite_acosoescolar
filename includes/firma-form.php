<?php
/*
[VERSIÓN 2017]

Se cambió: where accion = 'pupitres_libres' por: where accion LIKE 'pupitres_libres%'
porque tendremos la segementación por casos por quién firman
*/?>

		<link rel="stylesheet" href="<?php echo URL_SITE; ?>js/magnific-popup/dist/magnific-popup.css">
		<script type="text/javascript" src="<?php echo URL_SITE; ?>js/magnific-popup/dist/jquery.magnific-popup.js"></script>
		<script type="text/javascript" src="<?php echo URL_SITE; ?>js/politica.js"></script>


<?php
// Origenes
$origen='';
if ( isset($_GET['utm_content']) || isset($_GET['pk_campaign']) ){
  $origen = (isset($_GET['utm_content'])?$_GET['utm_content']:$_GET['pk_campaign']);
}
else {
  $origen = "web";
}
$campaign='';
if ( isset($_GET['utm_campaign']) || isset($_GET['pk_kwd']) ){
  $campaign = (isset($_GET['pk_kwd'])?$_GET['pk_kwd']:$_GET['utm_campaign']);
}
?>


<?php
$num_firmas_total = NUM_FIRMAS_TOTAL; // config.php -> Se puede modificar bajo demanda. Establecido a 5000
$num_firmas = ""; // Guardar en esta variable "$num_firmas" el nº de firmas actualziado que se lleva para esta campaña.
$num_firmas_fb = "196";
$num_firmas_bd_bak = "1951"; // Numero de firmas de la tabla datos_firmas_backup (83252) + datos_firmas (71331). Pte incorporar a tabla firmas. + firmas recogidas en Facebook (2570+474+1830+733)

if($tabla == 'firmas')
  $num_firmas_bd_bak = 0;

// contar de la tabla
include_once('config.php');

include_once('connect.php');

$query =  "SELECT COUNT(*) AS contador FROM $tabla where accion LIKE 'pupitres_libres%'";
$result = mysqli_query( $id_connect, $query );
$obj = mysqli_fetch_object($result);
$num_firmas = $obj->contador;
mysqli_close($id_connect);

//Calculo del porcentajo de firmas que llevamos:
$progress_percent = (($num_firmas_bd_bak+$num_firmas+$num_firmas_fb) / $num_firmas_total)*100;
?>

  <!--Formulario Firma INICIO-->
  <div class="cont-formulario-int">
    <p>Firma para exigir al gobierno y a las comunidades autónomas que creen un sistema de denuncias que los y las adolescentes utilicen de verdad, y que alumnos, alumnas y profesorado sean formados para prevenir e intervenir ante casos de acoso escolar.</p>

    <div class="progress-wrap-firmas progress-firmas" data-progress-percent="<?php echo $progress_percent;?>">
      <p>Llevamos <span><?php echo number_format($num_firmas_bd_bak+$num_firmas+$num_firmas_fb, 0, ',', '.');?></span> firmas</p>
      <div class="progress-bar-firmas progress-firmas"></div>
    </div>

    <form style="display: visible" id="formFirma" name="formFirma" class="formulario-firma" action="<?php echo URL_SITE; ?>includes/enviar_form.php" method="post" onsubmit="return validarFormFirma(document.forms['formFirma']);">

      <div id="firma" class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Email*">
        <p class="error email">No has introducido este dato.</p>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre*">
        <p class="error nombre">No has introducido este dato</p>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos*">
        <p class="error apellidos ">No has introducido este dato</p>
      </div>

      <div class="form-group">
        <input class="form-control" type="tel" placeholder="Teléfono (solo España)" name="telefono" maxlength="9" onkeypress="javascript:return soloNumeros(event);">
        <p class="error telefono">No has introducido este dato</p>
      </div>

      <div class="form-group">
        <select class="form-control" name="pais" onchange="ocultarTel(this.value);">
          <option value="0">País de residencia *</option>
          <option value="192" selected="selected">España</option>
          <option value="202">Albania</option>
          <option value="180">Alemania</option>
          <option value="205">Andorra</option>
          <option value="363">Arabia Saudí</option>
          <option value="203">Argelia</option>
          <option value="210">Argentina</option>
          <option value="211">Armenia</option>
          <option value="310">ARY Macedonia</option>
          <option value="213">Australia</option>
          <option value="173">Austria</option>
          <option value="220">Bélgica</option>
          <option value="221">Belice</option>
          <option value="219">Bielorrusia</option>
          <option value="225">Bolivia</option>
          <option value="226">Bosnia y Herzegovina</option>
          <option value="229">Brasil</option>
          <option value="232">Bulgaria</option>
          <option value="174">Canadá</option>
          <option value="241">Chile</option>
          <option value="242">China</option>
          <option value="253">Chipre</option>
          <option value="245">Colombia</option>
          <option value="249">Costa Rica</option>
          <option value="1222">Croacia</option>
          <option value="252">Cuba</option>
          <option value="176">Dinamarca</option>
          <option value="258">Ecuador</option>
          <option value="259">Egipto</option>
          <option value="260">El Salvador</option>
          <option value="368">Eslovaquia</option>
          <option value="369">Eslovenia</option>
          <option value="198">Estados Unidos</option>
          <option value="177">Estonia</option>
          <option value="350">Filipinas</option>
          <option value="178">Finlandia</option>
          <option value="179">Francia</option>
          <option value="272">Georgia</option>
          <option value="274">Gibraltar</option>
          <option value="276">Granada</option>
          <option value="181">Grecia</option>
          <option value="277">Guadalupe</option>
          <option value="279">Guatemala</option>
          <option value="267">Guayana Francesa</option>
          <option value="261">Guinea Ecuatorial</option>
          <option value="282">Guyana</option>
          <option value="283">Haití</option>
          <option value="285">Honduras</option>
          <option value="172">Hong Kong</option>
          <option value="286">Hungría</option>
          <option value="288">India</option>
          <option value="292">Irlanda</option>
          <option value="287">Islandia</option>
          <option value="182">Israel</option>
          <option value="183">Italia</option>
          <option value="293">Jamaica</option>
          <option value="294">Japón</option>
          <option value="295">Jordania</option>
          <option value="303">Letonia</option>
          <option value="304">Líbano</option>
          <option value="307">Libia</option>
          <option value="184">Liechtenstein</option>
          <option value="308">Lituania</option>
          <option value="185">Luxemburgo</option>

          <option value="317">Malta</option>
          <option value="327">Marruecos</option>
          <option value="318">Martinica</option>
          <option value="319">Mauritania</option>
          <option value="322">México</option>
          <option value="324">Moldavia</option>
          <option value="186">Mónaco</option>
          <option value="336">Nicaragua</option>
          <option value="338">Nigeria</option>
          <option value="188">Noruega</option>
          <option value="335">Nueva Zelanda</option>
          <option value="187">Países Bajos</option>
          <option value="346">Panamá</option>
          <option value="348">Paraguay</option>
          <option value="349">Perú</option>
          <option value="189">Polonia</option>
          <option value="190">Portugal</option>
          <option value="352">Puerto Rico</option>
          <option value="197">Reino Unido</option>
          <option value="175">República Checa</option>
          <option value="256">República Dominicana</option>
          <option value="355">Rumania</option>
          <option value="191">Rusia</option>
          <option value="361">San Marino</option>
          <option value="359">San Vicente y las Granadinas</option>
          <option value="375">Santa Helena</option>
          <option value="358">Santa Lucía</option>
          <option value="362">Santo Tomé y Príncipe</option>
          <option value="1469">Serbia y Montenegro</option>
          <option value="381">Siria</option>
          <option value="193">Suecia</option>
          <option value="194">Suiza</option>
          <option value="390">Túnez</option>
          <option value="195">Turquía</option>
          <option value="395">Ucrania</option>
          <option value="397">Uruguay</option>
          <option value="400">Venezuela</option>
          <option value="1148">Otros países</option>
        </select>
        <p class="error pais">No has introducido este dato.</p>
      </div>

			<div id="check_privacidad" class="form-check" style="display: none;">
				<label class="form-check-label">
					<input type="checkbox" id="check_reminder" checked="true" class="form-check-input" name="politica">
					<span>Deseo más información de Amnistía Internacional.</span>
				</label>
			</div>
      <div class="form-check">
        <label class="form-check-label">
          <span>Al participar aceptas la <a data-iframe="true" class="open-website" data-src="https://www.es.amnesty.org/politica-de-privacidad" title="Política de privacidad">Política de Privacidad</a></span>
        </label>
      </div>
			<!-- POPUP Politica-->
			<div id="test-popup" class="modal-dialog mfp-hide white-popup mfp-hide" role="document">
					<div class="modal-content">
						<div class="modal-body form-check">
							<p>Si quieres recibir otras acciones como esta e información adicional de Amnistía Internacional para cambiar el mundo, haz click en el botón verde.</p>
						</div>
						<div class="modal-footer">
									<label class="ai-accion-firma__check bigger form-check-label">
											<input type="checkbox" id="ai-accion-firma__masinfo_reminder" class="form-check-input" style="display:none"/>
											<button type="checkbox" id="ai-accion-firma__masinfo_button" class="form-check-input">Sí quiero</button>
											<!--<span>Quiero recibir acciones para cambiar el mundo</span>-->
									</label>
						</div>
					</div>
			</div>
			<!--END POPUP Politica -->
      <div class="box-check">
        <button id="btnEnviar" type="button" class="btn-formulario boton bcolor-yellow black"  onclick="validarFormFirma(document.forms['formFirma']);">Firma</button>
        <button id="btnEnviando" type="button" class="btn-formulario boton" style="display:none;">Enviando...</button>
      </div>
      <input type="hidden" name="guardar_form" value="1">
      <input type="hidden" name="origen" value="<?php echo $origen; ?>">
      <input type="hidden" name="campanya" value="<?php echo $campaign; ?>">
      <input type="hidden" name="caso" value="<?php echo $caso; ?>">
    </form>
  </div><!--.cont-formulario int-->
  <!--.Formulario Firma FIN-->
