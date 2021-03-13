<?php 
//var_dump($_POST);

// INGRESE EL EMAIL DONDE RECIBIRÁ LOS DATOS DEL FOMULARIO
//$para = 'luciana.heinzen@credifiar.com.ar, info@credifiar.com.ar';

$para = 'francisco.fanton@credifiar.com.ar';
$asunto = "Consulta de Comercio desde la Web";  
$mailheader = "From: ".$_POST["de"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["de"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY .= "Nombre Fantasia: ".nl2br($_POST["nombre"])."<br>"; 
$MESSAGE_BODY .= "Correo: ".nl2br($_POST["de"])."<br>"; 
$MESSAGE_BODY .= "Telefono: ".nl2br($_POST["telefono"])."<br>";  
$MESSAGE_BODY .= "Provincia: ".nl2br($_POST["provincia"])."<br>"; 
$MESSAGE_BODY .= "Ciudad: ".nl2br($_POST["ciudad"])."<br>"; 
$MESSAGE_BODY .= "Texto: ".nl2br($_POST["comentario"])."<br>"; 

if(mail($para, $asunto, $MESSAGE_BODY, $mailheader)){
    echo "2";
}
else{
    echo "1";
}
?>