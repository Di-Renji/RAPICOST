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
								<h4>ETAPA DE PERFILADO</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="../app/Principal">Principal</a></li>
                                    <li class="breadcrumb-item"><a href="../app/Perfilado">Etapa de Perfilado</a></li>
									<li class="breadcrumb-item active" aria-current="page">Agregar Registro</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Septiembre 2023
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>

                <?php
                    include("../config/conexion.php");
                
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar"])) {
                        // Recuperar valores del formulario
                        $detalle = $_POST["txtDetallePe"];
                        $unidad = $_POST["txtUnidadPe"];
                        $cantidad = $_POST["txtCantidadPe"];
                        $precio = $_POST["txtPrecioPe"];
                        $importe = $_POST["txtImportePe"];
                    
                        // Consulta SQL para insertar los datos en la tabla "perfilado"
                        $sql = "INSERT INTO perfilado (detalle_pe, unidad_pe, cantidad_pe, precio_pe, importe_pe) 
                                VALUES ('$detalle', '$unidad', $cantidad, $precio, $importe)";
                    
                        if ($conn->query($sql) === TRUE) {
                            echo "
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong>REGISTRO EXITOSO !!! </strong>  Puedes verificar el registro en la Base de Datos.
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                ";
                        } else {
                            echo "
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>REGISTRO FALLIDO !!! </strong>  Puedes verificar el registro en la Base de Datos.
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                            " . $conn->error;
                        }
                    }

                ?>


                <!-- FORMULARIO Start -->
				<div class="pd-20 card-box mb-30">
                    <h2 style="width:100%; text-align:center;color:blue;">AGREGAR REGISTRO </h2> <br>
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Formulario de Registro</h4>
							<p>Rellene los campos de la primera seccion para calcular el Importe, luego registre en la Base de Datos </p>
						</div>
						<div class="pull-right">
							<a href="../app/Perfilado" class="btn btn-primary" rel="content-y" role="button"> <i class="fa fa-mail-reply"> </i> Regresar a Detalle de Perfilado</a>
						</div>
					</div>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">						
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Detalle :</label>
									<input type="text" name="txtDetallePe" class="form-control">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Unidad de Medida :</label>
									<input type="text" name="txtUnidadPe" class="form-control">
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Cantidad :</label>
									<input type="text" name="txtCantidadPe" id="txtCantidadPe" class="form-control">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Precio (S/.) :</label>
									<input type="text" name="txtPrecioPe" id="txtPrecioPe" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input type="button" value="Calcular Importe" onclick="CalcularImportePerfilado()" class="btn btn-info mr-2" style="width:100%; border-radius:20px;">
								</div>
							</div>
						</div>
                        <script>
                            function CalcularImportePerfilado(){
                                var cantidad = Number(document.getElementById("txtCantidadPe").value);
                                var precio = Number(document.getElementById("txtPrecioPe").value);
                                var importe = cantidad * precio ;
                                document.getElementById("txtImportePe").value = importe.toFixed(2);
                            }
                        </script>
                        
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Importe (S/.) :</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" name="txtImportePe" id="txtImportePe" readonly="readonly">
							</div>
						</div><br>
                        

                        <div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input type="submit" name="registrar" value="Registrar en Base de Datos" class="btn btn-success mr-2" style="width:100%; border-radius:20px;">
								</div>
							</div>
						</div>                        
					</form>
				</div>
				<!-- FORMULARIO  End -->



			</div>
			
			<?php include("../components/footer.php"); ?>

		</div>
	</div>

	<?php include("../components/scripts.php"); ?>
</body>
</html>