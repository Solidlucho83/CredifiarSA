<?php
    include ("nav.php");
  ?>

	<div id="lugaresycentrosdecobro" class="container-fluid  p-0 m-0 alto d-flex ">
        <div class="row m-0 p-0 fondo-imagen-sucursales  align-content-center ">            
            <div class="col-md-6">
                <div class="texto-banners">
					<h3>SUCURSALES</h3>
                    <hr class="my-2">
                </div>
            </div>
        </div>
    </div>

    <!-- UBICACIONES PARA CELULAR -->	
	<div class="container d-flex d-lg-none d-block">	
		<div class="row  align-content-center">
			<div class="col-12 mt-5">
				<h2 class="tituloComercios mt-5">Nuestros Locales</h2>
				<div class="card-deck">						
					<div class="col-12 mb-sm-3">
						<div class="card pb-4" >						
							<div class="card-body">
								<h5 class="card-title-ubicaciones"> Casa Central</h5>
								<p class="card-text-ubicaciones">PRIMERA JUNTA 2675 - 3000 Santa Fe</p>
								<p class="card-text-ubicaciones">Tel: 0342 - 4579300</p>		
							</div>
							<div class="card-footer-ubicaciones text-muted text-center" >
								<a href="#" class="btn btn-primary">Ubicación</a>
							</div>
						</div>
					</div>						
					<div class="col-12 mb-sm-3">
						<div class="card pb-4" >						
							<div class="card-body" >
								<h5 class="card-title-ubicaciones">Sucursal Aristóbulo</h5>
								<p class="card-text-ubicaciones">Av. Aristobulo del Valle 6857 - 3000 Santa Fe</p>
								<p class="card-text-ubicaciones">Tel: 0342 - 4579330</p>
							</div>
							<div class="card-footer-ubicaciones text-muted text-center" >
								<a href="#" class="btn btn-primary">Ubicación</a>
							</div>
						</div>
					</div>						
					<div class="col-12 mb-sm-3">
						<div class="card pb-4" >						
								<div class="card-body" >
								<h5 class="card-title-ubicaciones">Sucursal Esperanza</h5>
								<p class="card-text-ubicaciones">25 de Mayo 1414 - 3080 Esperanza</p>
								<p class="card-text-ubicaciones">Tel: 03496-423996</p>
							</div>
							<div class="card-footer-ubicaciones text-muted text-center" >
								<a href="#" class="btn btn-primary">Ubicación</a>
							</div>
						</div>
					</div>						
			>						
					<div class="col-12 mb-sm-3">
						<div class="card pb-4" >						
							<div class="card-body" >
								<h5 class="card-title-ubicaciones">Sucursal Ceres</h5>
								<p class="card-text-ubicaciones">Av. de Mayo 286 Loc.3 - 2340 Ceres</p>
								<p class="card-text-ubicaciones">Tel: 03491 420135</p>
							</div>
							<div class="card-footer-ubicaciones text-muted  text-center" >
								<a href="#" class="btn btn-primary">Ubicación</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- UBICACIONES PARA RESPONSIVE -->
	<div class="container-fluid alto my-5 locales d-none d-lg-block">
		<div class="row mt-5">
			<div class="col-12 text-center">
				<h2 class="tituloComercios mt-5">Nuestros Locales</h2>
			</div>
			<div class="col-4 pl-5">
				<div class="list-group " id="list-tab" role="tablist">
					<br>
					<a class="list-group-item mt-3 list-group-item-action active" id="list-central-list" data-toggle="list" href="#list-central" role="tab" aria-controls="central">Casa Central</a>
					<a class="list-group-item mt-3 list-group-item-action" id="list-aristobulo-list" data-toggle="list" href="#list-aristobulo" role="tab" aria-controls="aristobulo">Sucursal Aristóbulo</a>
					<a class="list-group-item mt-3 list-group-item-action" id="list-esperanza-list" data-toggle="list" href="#list-esperanza" role="tab" aria-controls="esperanza">Sucursal Esperanza</a>
					<a class="list-group-item mt-3 list-group-item-action" id="list-ceres-list" data-toggle="list" href="#list-ceres" role="tab" aria-controls="ceres">Sucursal Ceres</a>
					<br>
				</div>
			</div>
			<div class="col-8  mt-4">
				<div class="mb-4 ml-4">
					<div class="detalle-locales" id="detalle-central">
						<div><a class="font-weight-bold">Casa Central Credifiar:</a> 1ra Junta 2675 - Santa Fe.</div>
						<div>Lunes a Viernes de 8 a 16 hs.</div>
						<div>Sabado de 8 a 12 hs (2 Sabados por Mes)</div>
					</div>

					<div class="detalle-locales" id="detalle-aristobulo">
						<div><a class="font-weight-bold">Sucursal Aristobulo:</a> Av Aristobulo del Valle 6857 - Santa Fe</div>
						<div>Lunes a Viernes de 8 a 16 hs.</div>
						<div>Sabado de 8 a 12 hs.</div>
					</div>

					<div class="detalle-locales" id="detalle-ceres">
						<div><a class="font-weight-bold">Sucursal Ceres:</a> Av Mayo 286 - Ceres</div>
						<div>Lunes a Viernes de 8 a 16 hs.</div>
						<div>Sabado de 8 a 12 hs.</div>
					</div>

					<div class="detalle-locales" id="detalle-esperanza">
						<div><a class="font-weight-bold">Sucursal Esperanza:</a> 25 de Mayo 286 - Esperanza</div>
						<div>Lunes a Viernes de 8 a 16 hs.</div>
						<div>Sabado de 8 a 12 hs.</div>
					</div>

				</div>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="list-central" role="tabpanel" aria-labelledby="list-central-list">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27171.920996396424!2d-60.707944000000005!3d-31.647808!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5a9a435206de1%3A0x61fc287df57605e9!2sCredifiar!5e0!3m2!1ses!2sus!4v1593029336418!5m2!1ses!2sus" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class="tab-pane fade" id="list-aristobulo" role="tabpanel" aria-labelledby="list-aristobulo-list">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27184.177150097046!2d-60.692628!3d-31.605853!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5075c01d49829%3A0x66e1973c78007696!2sAv.%20Arist%C3%B3bulo%20del%20Valle%206786%2C%20S3004FTN%20Santa%20Fe%2C%20Argentina!5e0!3m2!1ses!2sus!4v1593030015893!5m2!1ses!2sus" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class="tab-pane fade" id="list-esperanza" role="tabpanel" aria-labelledby="list-esperanza-list">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27230.124041517316!2d-60.929339999999996!3d-31.448122!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5131635e276cd%3A0xc7531ee920e58185!2s25%20de%20Mayo%201414%2C%20S3080BQT%20Esperanza%2C%20Santa%20Fe%2C%20Argentina!5e0!3m2!1ses!2sus!4v1593030107403!5m2!1ses!2sus" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class="tab-pane fade" id="list-ceres" role="tabpanel" aria-labelledby="list-ceres-list">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27675.66790923936!2d-61.943021!3d-29.879887000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9436788f71b87b7f%3A0xec041ed7969bb655!2sAv.%20de%20Mayo%20286%2C%20Ceres%2C%20Santa%20Fe!5e0!3m2!1ses!2sar!4v1593029379633!5m2!1ses!2sar" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- LUGARES DE PAGO -->
	<div class="container-fluid  p-0 m-0 alto d-flex">
		<div  id="lugaresPago" class="row m-0 p-0 fondo-ventajas  align-content-center justify-content-center">
			<div class="col-md-6">
				<div class="jumbotron bg-transparente">
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
										<ul class="text-left">
											<div><a class="font-weight-bold" style="font-size: 18px;">Casa Central Credifiar:</a> 1ra Junta 2675 - Santa Fe</div>
											<div><a class="font-weight-bold" style="font-size: 18px;">Sucursal Santa Fe:</a> Av. Aristobulo del Valle 6857 - Santa Fe</div>
											<div><a class="font-weight-bold" style="font-size: 18px;">Sucursal Ceres:</a> Av Mayo 286 - Ceres</div>
											<div><a class="font-weight-bold" style="font-size: 18px;">Sucursal Esperanza:</a> 25 de Mayo 286 - Esperanza</div>
											<div><a class="font-weight-bold" style="font-size: 18px;">Sucursal Parana:</a> Urquiza 1087 - Parana</div>
											<div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone BP:</a> Av. Blas Parera 7888 - Santa Fe</div>
											<div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone FZ:</a> Av. Facundo Zuviria 5570 - Santa Fe</div>
											<div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone Recreo:</a> Ignacio Crespo 931 - Santa Fe</div>
											<div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone Helvecia:</a> Dr. Roman 840 - Santa Fe</div>
											<div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone San Javier:</a> Independencia 1871 - Santa Fe</div>
										</ul>
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