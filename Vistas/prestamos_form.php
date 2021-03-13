<?php
    include ("nav.php");
  ?>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
      $(document).on('ready',function(){
        $('#botonSolicitarPrestamos').click(function(){
            if ($('#nombrePrestamos').val() == ""){ 
              alert ('El campo Nombre esta vacío');  
              $('#nombrePrestamos').focus(); 
              return false;
            }else if ($('#apellidoPrestamos').val() == ""){
              alert ('El campo Apellido esta vacío');
              $('#apellidoPrestamos').focus();  
              return false;
            }else if ($('#dniPrestamos').val() == ""){
              alert ('El campo DNI esta vacío');
              $('#dniPrestamos').focus();  
              return false;
            }else if ($('#sexoPrestamos').val() == ""){
              alert ('El campo Sexo esta vacío');
              $('#sexoPrestamos').focus();  
              return false; 
            }else if ($('#correo1Prestamos').val() == ""){
              alert ('El campo Correo esta vacío');
              $('#correo1Prestamos').focus();  
              return false;
            }else if ($('#correo2Prestamos').val() == ""){
              alert ('El campo Confirmación Correo esta vacío');
              $('#correo2Prestamos').focus();  
              return false;
            }else if ($('#telefonoPrestamos').val() == ""){
              alert ('El campo Telefono esta vacío');
              $('#telefonoPrestamos').focus();  
              return false;
            }else if ($('#montoPrestamos').val() == ""){
              alert ('El campo Monto esta vacío');
              $('#montoPrestamos').focus();  
              return false;
            }else if ($('#email1Prestamos').val() == $('#email2Prestamos').val()){
                var paqueteDeDatos = new FormData();
                paqueteDeDatos.append('de', $('#correo1Prestamos').prop('value'));
                paqueteDeDatos.append('nombre', $('#nombrePrestamos').prop('value'));
                paqueteDeDatos.append('apellido', $('#apellidoPrestamos').prop('value'));
                paqueteDeDatos.append('documento', $('#dniPrestamos').prop('value'));
                paqueteDeDatos.append('telefono', $('#telefonoPrestamos').prop('value'));
                paqueteDeDatos.append('monto', $('#montoPrestamos').prop('value'));
                paqueteDeDatos.append('sexo', $('#sexoPrestamos').prop('value'));
                $.ajax({                        
                    url: "../php/procesarSolicitudPrestamos.php",
                    type: 'POST', // Siempre que se envíen ficheros, por POST, no por GET.
                    contentType: false,
                    data: paqueteDeDatos, // Al atributo data se le asigna el objeto FormData.
                    processData: false,
                    cache: false, 
                    success:function(salida){
                    if(salida == 1){
                    alert('No se pude enviar el correo.');
                    }
                    else{
                        alert('Correo Enviado con exito.');
                        window.location.replace('http://www.credifiarsa.com.ar/web/Vistas/index.php');
                    }
                    //alert(salida);
                }
                });
                return false;
            }else{
                alert('Los correos no coinciden.')
                return false; 
            }                      
  });
  });

  function validarTelefonoPrestamos(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros en el campo Teléfono.");
    $('#telefonoPrestamos').focus();
    return false;}
  }
  function validarDNIPrestamos(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros en el campo DNI.");
    $('#dniPrestamos').focus();
    return false;}
  }
  function validarMontoPrestamos(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros en el campo Monto.");
    $('#montoPrestamos').focus();
    return false;}
  }
  function validarCorreo1Prestamos(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido.")
        $('#email1Prestamos').focus();
        return false;}
  }
  function validarCorreo2Prestamos(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido.")
        $('#email2Prestamos').focus();
        return false;}
  }
</script>
    <div class="container m-superior-medio">
      
          <div class="container">
            <div class="row mt-3 pb-5">

              <div class="col-12 text-center">
                <h3 class="text" style="font-size: 2rem;">Solicitud de Prestamo</h3>
              </div> 

              <div class="col-12 col-md-8 offset-md-2 py-5 rounded">
                <form id="formularioSolicitudPrestamos" method="post">

                    <div class="row">
                      <div class="form-group col-lg-6">
                        <label for="">Primer Nombre</label>
                        <input type="text" class="form-control shadow-sm" name=nombrePrestamos id=nombrePrestamos>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="">Apellido</label>
                        <input type="text" class="form-control shadow-sm" name=apellidoPrestamos id=apellidoPrestamos>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-lg-6">
                        <label for="">DNI</label>
                        <input type="text" class="form-control shadow-sm" name=dniPrestamos id=dniPrestamos onChange="validarDNIPrestamos(this.value)">
                      </div>

                      <div class="form-group col-lg-6">
                        <label for="exampleFormControlSelect1">Sexo</label>
                        <select class="form-control" name=sexoPrestamos id=sexoPrestamos>
                          <option>Masculino</option>
                          <option>Femenino</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-lg-6">
                        <label for="">Correo</label>
                        <input type="email" class="form-control shadow-sm" name=correo1Prestamos id=correo1Prestamos onChange="validarCorreo1Prestamos(this.value)">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="">Confirmar Correo</label>
                        <input type="email" class="form-control shadow-sm" name=correo2Prestamos id=correo2Prestamos onChange="validarCorreo2Prestamos(this.value)">
                      </div>
                    </div>

                    <div class="row">                       
                      <div class="form-group col-md-6">
                          <label for="">Monto ( $ )</label>
                          <input type="text" class="form-control shadow-sm" name=montoPrestamos id=montoPrestamos onChange="validarMontoPrestamos(this.value)">
                      </div>
                      <div class="form-group col-lg-6">
                          <label for="">Teléfono</label>
                          <input type="text" class="form-control shadow-sm" name=telefonoPrestamos id=telefonoPrestamos onChange="validarTelefonoPrestamos(this.value)">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12 text-center mt-3">
                          <button class="btn pildora-amarilla" id="botonSolicitarPrestamos" name="botonSolicitarPrestamos">Solicitar Prestamo</button>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>                          
      
    </div>
    


  <?php
    include ("footer.php");
  ?>