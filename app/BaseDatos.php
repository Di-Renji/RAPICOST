<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("../components/head.php"); ?>
</head>
<body>
    <?php include("../components/cabecera.php"); ?>

	<?php include("../components/config_UI.php"); ?>

	<?php include("../components/navegacion.php"); ?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>BASE DE DATOS</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="../app/Principal.php">Principal</a></li>
									<li class="breadcrumb-item active" aria-current="page">Base de Datos</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<div class="pull-right">
									<a class="btn btn-secondary" style="color:white;" onclick="imprimirPagina()" rel="content-y" role="button"> <i class="fa fa-print"> </i> Imprimir </a>
								</div>
								<script>
									function imprimirPagina() { 
										window.print(); // Esta función abre el cuadro de diálogo de impresión del navegador
									}
								</script>
							</div>
						</div>
					</div>
				</div>


                <!-- basic table  Start -->
				<div class="pd-20 card-box mb-30">
                    <h2 style="width:100%; text-align:center;color:blue;">BASE DE DATOS</h2>
				</div>
				<!-- basic table  End -->

                <!-- ETAPA DE CORTE START -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Etapa de Corte</h4>
						</div>
					</div>

					<?php
						include("../config/conexion.php");
					?>
					
					<div class="table-responsive">
					<table class="table table-dark" style="color:black; border: 1px solid">
						<thead>
							<tr style="background-color:#93BCFF; color: black; border: 2px solid black;">
								<th scope="col">ID</th>
								<th scope="col">DETALLE</th>
								<th scope="col">UNID. MEDIDA</th>
								<th scope="col">CANTIDAD</th>
								<th scope="col">PRECIO</th>
                                <th scope="col">IMPORTE</th>
							</tr>
						</thead>
						<tbody>
							<?php
							
								$sql = "SELECT * FROM corte";
								$result = $conn->query($sql);
								$totalImporte = 0;

								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo "<tr style='background-color:#EBF0F7;'>";
										echo "<td>" . $row["id_co"] . "</td>";
										echo "<td>" . $row["detalle_co"] . "</td>";
										echo "<td>" . $row["unidad_co"] . "</td>";
										echo "<td>" . $row["cantidad_co"] . "</td>";
										echo "<td>" . $row["precio_co"] . "</td>";                                                    
										echo "<td>" . $row["importe_co"] . "</td>";										
										echo "</tr>";

										// Sumar el importe
        								$totalImporte += $row["importe_co"];
									}
								} else {
									echo "<tr><td style='color:white'>No se encontraron registros.</td></tr>";
								}

								$conn->close();
							?>							
							
						</tbody>
					</table>
					</div>

					<br>
					<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label" style="font-size:15px; font-weight: bold; font-style: italic;">TOTAL DE IMPORTE (S/.) :</label>
							<div class="col-sm-12 col-md-9">
								<input class="form-control" type="number" value="<?php echo $totalImporte ?>" style="background-color:#FF8989; color:black; font-size:20px; text-align:center;" readonly="readonly" >
							</div>
					</div>
					
				</div>
				<!-- ETAPA DE CORTE END  -->

               
                <!-- ETAPA DE PERFILADO START -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Etapa de Perfilado</h4>
						</div>
					</div>

					<?php
						include("../config/conexion.php");
					?>

					<div class="table-responsive">
					<table class="table table-dark" style="color:black; border: 1px solid">
						<thead>
							<tr style="background-color:#93BCFF; color: black; border: 2px solid black;">
								<th scope="col">ID</th>
								<th scope="col">DETALLE</th>
								<th scope="col">UNID. MEDIDA</th>
								<th scope="col">CANTIDAD</th>
								<th scope="col">PRECIO</th>
                                <th scope="col">IMPORTE</th>
							</tr>
						</thead>
						<tbody>
							<?php
							
								$sql = "SELECT * FROM perfilado";
								$result = $conn->query($sql);
								$totalImporte = 0;

								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo "<tr style='background-color:#EBF0F7;'>";
										echo "<td>" . $row["id_pe"] . "</td>";
										echo "<td>" . $row["detalle_pe"] . "</td>";
										echo "<td>" . $row["unidad_pe"] . "</td>";
										echo "<td>" . $row["cantidad_pe"] . "</td>";
										echo "<td>" . $row["precio_pe"] . "</td>";                                                    
										echo "<td>" . $row["importe_pe"] . "</td>";										
										echo "</tr>";

										// Sumar el importe
        								$totalImporte += $row["importe_pe"];
									}
								} else {
									echo "<tr><td style='color:white'>No se encontraron registros.</td></tr>";
								}

								$conn->close();
							?>							
							
						</tbody>
					</table>
					</div>

					<br>
					<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label" style="font-size:15px; font-weight: bold; font-style: italic;">TOTAL DE IMPORTE (S/.) :</label>
							<div class="col-sm-12 col-md-9">
								<input class="form-control" type="number" value="<?php echo $totalImporte ?>" style="background-color:#FF8989; color:black; font-size:20px; text-align:center;" readonly="readonly" >
							</div>
					</div>
					
				</div>
				<!-- ETAPA DE PERFILADO END  -->



				<!-- ETAPA DE ARMADO START -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Etapa de Armado</h4>
						</div>
					</div>

					<?php
						include("../config/conexion.php");
					?>

					<div class="table-responsive">
					<table class="table table-dark" style="color:black; border: 1px solid">
						<thead>
							<tr style="background-color:#93BCFF; color: black; border: 2px solid black;">
								<th scope="col">ID</th>
								<th scope="col">DETALLE</th>
								<th scope="col">UNID. MEDIDA</th>
								<th scope="col">CANTIDAD</th>
								<th scope="col">PRECIO</th>
                                <th scope="col">IMPORTE</th>
							</tr>
						</thead>
						<tbody>
							<?php
							
								$sql = "SELECT * FROM armado";
								$result = $conn->query($sql);
								$totalImporte = 0;

								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo "<tr style='background-color:#EBF0F7;'>";
										echo "<td>" . $row["id_ar"] . "</td>";
										echo "<td>" . $row["detalle_ar"] . "</td>";
										echo "<td>" . $row["unidad_ar"] . "</td>";
										echo "<td>" . $row["cantidad_ar"] . "</td>";
										echo "<td>" . $row["precio_ar"] . "</td>";                                                    
										echo "<td>" . $row["importe_ar"] . "</td>";										
										echo "</tr>";

										// Sumar el importe
        								$totalImporte += $row["importe_ar"];
									}
								} else {
									echo "<tr><td style='color:white'>No se encontraron registros.</td></tr>";
								}

								$conn->close();
							?>							
							
						</tbody>
					</table>
					</div>

					<br>
					<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label" style="font-size:15px; font-weight: bold; font-style: italic;">TOTAL DE IMPORTE (S/.) :</label>
							<div class="col-sm-12 col-md-9">
								<input class="form-control" type="number" value="<?php echo $totalImporte ?>" style="background-color:#FF8989; color:black; font-size:20px; text-align:center;" readonly="readonly" >
							</div>
					</div>
					
				</div>
				<!-- ETAPA DE ARMADO END  -->


				<!-- ETAPA DE ACABADO START -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Etapa de Acabado</h4>
						</div>
					</div>

					<?php
						include("../config/conexion.php");
					?>

					<div class="table-responsive">
					<table class="table table-dark" style="color:black; border: 1px solid">
						<thead>
							<tr style="background-color:#93BCFF; color: black; border: 2px solid black;">
								<th scope="col">ID</th>
								<th scope="col">DETALLE</th>
								<th scope="col">UNID. MEDIDA</th>
								<th scope="col">CANTIDAD</th>
								<th scope="col">PRECIO</th>
                                <th scope="col">IMPORTE</th>
							</tr>
						</thead>
						<tbody>
							<?php
							
								$sql = "SELECT * FROM acabado";
								$result = $conn->query($sql);
								$totalImporte = 0;

								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo "<tr style='background-color:#EBF0F7;'>";
										echo "<td>" . $row["id_ac"] . "</td>";
										echo "<td>" . $row["detalle_ac"] . "</td>";
										echo "<td>" . $row["unidad_ac"] . "</td>";
										echo "<td>" . $row["cantidad_ac"] . "</td>";
										echo "<td>" . $row["precio_ac"] . "</td>";                                                    
										echo "<td>" . $row["importe_ac"] . "</td>";										
										echo "</tr>";

										// Sumar el importe
        								$totalImporte += $row["importe_ac"];
									}
								} else {
									echo "<tr><td style='color:white'>No se encontraron registros.</td></tr>";
								}

								$conn->close();
							?>							
							
						</tbody>
					</table>
					</div>
					
					<br>
					<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label" style="font-size:15px; font-weight: bold; font-style: italic;">TOTAL DE IMPORTE (S/.) :</label>
							<div class="col-sm-12 col-md-9">
								<input class="form-control" type="number" value="<?php echo $totalImporte ?>" style="background-color:#FF8989; color:black; font-size:20px; text-align:center;" readonly="readonly" >
							</div>
					</div>
					
				</div>
				<!-- ETAPA DE ACABADO END  -->
            



			</div>
			
			<?php include("../components/footer.php"); ?>

		</div>
	</div>

	<?php include("../components/scripts.php"); ?>
</body>
</html>