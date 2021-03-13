<?php 

$dni = $_POST["dni"];
$sexo= $_POST["sexo"];

  // veo estado en tarjeta
   $authorization = "Authorization: Bearer 1f2e6679-b88b-3d8d-be7c-52438f7183e8";
   
   $data = $sexo . $dni;
   $url = "http://190.57.237.93:18080/tarjetas/api/resumenweb/" . $data;

   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json;charset=utf8', $authorization));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $result = curl_exec($ch);
   
   curl_close($ch);
   
   $result = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $result);
    
   $result = str_replace('"','',$result);
  
   
   if($result == ''){
       echo('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <table width="700px" border="0" cellpadding="0" cellspacing="0" align="center">
	              <tr>
	                <td width="53" align="right"><img src="imagenes/flecha2.png" width="25" height="26" /></td>
	                <td width="700">
                        <strong style = "font-family: Tahoma, Geneva, sans-serif;font-size: 14px; color: #949B17; font-weight: normal;">
                         No hemos encontrado tu resumen.
                         Verifica que los datos ingresados sean correctos, y vuelve <a href="http://credifiar.com.ar/web/resumen.html"> buscar tu resumen.</a>
                        </strong>
                    </td>
                  </tr>
       
        </table>
        ');
     //  
   
   }else{
       
       // Ruta del directorio donde están los archivos
       $path  = '../resumenes';
       
       // Arreglo con todos los nombres de los archivos
       $files = array_diff(scandir($path), array('.', '..'));

       //Variable a mostrar al final
       $mostrar = '/Vistas/tarjeta.php';
       foreach($files as $file){
           // Divido en dos el nombre del archivo
           $archivo = explode(".", $file);
           // Nombre del archivo
           $fileName = $archivo[0];
           // Extensión del archivo
           $fileExtension = $archivo[1];
          
           if($result == $fileName){
               
               $mostrar = "/resumenes/" . $result . "." . $fileExtension;         
               break;
           }
       }

       
      header('Location: http://credifiarsa.com.ar/web'. $mostrar);
    

              
        
   }

?>