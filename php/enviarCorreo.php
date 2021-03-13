<?php

//var_dump ($_POST);
//var_dump ($_FILES);
//echo $_FILES["archivos"]["name"];
//foreach($_FILES as $campo => $valor){ echo "- ". $campo ." = ". $valor; }
//echo $_FILES["archivos"];
// Para el envío de mails

	include_once('../php/class.phpmailer.php');
	// Indica si los datos provienen del formulario
		extract($_POST);
		$mail = new phpmailer (); # Crea una instancia
		$mail -> From = $de;
		$mail -> FromName = "Envio de archivos"; # Puede obtenerse del formulario, por facilidad se hace de esta manera
		$mail -> AddAddress ($para);
		$mail -> Subject = $asunto;
		$mail -> Body = $mensaje;
		$mail -> IsHTML (true);
		$archivos = '';
		$msg = "Mensaje Enviado";
	   	if ($banderaAdjunto == "1"){ # Si es que se subió algún archivo
				if ($error == UPLOAD_ERR_OK) { // Si no hay error
					$tmp_name = $_FILES["archivos"]["tmp_name"];
					$name = $_FILES["archivos"]["name"];
					$msg .= "<li>$name</li>";
					$name = uniqid('bc') . '_' . $name; # Generar un nombre único para el archivo
					$mail -> AddAttachment ($tmp_name, $name); # Añade el archivo adjunto
				} #if
        } # if
		if (!$mail -> Send ()){
			echo "1";
        }
  ?>