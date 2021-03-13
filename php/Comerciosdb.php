<?php

class Comerciosdb {
 
   
    public function  conectarDB(){
        try {            
                    $conexion = new PDO("mysql:host=localhost:3306;dbname=comercios",
                            "comercios", 
                            "8a6f3b60f5557c027f65826346fb912a");
                    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $conexion->exec("set names utf8");
                    return $conexion;     
                    
                    
        }catch (Exception $e){
                    $error = $e->getMessage();
                    echo $error;
        }
    }  


}