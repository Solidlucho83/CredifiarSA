  <?php
    include ("nav.php");

    
  ?>
  <!-- SCRIPT DE TURNOS-->
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script>
    //TURNO NUEVO
    $(document).on('ready',function(){
      $('#botonTurnoNuevo').click(function(){
        if ($('#dniAlta').val() == ""){ 
		      alert('El campo de DNI esta vacío.');  
		      $('#dniAlta').focus(); 
          return false;
        }else if ($('#sexoAlta').val() == ""){
          alert('El campo Sexo esta vacío');  
          return false;
        }else if ($('#nombreAlta').val() == ""){ 
          alert ('El campo Nombre esta vacío');  
          $('#nombreAlta').focus(); 
          return false; 
        }else if ($('#apellidoAlta').val() == ""){ 
          alert ('El campo Apellido esta vacío');  
          $('#apellidoAlta').focus(); 
          return false;
        }else if ($('#email1Alta').val() == ""){
          alert('El campo Email está vacío');
          $('#email1Alta').focus();
          return false; 
        }else if ($('#email2Alta').val() == ""){
          alert('El campo Confirme Email está vacío');
          $('#email2Alta').focus();
          return false;
        }else if ($('#email1Alta').val() == $('#email2Alta').val()){     
          if($('#diaAlta').val() == 97){ 

            // 	FILTRO DE HORARIO PARA LOS DIAS SABADO
            var rango = $('#rangoAlta').val();
            if(rango == 1 || rango == 2 || rango == 11 || rango == 12 || rango == 13 || rango == 14 || rango == 15 || rango == 16 ){
              alert ('Los turnos disponibles para el día sábado son de 9:00 a 13:00 hs.');  
              $('#rangoAlta').focus(); 
              return false; 
            }else if($('#sucursalAlta').val() == 1){
              // Para los sabados inhabilitados en Casa Central
              /*alert ('En este día no esta habilitado para atención en Casa Central.');  
              $('#rangoAlta').focus(); 
              return false;*/
              
              //Para los sabados habilitados en Casa Central
               // AJAX
               $.ajax({                        
                type: "POST",                 
                url: "../php/procesarTurnosnuevo.php",                    
                data: $("#formularioTurno").serialize(),
                success:function(salida){
                  if(salida == 1){
                    alert('TURNO CARGADO CON EXITO');
                    window.location.replace('http://credifiarsa.com.ar/web/Vistas/turnos.php'); 
                  }
                  else{
                    alert('USTED YA POSEE UN TURNO');
                  }
                }
              });
              return false;
            }
            else{
              //Para el resto de las Sucursales, siempre estan habilitadas los sábados.
              $.ajax({                        
                type: "POST",                 
                url: "../php/procesarTurnosnuevo.php",                    
                data: $("#formularioTurno").serialize(),
                success:function(salida){
                  if(salida == 1){
                    alert('TURNO CARGADO CON EXITO');
                    window.location.replace('http://credifiarsa.com.ar/web/Vistas/turnos.php'); 
                  }
                  else{
                    alert('USTED YA POSEE UN TURNO');
                  }
                }
              });
              return false;
            }
              
          /*}else if($('#diaAlta').val(); == 20){
          var rango = $('#rangoAlta').val();
          if(rango == 13 || rango == 14 || rango == 15 || rango == 16 ){
            alert ('El horario de 08 a 16 esta disponible a partir del Lunes 18 de Mayo. Seleccione otro horario.');  
            $('#rangoAlta').focus(); 
            return false; 
          }else{
            return true;
          }*/
          }else{
            //AJAX
            $.ajax({                        
              type: "POST",                 
              url: "../php/procesarTurnosnuevo.php",                    
              data: $("#formularioTurno").serialize(),
              success:function(salida){
                if(salida == 1){
                  alert('TURNO CARGADO CON EXITO');
                  window.location.replace('http://credifiarsa.com.ar/web/Vistas/turnos.php'); 
                }
                else{
                  alert('USTED YA POSEE UN TURNO');
                }
              }
            });
            return false;
          } 
        }else{
          alert('Los emails no coinciden');
          return false; 
        }
    });
  });
    
  //ANULAR TURNO
  $(document).on('ready',function(){
    $('#botonAnularTurno').click(function(){    
      if ($('#dniAnular').val() == ""){ 
        alert ('El campo DNI esta vacío');  
        $('#dniAlta').focus(); 
        return false; 
      }else if ($('#sexoAnular').val() == ""){
        alert ('El campo Sexo esta vacío');  
        return false;
      }else{
        $.ajax({                        
          type: "POST",                 
          url: "../php/procesarAnularTurno.php",                    
          data: $("#formularioAnularTurno").serialize(),
        success:function(salida)            
        {
          if(salida == 1){
            alert('TURNO ANULADO CON EXITO.');
            window.location.replace('http://credifiarsa.com.ar/web/Vistas/turnos.php'); 
          }
          else if(salida == 2){
            alert('NO HAY TURNOS ASIGNADOS PARA ESTE DNI.');
          }
          else if(salida ==3){
            alert('ERROR INESPERADO.');
          }
          else{
            alert('NO SE HA PODIDO ANULAR EL TURNO.');
          }
        }
        });
        return false;
      }                                
  });
  });
  //REENVIAR COMPROBANTE
  $(document).on('ready',function(){
    $('#botonReenviarComprobante').click(function(){
      if ($('#dniComprobante').val() == ""){ 
        alert ('El campo DNI esta vacío');  
        $('#dniComprobante').focus(); 
        return false; 
      }else if ($('#sexoComprobante').val() == ""){
        alert ('El campo Sexo esta vacío');  
        return false;
      }else if ($('#email1Comprobante').val() == ""){
        alert('El campo Email está vacío');
        $('#email1Comprobante').focus();
        return false; 
      }else if ($('#email2Comprobante').val() == ""){
          alert('El campo Confirme Email está vacío');
          $('#email2Comprobante').focus();
          return false; 
      }else if ($('#email1Comprobante').val() == $('#email2Comprobante').val()){     
        
        $.ajax({                        
          type: "POST",                 
          url: "../php/procesarComprobante.php",                    
          data: $("#formularioReenviarComprobante").serialize(),
        success:function(salida)            
        {
          if(salida == 1){
            alert('RENVIAMOS EL COMPROBANTE AL CORREO INGRESADO.');
            window.location.replace('http://credifiarsa.com.ar/web/Vistas/turnos.php'); 
          }
          else if(salida ==2){
            alert('NO SE ENCONTRO TURNO ASIGNADO PARA EL DNI INGRESADO.');
          }
          else{
            alert('NO SE HA PODIA ENVIAR AL CORREO INGRESADO. POR FAVOR VERIFIQUE EL CORREO INGRESADO.');
          }
        }
          });
        return false;
      }else{
        alert('Los emails no coinciden');
        return false; 
      }                                    
    
    });
  });

  // FUNCIONES NUEVO TURNO
  function validarCorreo1Nuevo(correo){
  if(correo.indexOf("@") == '-1'){
      alert("Ingrese un correo valido")
      $('#email1Alta').focus();
      return false;}
  }
