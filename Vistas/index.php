<?php
include("nav.php");
?>
<!-- CAROUSEL CON NAVEGACION-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner alto p-0 m-0">

		<div class="carousel-item  active ">
			<img src="../img/index/6.jpg" class="img-fluid d-sm-none" alt="tarjeta-credifiar">
			<img src="../img/index/1.png" class="img-fluid d-none d-lg-block" alt="tarjeta-credifiar">

			<div class="carousel-caption col-md-6">
				<h2 class="font-weight-bold titulo-slider ">Solicitá tu tarjeta CREDIFIAR</h2>
				<p class="col-md-6 text-carousel-caption p-0">Mínimos requisitos</p>
				<p class="col-md-6 text-carousel-caption p-0">Beneficios todo el año</p>
				<a class="btn pildora-amarilla my-md-2 p-md-2" href="tarjeta_form.php" role="button">SOLICITALA AQUÍ</a>
			</div>
		</div> 	
	

		<div class="carousel-item   ">
			<img src="../img/index/8.png" class="img-fluid d-sm-none" alt="beneficios-tarjeta-credifiar">
			<img src="../img/index/3.png" class="img-fluid d-none d-lg-block" alt="beneficios-tarjeta-credifiar">

			<div class="carousel-caption col-md-6">
				<h2 class="font-weight-bold titulo-slider">Conocé los beneficios de Tarjeta Credifiar</h2>
				<p class="col-md-6 text-carousel-caption p-0">DESCUENTOS</p>
				<p class="col-md-6 text-carousel-caption p-0">CUOTAS SIN INTERÉS</p>
				<p class="col-md-10 text-carousel-caption p-0">+ DE 2000 COMERCIOS ADHERIDOS</p>
				<a class="btn pildora-amarilla my-md-2 p-md-2" href="index.php#promociones" role="button">CONOCELOS</a>
			</div>
		</div>

		<!-- sin texto-->
		<div class="carousel-item   ">
			<img src="../img/index/9.png" class="img-fluid d-sm-none" alt="prestamos-en-efectivo">
			<img src="../img/index/4.png" class="img-fluid d-none d-lg-block" alt="prestamos-en-efectivo">
			<div class="carousel-caption col-md-6 sintexto">
				<a class="btn pildora-amarilla my-md-2 p-md-2" href="prestamos_form.php" role="button">SOLICITALO AQUÍ</a>
			</div>
		</div>

		<div class="carousel-item   ">
			<img src="../img/index/10.png" class="img-fluid d-sm-none" alt="tarjeta-credifiar-argencard">
			<img src="../img/index/5.png" class="img-fluid d-none d-lg-block" alt="tarjeta-credifiar-argencard">

			<div class="carousel-caption col-md-6">
				<h2 class="font-weight-bold titulo-slider">Nueva tarjeta</h2>
				<h2 class="font-weight-bold subtitulo-slider">CREDIFIAR – ARGENCARD</h2>
				<p class="col-md-6 text-carousel-caption p-0">Podés comprar en más de 300.000 comercios en todo el país!</p>
				<a class="btn pildora-amarilla my-md-2 p-md-2" href="tarjeta_form.php" role="button">SOLICITALA AQUÍ</a>
			</div>
		</div>
	</div> 

	<!-- flechas -->
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<i class="fas fa-chevron-left fa-5x"></i>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<i class="fas fa-chevron-right fa-5x"></i>
		<span class="sr-only">Next</span>
	</a>
	<!-- fin flechas  -->

</div>

<!-- SOLICITAR TURNO -->
<div id="turno_index" class="container-fluid d-flex align-items-center justify-content-center p-0 m-0">
	<div class="row d-flex align-items-center text-center">
		<div class="col-md-12 my-md-5">
			<div class="jumbotron bg-transparente py-4">
				<i class="fas fa-calendar-alt fa-5x"></i>
				<h3 class="tituloVentajas">Solicita online tu turno para atención en sucursales</h3>
				<a class="btn pildora-amarilla" href="turnos.php" role="button">GESTIONAR TURNO</a>
			</div>
		</div>
	</div>
</div>

