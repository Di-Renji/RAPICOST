<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("../components/head.php"); ?>
</head>
<body>

	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo" style="width:100%; text-align:center;"><img src="../vendors/images/logos/logo3.png" alt="" style="width:40%"></div><br><br>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div><br>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Cargando ...
			</div>
		</div>
	</div>
	
    <?php include("../components/cabecera.php"); ?>

	<?php include("../components/config_UI.php"); ?>

	<?php include("../components/navegacion.php"); ?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30" style="background-color:#A0E3F5; ">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="../vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Bienvenido <div class="weight-600 font-30 text-blue">Joel L.A.</div>
						</h4>
						<p class="font-18 max-width-600">La aplicación web RAPICOST, un proyecto hecho por los alumnos del 6° periodo del programa de Contabilidad del IESTP Florencia de Mora, te ayuda a calcular de manera rápida los costos de producción en la fabricación de calzado. </p>
					</div>
				</div>
			</div>

			<?php
				// ---------------- SCRIPT ETAPA DE COSTOS -------------------
				include("../config/conexion.php");
				// Consulta SQL para obtener la suma de la columna "importe_co"
				$sql = "SELECT SUM(importe_co) AS suma_importe FROM corte";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// Existe al menos una fila de resultado
					$row = $result->fetch_assoc();
					$suma_importe = $row["suma_importe"];
				} else {
					// No hay resultados
					$suma_importe = 0;
				}
				// Cerrar la conexión
				$conn->close();
			?>

			<?php
				// ---------------- SCRIPT ETAPA DE PEFILADO -------------------
				include("../config/conexion.php");
				// Consulta SQL para obtener la suma de la columna "importe_pe"
				$sql2 = "SELECT SUM(importe_pe) AS suma_importe FROM perfilado";
				$result2 = $conn->query($sql2);

				if ($result2->num_rows > 0) {
					// Existe al menos una fila de resultado
					$row = $result2->fetch_assoc();
					$suma_importe2 = $row["suma_importe"];
				} else {
					// No hay resultados
					$suma_importe2 = 0;
				}
				// Cerrar la conexión
				$conn->close();
			?>

			<?php
				// ---------------- SCRIPT ETAPA DE ARMADO -------------------
				include("../config/conexion.php");
				// Consulta SQL para obtener la suma de la columna "importe_ar"
				$sql3 = "SELECT SUM(importe_ar) AS suma_importe FROM armado";
				$result3 = $conn->query($sql3);

				if ($result3->num_rows > 0) {
					// Existe al menos una fila de resultado
					$row = $result3->fetch_assoc();
					$suma_importe3 = $row["suma_importe"];
				} else {
					// No hay resultados
					$suma_importe3 = 0;
				}
				// Cerrar la conexión
				$conn->close();
			?>

			<?php
				// ---------------- SCRIPT ETAPA DE AACABADO -------------------
				include("../config/conexion.php");
				// Consulta SQL para obtener la suma de la columna "importe_ar"
				$sql4 = "SELECT SUM(importe_aC) AS suma_importe FROM acabado";
				$result4 = $conn->query($sql4);

				if ($result4->num_rows > 0) {
					// Existe al menos una fila de resultado
					$row = $result4->fetch_assoc();
					$suma_importe4 = $row["suma_importe"];
				} else {
					// No hay resultados
					$suma_importe4 = 0;
				}
				// Cerrar la conexión
				$conn->close();
			?>

			


			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1" style="background-color:#000E9B; color:white;">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<img src="../vendors/images/etapas/etapa1.png" width="70" height="70" alt="">
							</div>
							<div class="widget-data">
								<div class="h4 mb-0" style="color:white;">S/. <?php echo $suma_importe; ?></div>
								<div class="weight-600 font-14">Etapa de CORTE</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1" style="background-color:#9B0202; color:white;">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<img src="../vendors/images/etapas/etapa2.png" width="70" height="70" alt="">
							</div>
							<div class="widget-data">
								<div class="h4 mb-0" style="color:white;">S/. <?php echo $suma_importe2; ?></div>
								<div class="weight-600 font-14">Etapa de PERFILADO</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1" style="background-color:#90007C; color:white;">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<img src="../vendors/images/etapas/etapa3.png" width="70" height="70" alt="">
							</div>
							<div class="widget-data">
								<div class="h4 mb-0" style="color:white;">S/. <?php echo $suma_importe3; ?></div>
								<div class="weight-600 font-14">Etapa de ARMADO</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1" style="background-color:#00521B; color:white;">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<img src="../vendors/images/etapas/etapa4.png" width="70" height="70" alt="">
							</div>
							<div class="widget-data">
								<div class="h4 mb-0" style="color:white;">S/. <?php echo $suma_importe4; ?></div>
								<div class="weight-600 font-14">Etapa de ACABADO</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="row">				
				<!-- With captions -->
				<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
					<div class="card-box mb-30">
						<div class="clearfix pd-20">
							<div class="pull-left">
								<h4 class="h4">Todas las Etapas</h4>
							</div>							
						</div>
						<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="../vendors/images/etapas/carrusel1.jpg" alt="First slide" />
									<div class="carousel-caption d-none d-md-block">
										<h5 class="color-white">Etapa de CORTE</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="../vendors/images/etapas/carrusel2.jpg" alt="Second slide" />
									<div class="carousel-caption d-none d-md-block">
										<h5 class="color-white">Etapa de Perfilado</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="../vendors/images/etapas/carrusel3.jpg" alt="Third slide" />
									<div class="carousel-caption d-none d-md-block">
										<h5 class="color-white">Etapa de Armado</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="../vendors/images/etapas/carrusel4.jpg" alt="Four slide" />
									<div class="carousel-caption d-none d-md-block">
										<h5 class="color-white">Etapa de Acabado</h5>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>							
					</div>
				</div>
				<!-- With indicators -->
				<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
					<div class="card-box mb-30">
						<div class="clearfix pd-20">
							<div class="pull-left">
								<h4 class="h4">Nuestros Calzados</h4>
							</div>
						</div>
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="../vendors/images/etapas/zapato1.png" alt="First slide">
									<div class="carousel-caption d-none d-md-block">
										<h6 class="color-white">Zapatilla Unisex - modelo Z013</h6>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="../vendors/images/etapas/zapato2.png" alt="Second slide">
									<div class="carousel-caption d-none d-md-block">
										<h6 class="color-white">Calzado Dama - modelo Z403</h6>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="../vendors/images/etapas/zapato3.png" alt="Third slide">
									<div class="carousel-caption d-none d-md-block">
										<h6 class="color-white">Zapatillas Deportivas - modelo Z16</h6>
									</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="../vendors/images/etapas/zapato4.png" alt="Four slide">
									<div class="carousel-caption d-none d-md-block">
										<h6 class="color-white">Calzado Dama - modelo Z992</h6>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						
					</div>
				</div>
			</div>
				
			
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">TODOS LOS PRODUCTOS</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th>Producto</th>
							<th>Detalle</th>
							<th>Color</th>
							<th>Talla</th>
							<th>Precio</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table-plus">
								<img src="../vendors/images/product-2.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Modelo Z1DM</h5>
								Calzado Caballero
							</td>
							<td>negro</td>
							<td>38</td>
							<td>S/. 78.90</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="../vendors/images/product-3.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Modelo SZ0R</h5>
								Calzado Dama
							</td>
							<td>Crema</td>
							<td>36</td>
							<td>S/. 120.99</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="../vendors/images/product-4.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Modelo ZW96</h5>
								Calzado Dama
							</td>
							<td>Blanco</td>
							<td>36</td>
							<td>S/. 156.90</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="../vendors/images/product-5.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Modelo CV2277</h5>
								Calzado Dama
							</td>
							<td>Negro</td>
							<td>37</td>
							<td>S/. 230.99</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			


			<?php include("../components/footer.php"); ?>

		</div>
	</div>
	<?php include("../components/scripts.php"); ?>
</body>
</html>