function validarCorreo2Nuevo(correo){
  if(correo.indexOf("@") == '-1'){
      alert("Ingrese un correo valido")
      $('#email2Alta').focus();
      return false;}
}
function validarDNINuevo(numero){
  if (!/^([0-9])*$/.test(numero)){
  alert("Ingresar solo numeros");
  $('#dniAlta').focus();
  return false;}
}
  // FUNCIONES ANULAR TURNO
  function validarDNIAnular(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros");
    $('#dniAnular').focus();
    return false;}
  }
  // FUNCIONES COMPROBANTES
  function validarCorreo1Comprobante(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido")
        $('#email1Comprobante').focus();
        return false;}
  }
  function validarCorreo2Comprobante(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido")
        $('#email2Comprobante').focus();
        return false;}
  }
  function validarDNIComprobante(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros");
    $('#dniComprobante').focus();
    return false;}
  } 


  </script>
      <div class="container my-md-5 pt-md-5">
        <div class="row my-md-3">
          <div class="col-12 ">
            <div class="card my-3 tab-card card-borde-turno ">
              
                <div class="card-header tab-card-header">
                  <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Solicitar Turno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Anular Turno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Reenviar Comprobante</a>
                    </li>
                  </ul>
                </div>
                <!-- TURNERO -->
                <div class="tab-content" id="myTabContent">
                  <!-- TURNO NUEVO -->
                  <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                    <div class="container">
                      <div class="row mt-3 pb-5 ">
                        <div class="col-12 text-center">
                          <h3 class="text" style="font-size: 2rem;">Completá los datos y registrá tu turno de visita!</h3>
                        </div> 
                        <div class="col-12 col-md-8 offset-md-2 py-5 rounded">
                          <form id="formularioTurno" method="post">

                            <div class="row">
                              <div class="form-group col-lg-6">
                                <label for="">Primer Nombre</label>
                                <input type="text" class="form-control shadow-sm" name="nombreAlta" id="nombreAlta">
                              </div>
                              <div class="form-group col-lg-6">
                                <label for="">Apellido</label>
                                <input type="text" class="form-control shadow-sm" name="apellidoAlta" id="apellidoAlta">
                              </div>
                            </div>

                            <div class="row">
                              <div class="form-group col-lg-6">
                                <label for="">DNI</label>
                                <input type="text" class="form-control shadow-sm" name="dniAlta" id="dniAlta" onChange="validarDNINuevo(this.value)">
                              </div>
                              <div class="form-group col-lg-6">
                                <label for="exampleFormControlSelect1">Sexo</label>
                                  <select class="form-control" name="sexoAlta">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                  </select>
                              </div>
                            </div>

                            <div class="row">
                              <div class="form-group col-lg-6">
                                <label for="">Correo</label>
                                <input type="email" class="form-control shadow-sm" name="email1Alta" id="email1Alta" onChange="validarCorreo1Nuevo(this.value)">
                              </div>
                              <div class="form-group col-lg-6">
                                <label for="">Confirmar Correo</label>
                                <input type="email" class="form-control shadow-sm" name="email2Alta" id="email2Alta" onChange="validarCorreo2Nuevo(this.value)">
                              </div>
                            </div>

                            <div class="row">                       
                              <div class="form-group col-12">
                                <label for="exampleFormControlSelect1">Sucursal</label>
                                <select class="form-control" name="sucursalAlta" id="sucursalAlta">
                                  <option value="1">Casa Central - Primera Junta - 3000 Santa Fe</option>
                                  <option value="2">Aristobulo del Valle - Av. Aristubulo del Valle 6857 - 3000 Santa Fe</option>
                                  <option value="3">Esperanza - 25 de Mayo 1414 - 3080 Esperanza</option>
                                  <option value="4">Ceres - Av. de Mayo 286 Loc.3 - 2340 Ceres </option>
                                </select>
                              </div>
                            </div>

                            <div class="row">
                              <div class="form-group col-lg-6">
                                <label for="exampleFormControlSelect1">Días Disponibles</label>
                               
                                <select class="form-control" name="diaAlta" id="diaAlta">
                                  
                                <?php 
                                 require_once("turnosConfig.php");
                                  #valor Inicial Final//                           
                                 
                                  for($fecha1;$fecha1<=$fecha2;$fecha1=strtotime('+1 day ' . date('Y-m-d',$fecha1))){ 
                                     if(strcmp(date('D',$fecha1),'Sun')!=0){
                                       $valor1 <= $valor2;
                                        echo "<option value=".$valor1++.">".utf8_encode(strftime("%A %d de %B %Y",$fecha1))."</option>\r\n"; 
                                     }
                                   }                                   
                                   ?>

                                </select>
                              </div>
                              <div class="form-group col-lg-6">
                                  <label for="exampleFormControlSelect1">Horarios</label>
                                  <select class="form-control" name="rangoAlta" id="rangoAlta">
                                    <option value="1"> 08:00 / 08:30</option>
                                    <option value="2">08:30 / 09:00</option>
                                    <option value="3"> 09:00 / 09:30</option>
                                    <option value="4">09:30 / 10:00</option>
                                    <option value="5">10:00 / 10:30</option>
                                    <option value="6"> 10:30 / 11:00</option>
                                    <option value="7">11:00 / 11:30</option>
                                    <option value="8">11:30 / 12:00</option>
                                    <option value="9">12:00 / 12:30</option>
                                    <option value="10">12:30 / 13:00</option>
                                    <option value="11">13:00 / 13:30</option>
                                    <option value="12">13:30 / 14:00</option>
                                    <option value="13">14:00 / 14:30</option>
                                    <option value="14">14:30 / 15:00</option>
                                    <option value="15"> 15:00 / 15:30</option>
                                    <option value="16"> 15:30 / 16:00</option>
                                  </select>
                              </div> 
                            </div>
                            <div class="row">
                                <div class="form-group col-12 text-center mt-3">
                                  <button class="btn pildora-amarilla " id="botonTurnoNuevo" name="botonTurnoNuevo">Solicitar Turno</button>
                                </div>
                            </div>
                          </form>
                          
                          <div class="card col-md-8 mt-md-5 offset-md-2">
                            <div class="card-footer-ubicaciones text-muted text-center">
                              <ul class="list-group list-group-flush">  
                                <li class="list-group-item">Una vez que saques tu turno, recibirás por mail un comprobante en PDF que te servirá para circular en la vía pública y presentar en la sucursal.</li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div> 
                  </div>                        
                  <!-- ANULAR TURNO -->
                  <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                      
                        <div class="container">
                          <div class="row mt-3 pb-5">

                            <div class="col-12 text-center">
                              <h3 class="text" style="font-size: 2rem;">Ingresar Datos</h3>
                            </div>

                            <div class="col-12 col-md-8 offset-md-2 py-5 rounded">
                            <form id="formularioAnularTurno" method="post">
                              <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="">DNI</label>
                                    <input type="text" class="form-control shadow-sm" name=dniAnular id=dniAnular onChange="validarDNIAnular(this.value)">
                                </div>
                                <div class="form-group col-lg-6">
                                  <label for="exampleFormControlSelect1">Sexo</label>
                                  <select class="form-control" name="sexoAnular" id="sexoAnular">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                  </select>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="form-group col-12 text-center mt-3">
                                  <button class="btn pildora-amarilla " id="botonAnularTurno" name="botonAnularTurno">Anular Turno</button>
                                </div>
                            </div>
                            </form>
                          </div>
                        </div>
                      
                    </div> 

                  </div>
                  <!-- REIMPRIMIR TURNO -->
                  <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                    
                      <div class="container">
                        <div class="row mt-3 pb-5">

                          <div class="col-12 text-center">
                            <h3 class="text" style="font-size: 2rem;">Completá los datos con los que registraste tu turno y reenviamos el comprobante!</h3>
                          </div>

                          <div class="col-12 col-md-8 offset-md-2 py-5 rounded">
                            <form id="formularioReenviarComprobante" method="post">

                              <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="">DNI</label>
                                    <input type="text" class="form-control shadow-sm" name="dniComprobante" id="dniComprobante" onChange="validarDNIComprobante(this.value)">
                                </div>
                                <div class="form-group col-lg-6">
                                  <label for="exampleFormControlSelect1">Sexo</label>
                                  <select class="form-control" name="sexoComprobante" id="sexoComprobante">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                  </select>
                                </div>
                              </div>

                              <div class="row">
                                <div class="form-group col-lg-6">
                                  <label for="">Correo</label>
                                  <input type="email" class="form-control shadow-sm" name="email1Comprobante" id="email1Comprobante" onChange="validarCorreo1Comprobante(this.value)">
                                </div>
                                <div class="form-group col-lg-6">
                                  <label for="">Confirmar Correo</label>
                                  <input type="email" class="form-control shadow-sm" name="email2Comprobante" id="email2Comprobante" onChange="validarCorreo2Comprobante(this.value)">
                                </div>
                              </div>

                              <div class="row">
                                <div class="form-group col-12 text-center mt-3">
                                  <button class="btn pildora-amarilla" id="botonReenviarComprobante" name="botonReenviarComprobante">Reenviar Comprobante</button>
                                </div>
                              </div>

                            </form>
                          </div>
                        </div>
                      </div>
                                 
                  </div>
                </div>  
            </div>
          </div>
        </div>
      </div>
  <?php
    include ("footer.php");
  ?>