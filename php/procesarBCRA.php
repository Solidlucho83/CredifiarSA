<?php 
extract($_POST);
$documento = str_replace('.', '',$documento);
$documento = str_replace(' ', '',$documento);
$documento = str_replace('@', '',$documento);
//$sexo = $_POST["sexoContacto"];
//$nombre = $_POST["nombreContacto"];
$nombre = str_replace('@', '', $nombre);
$nombre = str_replace(' ', '', $nombre);
//$apellido = $_POST["apellidoContacto"];
$apellido = str_replace('@', '', $apellido);
$apellido = str_replace(' ', '', $apellido);
$email = $de;
$emails = explode('@',$email);
//$descripcion = $_POST["descripcion"];
/*
paqueteDeDatos.append('nombre', $('#nombreContacto').prop('value'));
            paqueteDeDatos.append('apellido', $('#apellidoContacto').prop('value'));
            paqueteDeDatos.append('telefono', $('#telefonoContacto').prop('value'));
            paqueteDeDatos.append('documento', $('#dniContacto').prop('value'));
            paqueteDeDatos.append('sexo', $('#sexoContacto').prop('value'));
            paqueteDeDatos.append('descripcion', $('#comentarioContacto').prop('value'));
*/
$exportado = "1";
$fechaHoraDescarga = date('Y-m-d H:i:s');
$nombre = $nombre . $apellido;

//echo $nombre." --- ".$telefono." --- ".$documento." --- ".$sexo." --- ".$descripcion." --- ".$exportado." --- ".$fechaHoraDescarga;
// LLAMADO AL WEB SERVICES
/*
$authorization = "Authorization: Bearer 1f2e6679-b88b-3d8d-be7c-52438f7183e8";
	$data = $nombre .'qwq'. $telefono . 'qwq' . $documento .'qwq'. $sexo .'qwq'. $descripcion .'qwq' . $exportado .'qwq' . $fechaHoraDescarga;
	echo $data;

   $url = "http://190.57.237.93:18080/tarjetas/api/turnosnuevo/" . $data;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json;charset=utf8', $authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    //explode de '&' $result
    //SI ES ERRROR MANDAR UN CARTEL DE ERROR SINO ARMAR PDF
    curl_close($ch);
    
    $result = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $result);
    
    $result = str_replace('"','',$result);
    
    $resultados =explode('&',$result);
    
    //echo $resultados[0];
   
    if($resultados[0] <> 'error'){
*/
		include_once('../php/class.phpmailer.php');
		// INGRESE EL EMAIL DONDE RECIBIR� LOS DATOS DEL FOMULARIO
		//$para = 'luciana.heinzen@credifiar.com.ar, info@credifiar.com.ar'; 
		//$rta = 'reclamos@credifiar.com.ar';
		$respuesta = 'francisco.fanton@credifiar.com.ar';
		//$para = $de;
		//$from = 'reclamos@credifiar.com.ar';
		//$copia = 'ezequiel.desimone@credifiar.com.ar';
		//$copia2 = 'reclamos@credifiar.com.ar';
		//$copia3 = 'virginia.isern@credifiar.com.ar';
		//$copia4 = 'mariela.schenquer@credifiar.com.ar';
		//$copia="ezequiel.desimone@credifiar.com.ar; sistemas@credifiar.com.ar"; 

		$idR = 150;
		$asunto = "Consulta desde la Web. Numero de incidencia ".$idR;  
		$mailheader = "From: ".$de."\r\n"; 
		$mailheader .= "Reply-To: ".$respuesta."\r\n"; 
		//$mailheader .= "Bcc: ". $copia. "\r\n";
		//$mailheader .= "Bcc: ". $copia2. "\r\n";
		//$mailheader .= "Bcc: ". $copia3. "\r\n";
		//$mailheader .= "Bcc: ". $copia4. "\r\n";
		$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		$MESSAGE_BODY .=  "<center>"."Hola ".$nombre."! Gracias por contactarte con nosotros. " . "</center>"."<br>"; 
		$MESSAGE_BODY .= "<center>"."Responderemos tu consulta numero ". $idR. " por este medio, ". "</center>"."<br>"; 
		$MESSAGE_BODY .= "<center>"."de lo contrario por favor comunicate al 0800-444-0461."."</center>"."<br><br><br>"; 
		$MESSAGE_BODY .= "Mensaje Enviado desde la Web: ".$descripcion."<br><br><br>"; 
		$MESSAGE_BODY .= "<img src='http://www.credifiar.com.ar/web/imagenes/Credifiar-firma-Institucional.jpg'  />";
		//$para viene como dato por eso no se declara.
		if (mail("$de", $asunto, $MESSAGE_BODY, $mailheader)){
			echo "2";
		}
		else{
			echo "1";
		} 

		//MODIFICAR A LA DIRECCI�N EN SU SERVIDOR
		header( 'Location: http://www.credifiarsa.com.ar/web/Vistas/contacto.php');

?>