    <?php
    include("nav.php");
    ?>

    <!-- SOLICITAR TARJETA -->
    <div id="solicita_tarjeta" class="container-fluid  p-0 m-0 alto d-flex ">
        <div class="row m-0 p-0 fondo-imagen-tarjeta  align-content-center justify-content-center">
            
            <div class="col-md-6">
                <div class="jumbotron bg-claro-transparente">
                    <p class="tituloVentajas">¿Necesitás tu tarjeta de crédito?</p>
                    <hr class="my-2">
                    <p class="lead">
                        <a class="btn pildora-amarilla " href="tarjeta_form.php" role="button">SOLICITALA AQUÍ</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- REQUISITOS TARJETA -->
    <div id="requisitos_tarjeta" class="container-fluid p-0 m-0 alto d-flex  mt-5 mt-md-0" >
        <div class="row m-0 p-0 fondo-requisito">

            <div class="col-12 pt-md-3">
                <h2 class="text-center tituloVentajas">Requisitos Trajeta de Crédito</h2>
                </div>
			<div class="col-12 d-md-block d-none">
            </div>
            <div class="col-12 d-md-flex flex-md-row justify-content-lg-between ">
                <p class="col-md-4 texto-requisitos"> DNI</p>
                <p class="col-md-3 texto-requisitos">RECIBO DE SUELDO</p>
                <p class="col-md-4 texto-requisitos">IMPUESTO O SERVICIO</p>
            </div>
        </div>
    </div>

     <!-- LUGARES DE PAGO -->
    <div class="container-fluid  p-0 m-0 alto d-flex ">
        <div  id="lugaresPago" class="row m-0 p-0 w-100 align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron bg-transparente text-center">
                    <h3 class="tituloVentajas">Conocé nuestros puntos de pago</h3>
                    <button type="button" class="btn pildora-amarilla" data-toggle="modal" data-target="#lugares-modal">VER PUNTOS DE PAGO</button>
                    <!-- Modal -->
                    <div class="modal fade" id="lugares-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg ">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Lugares de Pago</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <img src="../img/1x/LugaresdePagoTarjetaCredifiar.jpg" alt="" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FILTRO COMERCIOS 
    <div id="comercios_tarjeta" class="container-fluid p-0 m-0 alto d-flex" >
        <div class="row m-0 p-0 fondo-imagen-tarjeta-comercios  align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron bg-claro-transparente">
                    <p class="tituloVentajas">Comercios Adheridos</p>
                    <hr class="my-2">
                    <div class="container">
                        <div class="row ">
                            <div class="col">
                                <form action="">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="exampleFormControlSelect1">Rubro</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>C1</option>
                                                <option>C2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleFormControlSelect1">Localidad</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>C1</option>
                                                <option>C2</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="lead">
                    <a class="btn pildora-amarilla" href="#" role="button">Buscar</a>
                </p>
            </div>
        </div>
    </div>-->

    <!-- RESUMEN -->
     <div id="resumen_tarjeta" class="container-fluid  p-0 m-0 alto d-flex">
        <div class="row m-0 p-0 fondo-imagen-s  align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="col-12 text-center">
                    <h3 class="text">Completá los datos y accedé a tu resumen!</h3>
                </div>
                <div class="jumbotron bg-transparent">
                    <form method="post" action="../php/procesarResumen.php">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">DNI</label>
                                <input type="text" class="form-control shadow-sm" name="dni">
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleFormControlSelect1">Sexo</label>
                                <select class="form-control" name="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 text-center mt-4">
                                <button class="btn pildora-amarilla" name="button" id="button">Mostrar Resumen</button>
                            </div>
                        </div>
                    </form>
                    <div class="card col-12 mt-5">
                        <div class="card-footer-ubicaciones text-muted text-center">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Puede que haya muchos usuarios descargando su resumen en éste momento.
                                    Si notas alguna demora, por favor intenta en unos minutos. Gracias!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- beneficios -->
    <div  class="container-fluid p-0 m-0 alto d-flex">

        <div id="beneficios_tarjeta" class="row m-0 p-0 fondo-imagen-beneficios  align-content-center justify-content-start">

            <div class=" col-md-6">
                <div class="texto-banners">
                    <h2 class="font-weight-bold titulo-slider">Conocé los beneficios de Tarjeta Credifiar</h2>
                    <p class="text-carousel-caption">DESCUENTOS</p>
                    <p class="text-carousel-caption">CUOTAS SIN INTERÉS</p>
                    <p class="text-carousel-caption">+ DE 2000 COMERCIOS ADHERIDOS</p>         
                    <button type="button" class="btn pildora-amarilla" data-toggle="modal" data-target="#PromosT">CONÓCELOS</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="PromosT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg " >
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Requisitos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="container-fluid">
                                    <img src="../img/index/promoTarjeta1.png" alt="" class="img-fluid" >
                                    <img src="../img/index/promoTarjeta2.png" alt="" class="img-fluid" >
                                    <img src="../img/index/promoTarjeta3.png" alt="" class="img-fluid" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <?php
    include("footer.php");
    ?>