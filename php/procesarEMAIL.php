<?php 

//$mail = array('vir_a77@hotmail.com', 'virginia_isern@yahoo.com.ar');

$mail = array('virginia.isern@credifiar.com.ar','info@credifiar.com.ar', 'diego.larrosa@credifiar.com.ar','mariela.schenquer@credifiar.com.ar',
'laylpg_06@hotmail.com',
'zuniyanisoledad@hotmail.com',
'ailum_10@hotmail.com',
'ingridvictoriaf@hotmail.com',
'xime_hds@hotmail.com',
'hilenmeiners@hotmail.com',
'hilenmeiners@hotmail.com',
'servifran60@yahoo.com.ar',
'mika_yoa@hotmail.com',
'Scarbone93@hotmail.com',
'nanda3395@hotmail.com',
'morochafp23@hotmail.com');

	$rta = 'info@credifiar.com.ar';
	$from = 'info@credifiar.com.ar';
	$asunto = "Información Tarjeta Credifiar ";
	$mailheader = "From: ".$from."\r\n"; 
	$mailheader .= "Reply-To: ".$rta."\r\n"; 
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	$MESSAGE_BODY .=  "<b><center>"."Estimado Cliente!"."</center>"."<br>"; 
	$MESSAGE_BODY .= "<b><center>"."Recordá que para acceder a la bonificación por 2 meses del costo de tu Resúmen deberás abrir el mail que te enviamos a tu casilla de correo.". "</center>"."<br>"; 
	$MESSAGE_BODY .= "<b><center>"."Por favor no olvides revisar la casilla de correo no deseado para asegurarte que no haya entrado como spam."."</center>"."<br>"; 
	$MESSAGE_BODY .= "<b><center>"."Una vez abierto el mail, deberás hacer clic en el recuadro que dice ACEPTAR / VISUALIZAR."."</center>"."<br>"; 
	$MESSAGE_BODY .= "<b><center>"."Tu contraseña es tu número de CUIL."."</center>"."<br>";
	$MESSAGE_BODY .= "<b><center>"."Una vez visualizado, no te llegará más por correo postal y te bonificaremos los próximos 2 costos de tu resumen."."</center>"."<br>";
	$MESSAGE_BODY .= "<b><center>"."Por cualquier duda o consulta, comunicate al 0800-444-0461, al mal info@credifiar.com.ar o acercate a alguna de nuestras sucursales."."</center>"."<br>";
	$MESSAGE_BODY .= "<b><center>"."Gracias por confiar en Credifiar!"."</center>"."<br>";
		

for ($i = 0; $i < 16; $i++) {
	$para = $mail[$i];
	echo $para;
	mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("Error al enviar el Formulario !"); 

}
?>