
<?php

include ("nav.php");

?>
	
        <div class="container m-superior">
          	<div class="row mt-3 pb-5">
				<div class="col-12 text-center">
					<h3 class="text" style="font-size: 2rem;">Completá los datos y accedé a tu resumen!</h3>
				</div>
				<div class="col-12 col-md-8 offset-md-2 py-5 rounded px-5">
					<form action="">
						<div class="row">
							<div class="form-group col-6">
								<label for="">DNI</label>
								<input type="text" class="form-control shadow-sm">
							</div>
							<div class="form-group col-6">
								<label for="exampleFormControlSelect1">Sexo</label>
								<select class="form-control" id="exampleFormControlSelect1">
								<option>Masculino</option>
								<option>Femenino</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-12 text-center mt-4">
								<button class="btn btn-primary btn-primary">Mostrar Resumen</button>
							</div>
						</div>
					</form>
					<div class="card col-12 mt-5">
						<div class="card-footer-ubicaciones text-muted text-center" >
							<ul class="list-group list-group-flush"> 	
								<li class="list-group-item">Una vez que saques tu turno, recibirás por mail un comprobante en PDF que te servirá para circular en la vía pública y presentar en la sucursal.</li>
							</ul>
						</div>
					</div>
				</div>
        	</div>
    	</div>
	


<?php

include ("footer.php");

?>