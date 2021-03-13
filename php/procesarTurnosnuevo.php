<?php 
    $dni = $_POST["dniAlta"];
    $dni = str_replace('.', '',$dni);
    $dni = str_replace(' ', '',$dni);
    $dni = str_replace('@', '',$dni);
    $sexo = $_POST["sexoAlta"];
    $nombre = $_POST["nombreAlta"];
    $nombre = str_replace('@', '', $nombre);
    $nombre = str_replace(' ', '', $nombre);
    $apellido = $_POST["apellidoAlta"];
    $apellido = str_replace('@', '', $apellido);
    $apellido = str_replace(' ', '', $apellido);
    $sucursal = $_POST["sucursalAlta"];
    $rango = $_POST["rangoAlta"];
    $email = $_POST["email1Alta"];
    $emails = explode('@',$email);
    $dia = $_POST["diaAlta"];
    //echo $dia;
    //return $apellido . $nombre . $dni . $sexo . $sucursal  . $dia  . $rango  . $emails[0]  .$emails[1];
    /*echo $dni;
    echo $sexo;
    echo $nombre;
    echo $apellido;
    echo $sucursal;
    echo $email;
    echo $emails[0];
    echo $dia;
    echo $rango;*/


    $authorization = "Authorization: Bearer 1f2e6679-b88b-3d8d-be7c-52438f7183e8";
    $data = $apellido .'qwq'. $nombre .'qwq'. $dni .'qwq'. $sexo .'qwq'. $sucursal .'qwq' . $dia .'qwq' . $rango . 'qwq' . $emails[0] .'qwq' .$emails[1];

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
        echo "1";
         
     }else{
      echo "2";
        }
    
?>