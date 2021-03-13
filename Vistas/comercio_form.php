<?php
    include ("nav.php");
  ?>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
      $(document).on('ready',function(){
        $('#botonSolicitarComercio').click(function(){
            if ($('#nombreComercio').val() == ""){ 
                alert ('El campo Nombre esta vacío');  
                $('#nombreComercio').focus(); 
                return false; 
            }else if ($('#correo1Comercio').val() == ""){
                alert ('El campo Correo esta vacío');
                $('#correo1Comercio').focus();  
                return false;
            }else if ($('#correo2Comercio').val() == ""){
                alert ('El campo Confirmación Correo esta vacío');
                $('#correo2Comercio').focus();  
                return false;
            }else if ($('#telefonoComercio').val() == ""){
                alert ('El campo Telefono esta vacío');
                $('#telefonoComercio').focus();  
                return false;
            }else if ($('#provinciaComercio').val() == ""){
                alert ('El campo Provincia esta vacío');
                $('#provinciaComercio').focus();  
                return false;
            }else if ($('#ciudadComercio').val() == ""){
                alert ('El campo Ciudad esta vacío');
                $('#ciudadComercio').focus();  
                return false;
            }else if ($('#comentarioComercio').val() == ""){
              alert ('El campo Comentario esta vacío');
              $('#comentarioComercio').focus();  
              return false;
            }else if ($('#email1Comercio').val() == $('#email2Comercio').val()){
                var paqueteDeDatos = new FormData();
                paqueteDeDatos.append('de', $('#correo1Comercio').prop('value'));
                paqueteDeDatos.append('nombre', $('#nombreComercio').prop('value'));
                paqueteDeDatos.append('provincia', $('#provinciaComercio').prop('value'));
                paqueteDeDatos.append('ciudad', $('#ciudadComercio').prop('value'));
                paqueteDeDatos.append('telefono', $('#telefonoComercio').prop('value'));
                paqueteDeDatos.append('comentario', $('#comentarioComercio').prop('value'));
                $.ajax({                        
                    url: "../php/procesarSolicitudComercio.php",
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

  function validarTelefonoComercio(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros");
    $('#telefonoComercio').focus();
    return false;}
  }
  function validarCorreo1Comercio(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido")
        $('#email1Comercio').focus();
        return false;}
  }
  function validarCorreo2Comercio(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido")
        $('#email2Comercio').focus();
        return false;}
  }
</script>
    <div class="container m-superior-medio">
        
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12 text-center">
                    <h3 class="text" style="font-size: 2rem;">Trabajá Con Nosotros</h3>
                    </div> 
                    <div class="col-12 col-md-8 offset-md-2 py-5 rounded">
                        <form id="formularioSolicitudComercio" method="post">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="">Nombre de Fantasia</label>
                                    <input type="text" class="form-control shadow-sm" name=nombreComercio id=nombreComercio>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Telefono</label>
                                    <input type="text" class="form-control shadow-sm" name=telefonoComercio id=telefonoComercio onChange="validarTelefonoComercio(this.value)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="">Correo</label>
                                    <input type="text" class="form-control shadow-sm" name=correo1Comercio id=correo1Comercio onChange="validarCorreo1Comercio(this.value)">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Confirmar Correo</label>
                                    <input type="text" class="form-control shadow-sm" name=correo2Comercio id=correo2Comercio onChange="validarCorreo2Comercio(this.value)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="exampleFormControlSelect1">Provincia</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Santa Fe</option>
                                        <option>Entre Rios</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="exampleFormControlSelect1">Ciudad</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Santa Fe</option>
                                        <option>Parana</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">                       
                                <div class="form-group col-12">
                                    <label for="exampleFormControlTextarea1">Algún Comentario:</label>
                                    <textarea class="form-control" name=comentarioComercio id=comentarioComercio rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 text-center mt-3">
                                    <button class="btn pildora-amarilla" id="botonSolicitarComercio" name="botonSolicitarComercio">Enviar Solicitud</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                                 
    </div>
    <?php
        include ("footer.php");
    ?>