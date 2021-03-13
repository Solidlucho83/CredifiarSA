<?php
 include("nav.php");
 require_once("../php/ComerciosListado.php");
 $obj =  new ComerciosListado(); 
 $rubros = $obj->RubrosComercios_tarjeta(); 
 //$localidad = $obj->LocalidadComercios_tarjeta();
 $provincia = $obj->ProvinciaComercios_tarjeta();

 ?>

      
    <!-- FILTRO COMERCIOS -->
    <div >
        <div class="row m-0 p-0 fondo-imagen-tarjeta-comercios alto align-content-center justify-content-center">
            <div class="col m-0 "><br><br><br>  
                <div class="jumbotron bg-claro-transparente">
                    <p class="tituloVentajas"><br>Comercios Adheridos a Tarjeta</p>
                    <hr class="my-2">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="exampleFormControlSelect1">Rubro</label>                                            
                                            <select class="form-control" name="rubro">                                    
                                            <?php   
                                                                            
                                            foreach($rubros as $obj => $listado){                   
                                                echo '<option value="'.$listado["descripcion"].'">'.$listado["descripcion"].'</option>';
                                             } 
                                             
                                            ?>
                                        </select>                                        
                                        </div>
                                      <!--  <div class="form-group col">
                                            <label for="exampleFormControlSelect1">Localidad</label>
                                            <select class="form-control" name="localidad">
                                            <?php      

                                            //foreach($localidad as $obj => $listado){                   
                                           //     echo '<option value="'.$listado["localidad"].'">'.$listado["localidad"].'</option>';
                                          //   } 
                                                                                         ?>

                                        </select>                                          
                                        </div>-->
                                        <div class="form-group col">
                                            <label for="exampleFormControlSelect1">Provincia</label>                                            
                                            <select class="form-control" name="provincia">
                                            <?php   
                                                                                     
                                            foreach($provincia as $obj => $listado){                   
                                                echo '<option value="'.$listado["provincia"].'">'.$listado["provincia"].'</option>';
                                             } 
                                             
                                            ?>
                                        </select>                                        
                                        </div>
                                    </div>                        
                            </div>
                        </div>
                    </div>
                </div>
                <p class="lead">                 
                   <button class="btn pildora-amarilla" href="#resultado" type="submit">BUSCAR</button>         
                </form>      
                <br><br>  <br>                                      
            </div>
        </div>
    </div>   
  

    <?php

$obj =  new ComerciosListado(); 
$detalle = $obj->BuscarComercioTarjeta(); 

if((isset($_POST["rubro"])) || (isset($_POST["localidad"]))){                    
    if((!empty($dni = $_POST["rubro"]))||(!empty($dni = $_POST["localidad"]))){

        $filtrarTelefonos = array("0-0/00", "/00", "0-0", "/");
        

        if(count($detalle) == 0){

            echo "<div class=\"row text-center\" class=\"footer\">";
            echo "<div class=\"col-sm\">";
            echo "<div><b><br><h3>Sin resultados en la Zona seleccionada.</h3></b><br></div></div></div>";
         
        }else{ 
            echo  "<div class=\"row m-0 p-0 fondo-imagen-tarjeta-comercios alto align-content-center justify-content-center\">";
 
            //echo "<div class=\"row mt-0 text-center\" name=\"resultado\">";
            echo "<div class=\"col-sm\">";
            echo "<table class=\"table table-sm table-striped table-light\">";
            echo "<thead class=\"thead-dark\">";
            echo "<tr>";
            echo "<th scope=\"col\" >NOMBRE</th>";
            echo "<th scope=\"col\">DIRECCIÓN</th>";
            echo "<th scope=\"col\">TELEFONO</th>";
            echo "<th scope=\"col\">LOCALIDAD</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody >";
            echo "<tr>";

            foreach($detalle as $obj => $listado){
            
              echo "<td>".$listado["nombreFantasia"]."</td>";
              echo "<td>".$listado["calle"]."</td>";
              echo "<td>".str_replace($filtrarTelefonos,"&nbsp;&nbsp;&nbsp;&nbsp;", $listado["telefono"])."</td>";
              echo "<td>".$listado["localidad"]."</td>";  
              echo "</tr>";
             } 

            echo "</tbody>";
            echo "</table>";
            echo "</div></div>";
         
        }
    }
}

?>

<?php

include("footer.php");

?>
   