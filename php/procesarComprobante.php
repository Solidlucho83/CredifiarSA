<?php 
    
    $dni = $_POST["dniComprobante"];
    $dni = str_replace('.', '',$dni);
    $dni = str_replace(' ', '',$dni);
    $dni = str_replace('@', '',$dni);
    $sexo = $_POST["sexoComprobante"];
    $email = $_POST["email1Comprobante"];
    $emails = explode('@',$email);
        
    $authorization = "Authorization: Bearer 1f2e6679-b88b-3d8d-be7c-52438f7183e8";
    $data = $dni .'qwq'. $sexo . 'qwq' . $emails[0] .'qwq' .$emails[1];

    $url = "http://190.57.237.93:18080/tarjetas/api/enviarcomprobante/" . $data;
    
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
    
   //echo($resultados[0] . ' ' .$resultados[1]);
   if($resultados[0] <> 'error'){
    //REENVIO CON EXITO.
    echo "1";
   }else{
       if($resultados[1] == '1'){
         //NO SE REGISTRA TURNO PARA ESE DNI.
         echo "2";
       }else{
         //NO SE PUDO ENVIAR EL CORREO.
         echo "3";
       }
   }

?>