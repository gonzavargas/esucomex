<?php
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$tipofon = $_POST['tipofon'];
	$cod_fijo = $_POST['cod_fijo'];
	$cod_cel = $_POST['cod_cel'];
	$telefono = $_POST['telefono'];

	### CARGA A BD ### 
    $link =  mysql_connect('localhost', 'esucomex', 'RfevO&iw4NwQ');
    mysql_select_db('esucomex_llamados2012',$link);
	mysql_query("SET NAMES 'utf8'");
	$fecha=time();
	$horas = +3;
	$fecha += ($horas * 60 * 60);
	$fecha = date("Y-m-d H:i:s", $fecha );
	$sql = "
	INSERT INTO contacto (nombre, mail, tipofon, cod_fijo, cod_cel, telefono, fecha) 
	VALUES ('$nombre', '$mail', '$tipofon', '$cod_fijo', '$cod_cel', '$telefono', '$fecha');
	";
	mysql_query($sql) or die(mysql_error());
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Enviando Formulario</title>

<style type="text/css">

body{
	font-family:Arial, Helvetica, sans-serif; 
	font-size:13px;
}

.info, .success, .warning, .error, .validation {
	border: 1px solid;
	margin: 10px 0px;
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
		$header = 'From: ' . $mail . " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";
	
		$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
		$mensaje .= "E-mail: " . $mail . " \r\n";
		$mensaje .= "Teléfono " . $tipofon . ": " . "(" . $cod_cel . ")" . $telefono . " \r\n";
		$mensaje .= "Enviado el " . date('d/m/Y', time());
	
		$para = 'contacto@esucomex.cl, priscilla.araya@esucomex.cl, gonzalo.vargas@esucomex.cl, marcelo.reyes@esucomex.cl';
		$asunto = 'Número de teléfono para llamar';
	
		$respuesta = mail($para, $asunto, utf8_decode($mensaje), $header);
		
		if($respuesta == true)
				{
					echo '<div class="success"><p>Su contacto fue recibido con éxito</p></div>';
				}
				else
				{
					echo '<div class="error"><p>Ha ocurrido un error, inténtenlo más tarde</p></div>';
				}

	?>

	<!-- Google Code for Contacto M&oacute;vil Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 997104743;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "n4D2CMn87wQQ57i62wM";
	var google_conversion_value = 0;
	/* ]]> */
	</script>
	<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/997104743/?value=0&amp;label=n4D2CMn87wQQ57i62wM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	
</body>
</html>