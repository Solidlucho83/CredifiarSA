<?php
    include ("nav.php");
  ?>
		<!-- REQUISITOS  -->
		<div id="requisitos_credito" class="container-fluid p-0 m-0 alto d-flex mt-5" >
			<div class="row m-0 p-0 fondo-requisito">
				<div class="col-12 mt-md-5">
					<h2 class="text-center">Requisitos Créditos de Consumo</h2>
				</div>
				<div class="col-12 ">
				</div>
				<div class="col-12 d-flex flex-row justify-content-lg-between ">
					<div class="col-4 texto-requisitos"> DNI</div>
					<div class="col-3 texto-requisitos">RECIBO DE SUELDO</div>
					<div class="col-4 texto-requisitos">IMPUESTO O SERVICIO</div>
				</div>
			
			</div>
    	</div>
    
		<!-- COMEDRCIOS ADHERIDOS 
        <div id="comercios_credito" class="container-fluid  p-0 m-0 alto d-flex" >	
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
    	</div> -->
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
											<img src="../img/1x/LugaresdePagoConsumo.jpg" alt="" class="img-fluid" >
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
		
	<?php
    	include ("footer.php");
  	?>