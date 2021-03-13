<?php
    include ("nav.php");
  ?>
  <style>
.file {
	display: block;
}
</style>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>

  $(function(){
				$('#botonEnviarCV').on('click', function (e){
					e.preventDefault(); // Evitamos que salte el enlace.
					/* Creamos un nuevo objeto FormData. Este sustituye al 
					atributo enctype = "multipart/form-data" que, tradicionalmente, se 
					incluía en los formularios (y que aún se incluye, cuando son enviados 
					desde HTML. */

                    // CONTROL DE ENTRADA
                    if ($('#deCV').val() == ""){ 
                        alert('El campo de Correo Electrónico esta vacío.');  
                        $('#deCV').focus(); 
                         false;
                    }
                    else if ($('#asuntoCV').val() == ""){ 
                        alert('El campo de Asunto esta vacío.');  
                        $('#asuntoCV').focus(); 
                        return false;
                    }
                    else if ($('#mensajeCV').val() == ""){ 
                        alert('El campo de Mensaje esta vacío.');  
                        $('#mensajeCV').focus(); 
                        return false;
                    }
                    else{
                        // FIN DE CONTROL DE ENTRADA
                        var paqueteDeDatos = new FormData();
                        /* Todos los campos deben ser añadidos al objeto FormData. Para ello 
                        usamos el método append. Los argumentos son el nombre con el que se mandará el 
                        dato al script que lo reciba, y el valor del dato.
                        Presta especial atención a la forma en que agregamos el contenido 
                        del campo de fichero, con el nombre 'archivo'. */
                        paqueteDeDatos.append('archivos', $('#ficheroCV')[0].files[0]);
                        paqueteDeDatos.append('para', $('#paraCV').prop('value'));
                        paqueteDeDatos.append('de', $('#deCV').prop('value'));
                        paqueteDeDatos.append('asunto', $('#asuntoCV').prop('value'));
                        paqueteDeDatos.append('mensaje', $('#mensajeCV').prop('value'));
                        paqueteDeDatos.append('banderaAdjunto', "1");
                        var destino = "../php/enviarCorreo.php"; // El script que va a recibir los campos de formulario.
                        /* Se envia el paquete de datos por ajax. */
                        $.ajax({
                            url: destino,
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
                                //  alert(salida);
                            }
                        });
                        return false;
                    }
				});
			});
            function validarCorreo(correo){
                if(correo.indexOf("@") == '-1'){
                    alert("Ingrese un correo valido")
                    $('#deCV').focus();
                    return false;}
            }

</script>

    <div class="container-fluid  p-0 m-0 alto d-flex ">
        <div class="row m-0 p-0 fondo-imagen-enviaCV  align-content-center">
            <div class="col-md-6">
                <div class="texto-banners">
					<h3>TRABAJÁ CON NOSOTROS</h3>
                    <hr class="my-2">
                </div>
            </div>
        </div>
    </div>

    <div class="container my-3">
        <div class="row my-4">
            <div class="col-12">
                <h3 class="text  text-center" >Adjuntanos tu CV</h3>
            </div>
            <div class="col-md-8  offset-md-2 card-borde-turno">
                <form name="formularioEnviarCV" id="formularioEnviarCV" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-12">
                            <input name="paraCV" class="form-control shadow-sm" type="hidden" id="paraCV" value="francisco.fanton@credifiar.com.ar" size="35" readonly="readonly">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="from2" accesskey="2">Correo Electrónico</label>
                            <input type="text" class="form-control shadow-sm" name="deCV" id="deCV" size="35"onChange="validarCorreo(this.value)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="sbj2" accesskey="3">Asunto</label>
                            <input type="text" class="form-control shadow-sm" name="asuntoCV" id="asuntoCV" required>
                        </div>
                    </div>
                    <div class="row">                       
                        <div class="form-group col-12">
                            <label for="msg2" class="texto" accesskey="4">Mensaje:</label>
                            <textarea class="form-control" id="mensajeCV" name="mensajeCV" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="archivo2" class="texto" accesskey="5">Adjuntar CV:</label>
                            <input  class="form-control" type="file" id="ficheroCV" name="ficheroCV"/>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-12 text-center mt-3">
                            <button class="btn pildora-amarilla" type="submit" id="botonEnviarCV" name="botonEnviarCV" accesskey="6">Enviar CV</button>
                        </div>
                    </div>
                    
                </form>
            </div>
           
        </div>
    </div>
    <?php
        include ("footer.php");
    ?>