<!-- LUGARES DE PAGO -->
<div class="container-fluid  p-0 m-0 alto d-flex mb-5">
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
										<div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone BP:</a> Av. Blas Parera 7888 - Santa Fe</div>
										<div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone Recreo:</a> Ignacio Crespo 931 - Santa Fe</div>
										<div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone Helvecia:</a> Dr. Roman 840 - Santa Fe</div>
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

<!-- PROMOCIONES -->
<div class="container alto-ubicaciones d-flex" id="promociones">
	<div class="row mt-3 promociones align-content-center">
		<div class="col-12">
			<h2 class="tituloPromociones">PROMOCIONES</h2>
			<div class="row galeriaPromociones justify-content-center">

				<div class="contenedor-imagen col-md-6">
					<a href="#" data-toggle="modal" data-target="#exampleModal">
						<img src="../img/index/PromoComercio_fondo.png" class="img-fluid imagen" alt="">
						<div class="carousel-caption col-md-7 offset-md-5 pl-4">
						<h4 class="text-green" >COMERCIOS</h4>
							<p class="text-light font-weight-bold d-none d-md-block">Conocé los comercios adhridos</p>
						</div>
					</a>
				</div>
				<div class="contenedor-imagen col-md-6">
					<a href="#" data-toggle="modal" data-target="#exampleModal2">
						<img src="../img/index/PromoSuper_fondo.png" class="img-fluid imagen" alt="">
						<div class="carousel-caption col-md-7 offset-md-5 pl-4">
							<h4 class="text-green" >SUPERMERCADOS</h4>
							<p class="text-light font-weight-bold d-none d-md-block">3 cuotas sin interes y 10% de descuento</p>
						</div>
					</a>
				</div>

				<!-- Modal -->
				<!-- Completar todos los modales de promociones -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">COMERCIOS</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
								<div class="row">
									<img src="../img/1x/promocion-deporte1.png" alt="" class="img-fluid">
									<img src="../img/1x/promocion-deporte2.png" alt="" class="img-fluid">
								</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">SUPERMERCADOS</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="container">
									<div class="row">
										<img src="../img/1x/promocion-super.png" alt="" class="img-fluid">	
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<!-- UBICACIONES PARA CELULAR -->
<div class="container alto-ubicaciones d-lg-none  ">
	<div class="row d-flex justify-content-center ">
		<div class="card-deck ">

			<div class="col-12 mb-sm-3">
				<div class="card pb-4  card-border">
					<div class="card-body">
						<h5 class="card-title-ubicaciones font-weight-bold"> Casa Central</h5>
						<p class="card-text-ubicaciones p-0 m-0">1ra Junta 2675</p>
						<p class="card-text-ubicaciones p-0 m-0">3000 - Santa Fe</p>
						<p class="card-text-ubicaciones p-0 m-0">Lunes a Viernes de 8 a 17 hs</p>
						<p class="card-text-ubicaciones p-0 m-0 p-0 m-0">Sábados de 8:30 a 12:30 (los dos primeros sábados del mes)</p>
						<p class="card-text-ubicaciones p-0 m-0">Teléfono: 0342-4579300</p>

					</div>
					<div class="card-footer-ubicaciones text-muted text-center">
						<a href="https://goo.gl/maps/jenAKFo9fFkhk82y6" class="btn pildora-amarilla" target="_blank">Ubicación</a>
					</div>
				</div>
			</div>
			<div class="col-12 mb-sm-3">
				<div class="card pb-4 card-border">
					<div class="card-body">
						<h5 class="card-title-ubicaciones font-weight-bold">Sucursal Aristóbulo</h5>
						<p class="card-text-ubicaciones p-0 m-0">Av. Aristobulo del Valle 6857</p>
						<p class="card-text-ubicaciones p-0 m-0">3000 - Santa Fe</p>
						<p class="card-text-ubicaciones p-0 m-0">Lunes a Viernes de 8 a 16.30 hs</p>
						<p class="card-text-ubicaciones p-0 m-0">Sábados de 8:30 a 12:30 (los dos primeros sábados del mes)</p>
						<p class="card-text-ubicaciones p-0 m-0">Teléfono sucursal AV: 0342-4579300</p>
					</div>
					<div class="card-footer-ubicaciones text-muted text-center">
						<a href="https://goo.gl/maps/TT1Ggj52qVwvfC3b6" class="btn pildora-amarilla" target="_blank">Ubicación</a>
					</div>
				</div>
			</div>
			<div class="col-12 mb-sm-3">
				<div class="card pb-4 card-border">
					<div class="card-body">
						<h5 class="card-title-ubicaciones font-weight-bold">Sucursal Esperanza</h5>
						<p class="card-text-ubicaciones p-0 m-0">25 de Mayo 1414</p>
						<p class="card-text-ubicaciones p-0 m-0">3080 - Esperanza</p>
						<p class="card-text-ubicaciones p-0 m-0">Lunes a Viernes de 8 a 16.30 hs</p>
						<p class="card-text-ubicaciones p-0 m-0">Sábados de 8:30 a 12:30 (los dos primeros sábados del mes)</p>
						<p class="card-text-ubicaciones p-0 m-0">Teléfono sucursal Esperanza: 03496-423996</p>
					</div>
					<div class="card-footer-ubicaciones text-muted text-center">
						<a href="https://goo.gl/maps/qWwRQoseFSvujFNT8" class="btn pildora-amarilla" target="_blank">Ubicación</a>
					</div>
				</div>
			</div>
			<div class="col-12 mb-sm-3">
				<div class="card pb-4 card-border">
					<div class="card-body">
						<h5 class="card-title-ubicaciones font-weight-bold">Sucursal Ceres</h5>
						<p class="card-text-ubicaciones p-0 m-0">Av Mayo 286</p>
						<p class="card-text-ubicaciones p-0 m-0">2340 - Ceres</p>
						<p class="card-text-ubicaciones p-0 m-0">Lunes a Viernes de 8 a 16.30 hs.</p>
						<p class="card-text-ubicaciones p-0 m-0">Sábados de 8:30 a 12:30 (los dos primeros sábados del mes).</p>
						<p class="card-text-ubicaciones p-0 m-0">Teléfono sucursal Ceres: 03491-420135</p>
					</div>
					<div class="card-footer-ubicaciones text-muted  text-center">
						<a href="https://goo.gl/maps/D3acKdh8hVpoPPtT8" class="btn pildora-amarilla" target="_blank">Ubicación</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- UBICACIONES PARA RESPONSIVE -->
