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
								<h4>ETAPA DE CORTE</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="../app/Principal">Principal</a></li>
									<li class="breadcrumb-item active" aria-current="page">Etapa de Corte</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<div class="pull-right">
									<a class="btn btn-info" style="color:white;margin-right:5px;" onclick="imprimirPagina()" rel="content-y" role="button"> <i class="fa fa-print"> </i> Imprimir </a>
								</div>
								<div class="pull-right">
									<form method="post">
										<input type="submit" name="limpiar" value="Limpiar" class="btn btn-secondary" style="color:white;margin-right:5px;">
									</form>									
								</div>
								<div class="pull-right">
									<a href="../app/CorteRegistrar" class="btn btn-success" rel="content-y" role="button" style="color:white;margin-right:5px;"> <i class="fa fa-file-text"> </i> Registrar </a>
								</div> 
								<script>
									function imprimirPagina() { 
										window.print();
									}
								</script>
							</div>
						</div>
					</div>
				</div>


                <!-- basic table  Start -->
				<div class="pd-20 card-box mb-30">
                    <h2 style="width:100%; text-align:center;color:blue;">ETAPA DE CORTE</h2> <br>
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Detalle de Registros</h4>
							<p>Si desea agregar un nuevo registro, haga Click en el botón "Registrar" </p>
						</div>					
					</div>

					<?php						
						include("../config/conexion.php");

						// Función para limpiar la tabla
						function limpiarTabla($conn)
						{
							$query = "DELETE FROM corte";
							if (mysqli_query($conn, $query)) {
								echo "
								<div class='alert alert-warning alert-dismissible fade show' role='alert'>
									<strong>ADVERTENCIA !!! </strong> Todos los registros fueron eliminados. Vuelve a añadir nuevos registros.
									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
									</button>
								</div>
								";							
							} else {
								echo "Error al eliminar los registros: " . mysqli_error($conn);
							}
						}

						// Verificar si se hizo clic en el botón Limpiar
						if (isset($_POST['limpiar'])) {
							limpiarTabla($conn);
						}						
					?>


					<?php
						include("../config/conexion.php");

						 // Eliminar un registro
						 if (isset($_GET['delete'])) {
							$id = $_GET['delete'];
							$sql = "DELETE FROM corte WHERE id_co=$id";
	
							if ($conn->query($sql) === TRUE) {
								// echo "<p>Sesion eliminado exitosamente.</p>";
							} else {
								// echo "Error al eliminar el Sesion: " . $conn->error;
							}
						}

					?>

					<div class="table-responsive">
					<table class="table table-dark" style="color:black; border: 1px solid">
						<thead>
							<tr style="background-color:#06113E; color: white; border: 2px solid black;">
								<th scope="col" style="color:white">ID</th>
								<th scope="col" style="color:white">Detalle</th>
								<th scope="col" style="color:white">Unid. Medida</th>
								<th scope="col" style="color:white">Cantidad</th>
								<th scope="col" style="color:white">Precio</th>
                                <th scope="col" style="color:white">Importe</th>
                                <th scope="col" style="color:white">Acción</th>
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
										echo "<td>
												<a href='../app/CorteEditar?id_co=" . $row["id_co"] . "' class='btn btn-warning' style='color:white' role='button'>
													Editar
												</a>
												<a href='../app/Corte?delete=" . $row["id_co"] . "' onclick='return confirm(\"¿Estás seguro de eliminar este registro?\")' class='btn btn-danger' role='button'>
													Eliminar
												</a>
											</td>";
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
				<!-- basic table  End -->



			</div>
			
			<?php include("../components/footer.php"); ?>

		</div>
	</div>

	<?php include("../components/scripts.php"); ?>
</body>
</html>