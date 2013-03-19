<?php
	$nombre = $_POST['nombre'];
	$rut = $_POST['rut'];
	$mail = $_POST['mail'];
	$telefono = $_POST['telefono'];
	$opcion1 = $_POST['opcion1'];
	$opcion2 = $_POST['opcion2'];
	$opcion3 = $_POST['opcion3'];
	$mensaje = $_POST['mensaje'];
	
	if($nombre == '' || $mail == '' || $telefono == '' || $mensaje == '')
	{
		header('Location: index.php');
		exit;		
	}

	### CARGA A BD ###	
	
    $link =  mysql_connect('localhost', 'esucomex', 'RfevO&iw4NwQ');
    mysql_select_db('esucomex_esucomex2012',$link);
	mysql_query("SET NAMES 'utf8'");
	$hora=time();
	$horas = +3;
	$hora += ($horas * 60 * 60);
	$hora = date("H:i:s", $hora );
	$fecha = date("Y-m-d");
	$sql = "
	INSERT INTO contacto (nombre, mail, telefono, opcion1, opcion2, opcion3, mensaje, fecha, hora) 
	VALUES ('$nombre','$mail','$telefono','$opcion1','$opcion2','$opcion3','$mensaje','$fecha', '$hora');
	";
	mysql_query($sql) or die(mysql_error());
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="5;url=http://www.esucomex.cl/">
<title>Contacto</title>
<style type="text/css">

body{
	font-family:Arial, Helvetica, sans-serif; 
	font-size:13px;
}

.info, .success, .warning, .error, .validation {
	width: 600px;
	height: auto;
	overflow: hidden;
	border: 1px solid;
	margin: 50px auto 0px auto;
	padding:15px 10px 15px 50px;
	background-repeat: no-repeat;
	background-position: 10px center;
}

.info {
	color: #00529B;
	background-color: #BDE5F8;
	background-image: url('img/icon_info.png');
}

.success {
	color: #4F8A10;
	background-color: #DFF2BF;
	background-image:url('img/icon_success.png');
}

.warning {
	color: #9F6000;
	background-color: #FEEFB3;
	background-image: url('img/icon_warning.png');
}

.error {
	color: #D8000C;
	background-color: #FFBABA;
	background-image: url('img/icon_error.png');
}

</style>

<!-- script seguimiento campaña facebook -->
<script type="text/javascript">
var fb_param = {};
fb_param.pixel_id = '6008822804052';
fb_param.value = '0.00';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = (location.protocol=='http:'?'http':'https')+'://connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})();
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6008822804052&amp;value=0" /></noscript>

</head>

<body>
      <?php 
			
				$mail_to = 'admision@esucomex.cl, priscilla.araya@esucomex.cl, marcelo.reyes@esucomex.cl, gonzalo.vargas@esucomex.cl';
				$asunto_mail = 'Contacto desde sitio web';
				
				$mensaje_mail = file_get_contents('formato_mail.html');
				
				$mensaje_mail = str_replace('{NOMBRE}', $nombre, $mensaje_mail);
				$mensaje_mail = str_replace('{RUT}', $rut, $mensaje_mail);
				$mensaje_mail = str_replace('{MAIL}', $mail, $mensaje_mail);
				$mensaje_mail = str_replace('{TELEFONO}', $telefono, $mensaje_mail);
				$mensaje_mail = str_replace('{OPCION1}', $opcion1, $mensaje_mail);
				$mensaje_mail = str_replace('{OPCION2}', $opcion2, $mensaje_mail);
				$mensaje_mail = str_replace('{OPCION3}', $opcion3, $mensaje_mail);
				$mensaje_mail = str_replace('{MENSAJE}', $mensaje, $mensaje_mail);
				
				$cabeceras = 	'MIME-Version: 1.0' . "\r\n".
											'Content-type: text/html; charset=utf-8' . "\r\n".
											'From: info@esucomex.cl' . "\r\n" .
    									'Reply-To:'.$mail."\r\n" .
    									'X-Mailer: PHP/' . phpversion();

				
				$respuesta = mail($mail_to, $asunto_mail, $mensaje_mail, $cabeceras);
				
				if($respuesta == true)
				{
					echo '<div class="success"><p>Su contacto fue recibido con éxito</p></div>';
				}
				else
				{
					echo '<div class="error"><p>Ha ocurrido un error, inténtenlo más tarde</p></div>';
				}
				
		?>

		<!-- Google Code for Contactos Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 997104743;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "srmxCLnK7gQQ57i62wM";
		var google_conversion_value = 500;
		/* ]]> */
		</script>
		<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/997104743/?value=500&amp;label=srmxCLnK7gQQ57i62wM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
	
</body>
</html>