  <?php
    include ("nav.php");
  ?>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
      $(document).on('ready',function(){
        $('#botonSolicitarTarjeta').click(function(){
            if ($('#dniTarjeta').val() == ""){ 
            alert('El campo de DNI esta vacío.');  
            $('#dniTarjeta').focus(); 
                return false;
            }else if ($('#nombreTarjeta').val() == ""){ 
                alert ('El campo Nombre esta vacío');  
                $('#nombreTarjeta').focus(); 
                return false; 
            }else if ($('#apellidoTarjeta').val() == ""){
                alert ('El campo Apellido esta vacío');
                $('#apellidoTarjeta').focus();  
                return false;
            }else if ($('#correo1Tarjeta').val() == ""){
                alert ('El campo Correo esta vacío');
                $('#correo1Tarjeta').focus();  
                return false;
            }else if ($('#correo2Tarjeta').val() == ""){
                alert ('El campo Confirmación Correo esta vacío');
                $('#correo2Tarjeta').focus();  
                return false;
            }else if ($('#sexoTarjeta').val() == ""){
                alert ('El campo Sexo esta vacío');
                $('#sexoTarjeta').focus();  
                return false;
            }else if ($('#telefonoTarjeta').val() == ""){
                alert ('El campo Telefono esta vacío');
                $('#telefonoTarjeta').focus();  
                return false;
            }else if ($('#dondeTrabajasTarjeta').val() == ""){
                alert ('El campo Donde Trabajas esta vacío');
                $('#dondeTrabajasTarjeta').focus();  
                return false;
            }else if ($('#comentarioTarjeta').val() == ""){
              alert ('El campo Comentario esta vacío');
              $('#comentarioTarjeta').focus();  
              return false;
            }else if ($('#email1Tarjeta').val() == $('#email2Tarjeta').val()){
                var paqueteDeDatos = new FormData();
                paqueteDeDatos.append('de', $('#correo1Tarjeta').prop('value'));
                paqueteDeDatos.append('nombre', $('#nombreTarjeta').prop('value'));
                paqueteDeDatos.append('apellido', $('#apellidoTarjeta').prop('value'));
                paqueteDeDatos.append('telefono', $('#telefonoTarjeta').prop('value'));
                paqueteDeDatos.append('documento', $('#dniTarjeta').prop('value'));
                paqueteDeDatos.append('sexo', $('#sexoTarjeta').prop('value'));
                paqueteDeDatos.append('dondeTrabajas', $('#dondeTrabajasTarjeta').prop('value'));
                paqueteDeDatos.append('comentario', $('#comentarioTarjeta').prop('value'));
                $.ajax({                        
                    url: "../php/procesarSolicitudTarjeta.php",
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

  function validarTelefonoTarjeta(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros");
    $('#telefonoTarjeta').focus();
    return false;}
  }
  function validarCorreo1Tarjeta(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido")
        $('#email1Tarjeta').focus();
        return false;}
  }
  function validarCorreo2Tarjeta(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido")
        $('#email2Tarjeta').focus();
        return false;}
  }
  function validarDNITarjeta(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros");
    $('#dniTarjeta').focus();
    return false;}
  }
</script>
    <div class="container m-superior-medio">
      
        <div class="container">
          <div class="row mt-3 pb-5">
            <div class="col-12 text-center">
              <h3 class="text" style="font-size: 2rem;">Solicitud de Tarjeta</h3>
            </div> 
            <div class="col-12 col-md-8 offset-md-2 py-5 rounded">
              <form id="formularioSolicitarTarjeta" method="post">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="">Primer Nombre</label>
                    <input type="text" class="form-control shadow-sm" name=nombreTarjeta id=nombreTarjeta>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control shadow-sm" name=apellidoTarjeta id=apellidoTarjeta>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="">DNI</label>
                    <input type="text" class="form-control shadow-sm" name=dniTarjeta id=dniTarjeta onChange="validarDNITarjeta(this.value)">
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="exampleFormControlSelect1">Sexo</label>
                    <select class="form-control" name=sexoTarjeta id=sexoTarjeta>
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="">Correo</label>
                    <input type="email" class="form-control shadow-sm" name=correo1Tarjeta id=correo1Tarjeta onChange="validarCorreo1Tarjeta(this.value)">
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="">Confirmar Correo</label>
                    <input type="email" class="form-control shadow-sm" name=correo2Tarjeta id=correo2Tarjeta onChange="validarCorreo2Tarjeta(this.value)">
                  </div>
                </div>
                <div class="row">                       
                  <div class="form-group col-lg-6">
                    <label for="">Dónde Trabajas?</label>
                    <input type="text" class="form-control shadow-sm" name=dondeTrabajasTarjeta id=dondeTrabajasTarjeta>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="">Teléfono</label>
                    <input type="number" class="form-control shadow-sm" name=telefonoTarjeta id=telefonoTarjeta onChange="validarTelefonoTarjeta(this.value)">
                  </div>
                </div>
                <div class="row">                       
                  <div class="form-group col-12">
                      <label for="exampleFormControlTextarea1">Comentario:</label>
                      <textarea class="form-control" name=comentarioTarjeta id=comentarioTarjeta rows="3"></textarea>
                  </div>
              </div>
                <div class="row">
                  <div class="form-group col-12 text-center mt-3">
                    <button class="btn pildora-amarilla" id="botonSolicitarTarjeta" name="botonSolicitarTarjeta">Solicitar Tarjeta</button>
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