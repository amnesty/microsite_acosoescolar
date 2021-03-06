<?php
/*
[VERSIÓN 2017]

Se añadió la segmentación por casos $segmentacion = $casos[$caso][1];
*/
echo 'hola';
if( $_POST['guardar_form'] ) {

	// Config
	include_once('config.php');
	// BD
	include_once('connect.php');
	// APIS
	include_once('api2.php');
  //include_once('experian_api.php');

	extract($_POST);

	$nombre = trim($_POST['nombre']);
	$apellidos = trim($_POST['apellidos']);
	$email = trim($_POST['email']);
	$telefono = trim($_POST['telefono']);
	$pais_id = $_POST['pais'];
	$politika = $_POST['politica'];
	$origen = $_POST['origen'];
	$campanya = $_POST['campanya'];
	$caso = $_POST['caso'];
	$segmentacion = $casos[$caso][1]; //pupitres_libres; pupitres_libres_carmen; pupitres_libres_eme; pupitres_libres_joseluis; pupitres_libres_violeta; pupitres_libres_broncano; descargas

		// IP
	$ip = $_SERVER['REMOTE_ADDR'];
	if(!$ip || $ip == '') {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}

	// User Agent
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	// Política
	if($politika == 'on') {
		$masinfo = 1;
		$no_fundraising = "0";
	}
	else {
		$masinfo = 0;
		$no_fundraising = "1";
	}

	try {

		// País
		//$query_pais = "SELECT nombre FROM paises WHERE id_mp=".$pais_id;
		$query_pais = "SELECT ISO_Country_es AS nombre, IdWeb AS siglas FROM correos.countries WHERE IdMailSolutions=".$pais_id;
		$result = mysqli_query( $id_connect, $query_pais ); //or die( 'Error: ' . mysqli_connect_errno() );
		$pais = $result->fetch_array(MYSQLI_ASSOC);
		$pais_nombre = $pais["nombre"];
		$pais_siglas = $pais["siglas"];

		// Ver si existe en la BD
		$query_existe = "SELECT * FROM `".$tabla."` WHERE email='".$email."' AND accion='".$segmentacion."'";
		$result = mysqli_query( $id_connect, $query_existe ); //or die( 'Error: ' . mysqli_connect_errno() );
		$existe = $result->fetch_array(MYSQLI_ASSOC);

		//nuev@s interesad@s: // 0 = interesado, 1 = socio, 2 = nuevo, 3 = Interesado no acepta politica
		$socio = es_interesado($email);

		// 0 = interesado, 1 = socio
		$estado = 'interesado_a';
		if ($socio == 1)
		{
				$estado = 'socio_a';
		}

		if(!isset($existe)) {

			// fichero texto
/*
			$now = date("Y-m-d h:i:sa");
			$txt = $nombre."\t".$apellidos."\t".$email."\t".$telefono."\t".$pais."\t".$politika."\t".$origen.":".$campanya."\t".$ip."\t".$socio."\t".$now."\n";
			$myfile = fopen("file.txt", "a");
			fwrite($myfile, $txt);
			fclose($myfile);
*/

		$query = "INSERT INTO `".$tabla."` (
					`id`,
					`accion`,
					`nombre`,
					`apellidos`,
					`apellido2`,
					`dni`,
					`poblacion`,
					`provincia`,
					`pais`,
					`email`,
					`telefono`,
					`nif`,
					`masinfo`,
					`masinfoval`,
					`rau`,
					`rauval`,
					`socio`,
					`fecha`,
					`accion2`,
					`ip`,
					`origen`,
					`origen_piwik`,
					`fax_enviado`,
					`en_ev`,
					`en_ev_firma`,
					`pais_id`,
					`provincia_id`,
					`version_movil`,
					`datos_firma_rapida`,
					`mensaje`,
					`user_agent`)
				VALUES (
						NULL,
						'".substr($segmentacion, 0, 49)."',
						'".substr($nombre, 0, 49)."',
						'".substr($apellidos, 0, 49)."',
						'',
						'',
						'',
						'',
						'".$pais_nombre."',
						'".substr($email, 0, 49)."',
						'".$telefono."',
						'',
						".$masinfo.",
						'0',
						'0',
						'0',
						".$socio.",
						CURRENT_TIMESTAMP,
						'',
						'".$ip."',
						'".substr($campanya, 0, 39)."',
						'".substr($campanya, 0, 39)."',
						'0',
						'0',
						CURRENT_TIMESTAMP,
						'".$pais_siglas."',
						NULL,
						'0',
						'0',
						'',
						'".$user_agent."'
					)";

					//$myfile = fopen("file.txt", "a");
					//fwrite($myfile, $query.'<br>--------------------------------<br>');
					//fclose($myfile);

					$dummy = mysqli_query( $id_connect, $query ); //or die( "error!" );
					mysqli_close($id_connect);

			// Conexión con la API

			//$token = get_token();
			$product_id = get_product_by_productcode("$segmentacion")[0]["id"];
			$member_id = get_member_by_email($email)[0]["id"];

			// si no existe el member, lo creamos internamente
			if(!isset($member_id)) {
				$member = post_member_ai($email, $nombre, $apellidos, $telefono, $pais_siglas, $pais_nombre, $estado, $no_fundraising);
				$member_id = $member['id'];
				//insertamos el member en la plaforma de envio de correos
				post_member_experian($member_id, $nombre, $apellidos, $email, $telefono, $pais_siglas, $pais_nombre, $estado, $no_fundraising);
			}else{
				// Si existe actualizamos el campo no_fundraising siempre y cuando acepte recibir información (no_fundraising = 0)
				put_member_ai($member_id, $email, $no_fundraising); // API interna
				put_member_experian($member_id, $email, $no_fundraising); // API Experian
			}
			// vemos si existe la purchase internamente
			$purchase = get_purchase_by_member_product($product_id, $member_id);

			// si no existe la purchase, la creamos en experian, junto con el member (crear o actualizar)
			if($purchase["count"] == 0 || $purchase["count"] == '') {
				$purchase = post_purchase_ai($member_id, $product_id);
				$purchase_id = $purchase["id"];
				post_member_purchase_experian($purchase_id, $product_id, $member_id, $email);
			}
			else {
				$purchase_id = $purchase["results"][0]["id"];
			}
		}
		// Política
		if($politika != 'on' && $socio == 2) {
			$socio = 4;
		}

		header("location: ../gracias?s=$socio&caso=$caso"); //Añadir &caso=$caso para mostrar en la página de gracias por quién ha firmado

	} catch(Exception $e) {
		//echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		header("location: ../gracias/?error_form=1");
	}
}else {
	echo "No hay post!";
}

?>