<div class="container-fluid alto locales d-none d-lg-block">
	<div class="row mt-3 ml-5">
		<div class="col-12 text-center">
			<h2 class="tituloComercios" id="Locales">NUESTROS LOCALES</h2>
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
					<div>Lunes a viernes de 8 a 17.</div>
					<div>Sábados de 8:30 a 12:30 (los dos primeros sábados del mes)</div>
					<div>Teléfono: 0342-4579300</div>
				</div>

				<div class="detalle-locales" id="detalle-aristobulo">
					<div><a class="font-weight-bold">Sucursal Aristobulo:</a> Av Aristobulo del Valle 6857 - Santa Fe</div>
					<div>Lunes a Viernes de 8 a 16.30 hs.</div>
					<div>Sábados de 8:30 a 12:30 (los dos primeros sábados del mes).</div>
					<div>Teléfono sucursal AV: 0342-4579300</div>
				</div>

				<div class="detalle-locales" id="detalle-ceres">
					<div><a class="font-weight-bold">Sucursal Ceres:</a> Av Mayo 286 - Ceres</div>
					<div>Lunes a Viernes de 8 a 16.30 hs.</div>
					<div>Sábados de 8:30 a 12:30 (los dos primeros sábados del mes)</div>
					<div>Teléfono sucursal Ceres: 03491-420135</div>
				</div>

				<div class="detalle-locales" id="detalle-esperanza">
					<div><a class="font-weight-bold">Sucursal Esperanza:</a> 25 de Mayo 286 - Esperanza</div>
					<div>Lunes a Viernes de 8 a 16.30 hs.</div>
					<div>Sábados de 8:30 a 12:30 (los dos primeros sábados del mes)</div>
					<div>Teléfono sucursal Esperanza: 03496-423996</div>
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
<?php
include("footer.php");
?>
     <!--JIBOCHAT-->
	 <script src="//code.jivosite.com/widget/fRSBaowTpT" async></script>
	<!--/JIBOCHAT-->