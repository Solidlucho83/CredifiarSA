<?php 
    
    $dni = $_POST["dniAnular"];
    $dni = str_replace('.', '',$dni);
    $dni = str_replace(' ', '',$dni);
    $dni = str_replace('@', '',$dni);
    $sexo = $_POST["sexoAnular"];
    
     
    $authorization = "Authorization: Bearer 1f2e6679-b88b-3d8d-be7c-52438f7183e8";
    $data = $dni .'qwq'. $sexo;

    if($dni <> '' && $sexo<>''){
        $url = "http://190.57.237.93:18080/tarjetas/api/anularturno/" . $data;
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json;charset=utf8', $authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        //explode de '&' $result
         
        curl_close($ch);
        
        $result = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $result);
        
        $result = str_replace('"','',$result);
        
        $resultados =explode('&',$result);
        
        if($resultados[0] <> 'error'){
            //TURNO ANULADO CON EXITO
            echo "1";
        }else{
            if($resultados[1] == '1'){
                //NO HAY TURNOS ASIGNADOS PARA ESE DNI
                echo "2";
            }else{
                //ERROR INESPERADO
                echo "3";
            }       
        }
    }else{
        //NO SE A PODIDO ANULAR EL TURNO
        echo "4";
    }
?>