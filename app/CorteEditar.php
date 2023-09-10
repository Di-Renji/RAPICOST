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
                                    <li class="breadcrumb-item"><a href="../app/Corte">Etapa de Corte</a></li>
									<li class="breadcrumb-item active" aria-current="page">Editar Registro</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Setiembre 2023
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

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Obtener los datos del formulario
                        $id = $_POST["txtIdCo"];
                        $detalle = $_POST["txtDetalleCo"];
                        $unidad = $_POST["txtUnidadCo"];
                        $cantidad = $_POST["txtCantidadCo"];
                        $precio = $_POST["txtPrecioCo"];
                        $importe = $_POST["txtImporteCo"];

                        // Actualizar el registro en la base de datos
                        $sql = "UPDATE corte SET detalle_co='$detalle', unidad_co='$unidad', cantidad_co='$cantidad', precio_co='$precio', importe_co='$importe' WHERE id_co='$id'";
                        
                        if ($conn->query($sql) === TRUE) {
                            echo "
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>ACTUALIZACIÓN EXITOSA !!! </strong>  Puedes verificar el registro en la Base de Datos.
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            ";
                        } else {
                            echo "
                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>ACTUALIZACIÓN FALLIDA !!! </strong>  Puedes verificar los datos del formulario.
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                        "  . $conn->error;
                        }
                    }

                    // Comprobar si se ha enviado el formulario antes de intentar acceder a $_GET["id_co"]
                    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_co"])) {
                        $id = $_GET["id_co"];
                        $sql = "SELECT * FROM corte WHERE id_co='$id'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $id = $row["id_co"];
                            $detalle = $row["detalle_co"];
                            $unidad = $row["unidad_co"];
                            $cantidad = $row["cantidad_co"];
                            $precio = $row["precio_co"];
                            $importe = $row["importe_co"];
                        } else {
                            echo "No se encontró el Registro!!!!!!!!!";
                            exit();
                        }
                    }
                ?>               

                <!-- FORMULARIO Start -->
				<div class="pd-20 card-box mb-30">
                    <h2 style="width:100%; text-align:center;color:blue;">EDITAR REGISTRO </h2> <br>
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Formulario de Registro</h4>
							<p>Rellene los campos de la primera seccion para calcular el Importe, luego Actualice el registro </p>
						</div>
						<div class="pull-right">
							<a href="../app/Corte" class="btn btn-primary" rel="content-y" role="button"> <i class="fa fa-mail-reply"> </i> Regresar a Detalle de Corte</a>
						</div>
					</div>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">	
                        <div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>ID :</label>
									<input type="text" name="txtIdCo" value='<?php echo $id; ?>' class="form-control">
								</div>
							</div>
							
						</div>					
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Detalle :</label>
									<input type="text" name="txtDetalleCo" value='<?php echo $detalle; ?>' class="form-control">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Unidad de Medida :</label>
									<input type="text" name="txtUnidadCo"  value='<?php echo $unidad; ?>' class="form-control">
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Cantidad :</label>
									<input type="text" name="txtCantidadCo"  value='<?php echo $cantidad; ?>' id="txtCantidadCo" class="form-control">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Precio (S/.) :</label>
									<input type="text" name="txtPrecioCo"  value='<?php echo $precio; ?>' id="txtPrecioCo" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input type="button" value="Calcular Importe" onclick="CalcularImporteCorte()" class="btn btn-info mr-2" style="width:100%; border-radius:20px;">
								</div>
							</div>
						</div>
                        <script>
                            function CalcularImporteCorte(){
                                var cantidad = Number(document.getElementById("txtCantidadCo").value);
                                var precio = Number(document.getElementById("txtPrecioCo").value);
                                var importe = cantidad * precio ;
                                document.getElementById("txtImporteCo").value = importe.toFixed(2);
                            }
                        </script>
                        
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Importe (S/.) :</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number"  value='<?php echo $importe; ?>' name="txtImporteCo" id="txtImporteCo" readonly="readonly">
							</div>
						</div><br>
                        

                        <div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input type="submit" name="actualizar" value="Actualizar en Base de Datos" class="btn btn-success mr-2" style="width:100%; border-radius:20px;">
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