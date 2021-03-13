
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="../img/1x/logo.png" />
		<title>CREDIFIAR S.A.</title>
		<!-- LINK DE CSS !-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- LINK DE ESTILO DE GOOGLE FONT -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/fontello.css">
		<link rel="stylesheet" href="../css/estilos.css">

   
		  
	</head>

	<body>
		<header>
			<!-- barra principal   -->
			<nav class="navbar navbar-expand-lg  navbar-light  fixed-top navbarSup py-3 px-1">
				<a class="navbar-brand" href="index.php">
					<img src="../img/index/credifiar-logo.png" class="img-fluid" alt="credifiar-logo">
				</a>
				<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>	  
                <div class="collapse navbar-collapse  " id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto  w-100 justify-content-between">

						<li class="nav-item nav-text">
							<a class="nav-link" id="desplegable" href="index.php">Inicio <span class="sr-only">(current)</span></a>
						</li>

						<!-- nosotros -->
						<li class="nav-item dropdown open bg-transparent">
						<button class="btn bg-transparent px-0" type="button" id="desplegable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nosotros</button>

							<div class="dropdown-menu bg-desplegable">
								<a class="dropdown-item" href="empresa.php#laempresa">La Empresa</a>
								<a class="dropdown-item" href="sucursal.php#lugaresycentrosdecobro">Sucursales</a>
                                <a class="dropdown-item" href="sucursal.php#lugaresPago">Puntos de Pago</a>
                                <a class="dropdown-item" href="enviar_cv.php">Trabaja con nosotros</a>
							</div>
						</li>
						
						<!-- cliente -->
                        <li class="nav-item dropdown open bg-transparent">
                            <button class="btn bg-transparent px-0" type="button" id="desplegable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cliente</button>
                                                       
                            <ul class="dropdown-menu bg-desplegable" role="menu" aria-labelledby="desplegable">
								<div class="col-md-12 d-md-flex flex-row">
									<div class="col-md-6">
										<li role="presentation" class="dropdown-header">Turnos</li>
										<li><a class="dropdown-item" tabindex="-1" href="turnos.php">Solicita un turno</a></li>
										<li role="presentation" class="dropdown-header">Tarjeta Crédito</li>
										<li><a class="dropdown-item" tabindex="-1" href="https://www.infotarjetas.com.ar/login.aspx?tid=28" >Ingresa a tu Cuenta</a></li>										
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#solicita_tarjeta" >Solicitá tu Tarjeta</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#requisitos_tarjeta" >Requisitos</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="comercio_tarjeta.php" >Comercios Adheridos</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#lugaresPago" >Lugares y Medios de Pago</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#resumen_tarjeta" >Resumen de Tarjeta</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#beneficios_tarjeta" >Beneficios</a></li>
										<li role="presentation" class="divider"></li>
									</div> 

									<div class="col-md-6">
										<li role="presentation" class="dropdown-header">Préstamos Personales</li>
										<li><a class="dropdown-item" tabindex="-1" href="prestamos_personales.php">Pedí tu Péstamo</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="prestamos_personales.php#requisitos_prestamo">Requisitos</a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation" class="dropdown-header">Créditos de Consumo</li>
										<li><a class="dropdown-item" tabindex="-1" href="credito_consumo.php">Requisitos</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="comercios_consumo.php">Comericios Adheridos</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="credito_consumo.php#lugaresPago">Lugares y Medios de Pago</a></li>
									</div>
								</div>
                            </ul>
                        </li>                     
						
						<!-- comercio -->
						<li class="nav-item dropdown open bg-transparent">
							<button class="btn bg-transparent px-0" type="button" id="desplegable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comercio</button>

							<div class="dropdown-menu bg-desplegable">
								<a class="dropdown-item" tabindex="-1" target="_Blank" href="https://www.infotarjetas.com.ar/login.aspx?tid=28" >Ingresa a tu Cuenta</a>	
                                <a class="dropdown-item" href="comercio.php#trabaja_comercio">Adherite a Credifiar</a>
                                <a class="dropdown-item" href="comercio.php#requisitos_comercio">Planes de Cuota</a>
							</div>
						</li>

                        <!-- centro de ayuda -->
						<li class="nav-item dropdown open bg-transparent">
							<button class="btn bg-transparent px-0" type="button" id="desplegable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Centro de Ayuda</button>

							<div class="dropdown-menu bg-desplegable">
								<a class="dropdown-item" href="centro_ayuda.php">Preguntas Frecuentes</a>
								<a class="dropdown-item" href="contacto.php">Contactanos</a>
							</div>
						</li>
						<li class="nav-item nav-text">
							<a type="button" class="btn btn-outline-light btn-outline-light-top border border-white font-weight-bold" id="btn-ingreso" href="tarjeta.php#resumen_tarjeta">TU RESUMEN <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item">
							
						</li>
					</ul>


        		</div>

			</nav>	  
        </header>