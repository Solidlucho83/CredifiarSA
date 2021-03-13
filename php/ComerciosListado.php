<?php
require_once ("Comerciosdb.php");

#Query Tarjeta
////////////////////////////////////////////////////////////////////////////////////////////
#SELECT  id_rubro , descripcion, nombreFantasia, cp, calle, localidad, provincia, concat(codAreaMovil,'-',telMovil,'/',codareapart,telpart ) as telefono
#FROM tc_rubro
#JOIN tc_sucursalcomercio on tc_rubro.id_rubro=tc_sucursalcomercio.idRubro
#where fechaBaja is null;

# Query Consumo
////////////////////////////////////////////////////////////////////////////////////////////
#select co.comercioid, co.nombrefantasia, cs.direccion, cs.telefono,
#lc.nombre as localidad,
#pr.nombre as provincia
#from co_comercio co
#left join co_comerciosucursal cs on co.comercioid=cs.comercioid
#left join cm_localidad lc on cs.localidadId=lc.localidadId
#left join cm_provincia pr on lc.provinciaid=pr.provinciaid
#where co.fechabaja is null and cs.fechabaja is null

class ComerciosListado extends Comerciosdb {

    public function RubrosComercios(){      
       
        $sql = "SELECT DISTINCT rubro FROM listado";
        $query = Comerciosdb::conectarDB()->prepare($sql);
        $query ->execute();
        $result =  $query->fetchAll();
        return $result;
        $query->close();
    } 

    public function RubrosComercios_tarjeta(){      
       
        $sql = "SELECT DISTINCT descripcion FROM listado_tarjeta";
        $query = Comerciosdb::conectarDB()->prepare($sql);
        $query ->execute();
        $result =  $query->fetchAll();
        return $result;
        $query->close();
    } 

    public function LocalidadComercios(){      

        $sql = "SELECT DISTINCT localidad FROM listado";
        $query = Comerciosdb::conectarDB()->prepare($sql);
        $query ->execute();
        $result =  $query->fetchAll();
        return $result;
        $query->close();
    } 

    public function LocalidadComercios_tarjeta(){      

        $sql = "SELECT DISTINCT localidad FROM listado_tarjeta";
        $query = Comerciosdb::conectarDB()->prepare($sql);
        $query ->execute();
        $result =  $query->fetchAll();
        return $result;
        $query->close();
    } 

    public function ProvinciaComercios(){      

        $sql = "SELECT DISTINCT provincia FROM listado where provincia is Not null and not provincia = ''";
        $query = Comerciosdb::conectarDB()->prepare($sql);
        $query ->execute();
        $result =  $query->fetchAll();
        return $result;
        $query->close();
    } 

    public function ProvinciaComercios_tarjeta(){      

        $sql = "SELECT DISTINCT provincia FROM listado_tarjeta where provincia is Not null and not provincia = ''";
        $query = Comerciosdb::conectarDB()->prepare($sql);
        $query ->execute();
        $result =  $query->fetchAll();
        return $result;
        $query->close();
    } 

    public function BuscarComercio(){
        try {
        $rubro = $_POST["rubro"];
        //$localidad = $_POST["localidad"];
        $provincia = $_POST["provincia"];
        $sql = "SELECT DISTINCT nombrefantasia, direccion, telefono, 
        localidad, provincia, rubro from listado WHERE rubro = '$rubro' and provincia = '$provincia'";
        $query = Comerciosdb::conectarDB()->prepare($sql);
        $query ->execute();
        $result =  $query->fetchAll();
        return $result;
        $query->close();
    }catch (Exception $e){
            $error = $e->getMessage();
            echo $error;
      }
    }

    public function BuscarComercioTarjeta(){
        try {
        $rubro = $_POST["rubro"];       
        $provincia = $_POST["provincia"];
        $sql = "SELECT nombreFantasia, calle, localidad, telefono
        FROM listado_tarjeta 
        WHERE descripcion = '$rubro' and provincia = '$provincia'";
        $query = Comerciosdb::conectarDB()->prepare($sql);
        $query ->execute();
        $result =  $query->fetchAll();
        return $result;
        $query->close();
    }catch (Exception $e){
            $error = $e->getMessage();
            echo $error;
      }
    }


}
