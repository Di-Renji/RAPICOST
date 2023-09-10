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
								<h4>OPERACIONES</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="../app/Principal.php">Principal</a></li>
									<li class="breadcrumb-item active" aria-current="page">Operaciones</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<div class="pull-right">
									<a class="btn btn-info" style="color:white;margin-right:5px;" onclick="imprimirPagina()" rel="content-y" role="button"> <i class="fa fa-print"> </i> Imprimir </a>
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

				<form action="../app/Reporte" method="POST">
					<!-- FORMULARIO GENERALIDADES Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h3 class="text-blue h2">GENERALIDADES DE OPERACIÓN</h3>
							</div>
						</div>
											
							<div class="row">
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>Fecha :</label>
										<input class="form-control date-picker" id="txtFecha" name="txtFecha" placeholder="Seleccione una Fecha">
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>Hora :</label>
										<input class="form-control time-picker" id="txtHora" name="txtHora" placeholder="Select time" type="text">
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>Categoria :</label>
										<select class="custom-select col-12" id="txtCategoria" name="txtCategoria">
											<option selected="">- Seleccione categoría -</option>
											<option value="Caballero">Calzado Caballero</option>
											<option value="Dama">Calzado Dama</option>
											<option value="Niños">Calzado Niños</option>
										</select>									
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>Modelo :</label>
										<input type="text" id="txtModelo" name="txtModelo" class="form-control">
									</div>
								</div>
							</div>

							<div class="row">
								
							</div>
						
					</div>
					<!-- FORMULARIO GENERALIDADES End -->
					
					<!-- FORMULARIO COSTOS DIRECTOS Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h3 class="text-blue h2">REGISTRO DE COSTOS DIRECTOS DE PRODUCCIÓN</h3>
							</div>
							<div class="pull-right">
								<a href="" class="btn btn-warning" rel="content-y" role="button"> <i class="fa fa-exclamation-triangle"> </i> Por Etapas </a>								
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
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>ETAPA DE CORTE :</label>
										<input type="text" id="txtCorte" name="txtCorte" value="<?php echo $suma_importe; ?>" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>ETAPA DE PERFILADO :</label>
										<input type="text" id="txtPerfilado" name="txtPerfilado" value="<?php echo $suma_importe2; ?>" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>ETAPA DE ARMADO :</label>
										<input type="text" id="txtArmado"  name="txtArmado" value="<?php echo $suma_importe3; ?>" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>ETAPA DE ACABADO :</label>
										<input type="text" id="txtAcabado" name="txtAcabado" value="<?php echo $suma_importe4; ?>" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
							</div>							
							
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<input type="button" value="Guardar CDP" onclick="GuardarCostosDirectos()" class="btn btn-info mr-2" style="width:100%; border-radius:20px;">
									</div>
								</div>
							</div>
							<script>
								function GuardarCostosDirectos(){
									var corte = Number(document.getElementById("txtCorte").value);
									var perfilado = Number(document.getElementById("txtPerfilado").value);
									var armado = Number(document.getElementById("txtArmado").value);
									var acabado = Number(document.getElementById("txtAcabado").value);
									var totalCD = corte + perfilado + armado + acabado;
									document.getElementById("txtCTDirecto").value = totalCD.toFixed(2);
								}
							</script>

							<?php
								$costosDP = $suma_importe + $suma_importe2 + $suma_importe3 + $suma_importe4;
							?>
							
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">TOTAL (S/.) :</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control"  value="<?php echo $costosDP; ?>" type="number" id="txtCostosDP" name="txtCostosDP" readonly="readonly" style="text-align:center;">
								</div>
							</div>  
						
					</div>
					<!-- FORMULARIO COSTOS DIRECTOS End -->

					<!-- FORMULARIO COSTOS INDIRECTOS Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h3 class="text-blue h2">REGISTRO DE COSTOS INDIRECTOS DE PRODUCCIÓN</h3>
							</div>							
						</div>											
							<div class="row">
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<label>Luz Elétrica :</label>
										<input type="text" id="txtLuz" name="txtLuz" class="form-control" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<label>Internet :</label>
										<input type="text" id="txtInternet" name="txtInternet" class="form-control" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<label>Personal Administrativo :</label>
										<input type="text" id="txtPerAdm" name="txtPerAdm" class="form-control" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<label>Personal Ventas :</label>
										<input type="text" id="txtPerVen" name="txtPerVen" class="form-control" style="text-align:center;">
									</div>
								</div>
							</div>							
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label>Movilidad :</label>
										<input type="text" id="txtMovilidad" name="txtMovilidad" class="form-control" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label>Depreciación (Equipos) :</label>
										<input type="text" id="txtDepreciacion" name="txtDepreciacion" class="form-control" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label>Gastos Financieros :</label>
										<input type="text" id="txtGastos" name="txtGastos" class="form-control" style="text-align:center;">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<input type="button" value="Guardar CIP" onclick="GuardarCostosIndirectos()" class="btn btn-info mr-2" style="width:100%; border-radius:20px;">
									</div>
								</div>
							</div>
							<script>
								function GuardarCostosIndirectos(){
									var luz = Number(document.getElementById("txtLuz").value);
									var internet = Number(document.getElementById("txtInternet").value);
									var personalAdm = Number(document.getElementById("txtPerAdm").value);
									var personalVen = Number(document.getElementById("txtPerVen").value);
									var movilidad = Number(document.getElementById("txtMovilidad").value);
									var depreciacion = Number(document.getElementById("txtDepreciacion").value);
									var gastos = Number(document.getElementById("txtGastos").value);
									var totalCI = (luz*0.01) + (internet*0.01) + (personalAdm*0.01) + (personalVen*0.01) + (depreciacion*0.0131) + (gastos*0.01) + movilidad;
									// var totalCI = luz + internet + personalAdm + personalVen + depreciacion + gastos;
									document.getElementById("txtCostosIP").value = totalCI.toFixed(2);
									document.getElementById("txtCTIndirecto").value = totalCI.toFixed(2);
								}
							</script>
							
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">TOTAL (S/.) :</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="number" id="txtCostosIP" readonly="readonly" style="text-align:center;">
								</div>
							</div>  
						
					</div>
					<!-- FORMULARIO COSTOS INDIRECTOS End -->

					<!-- FORMULARIO COSTOS DE PRODUCCION Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h3 class="text-blue h2">CÁLCULO DE COSTOS DE PRODUCCIÓN</h3>
							</div>							
						</div>
											
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Costo Total Directo :</label>
										<input type="text" id="txtCTDirecto" name="txtCTDirecto" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Costo Total Indirecto :</label>
										<input type="text" id="txtCTIndirecto" name="txtCTIndirecto" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Costo Total por Docena :</label>
										<input type="text" id="txtCTDocena" name="txtCTDocena" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Costo Unitario (par) :</label>
										<input type="text" id="txtCTUnitario" name="txtCTUnitario" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<input type="button" value="CALCULAR" onclick="CalcularCostosProduccion()" class="btn btn-info mr-2" style="width:100%; border-radius:20px;">
									</div>
								</div>
							</div>
							<script>
								function CalcularCostosProduccion(){
									var costoDirecto = Number(document.getElementById("txtCTDirecto").value);
									var costoIndirecto = Number(document.getElementById("txtCTIndirecto").value);                                
									var costoTotalDocena = costoDirecto + costoIndirecto ;
									var costoUnitario = costoTotalDocena / 12;
									document.getElementById("txtCTDocena").value = costoTotalDocena.toFixed(2);
									document.getElementById("txtCTUnitario").value = costoUnitario.toFixed(2);
								}
							</script>
					</div>
					<!-- FORMULARIO COSTOS DE PRODUCCION End -->

					<!-- FORMULARIO DE RENTABILIDAD Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h3 class="text-blue h2">CÁLCULO DE RENTABILIDAD</h3>
							</div>
							<div class="pull-right">
								<a href="" class="btn btn-warning" rel="content-y" role="button"> <i class="fa fa-exclamation-triangle"> </i> Precio Incluye IGV: 18% </a>								
							</div>							
						</div>
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h5 class="text-blue h5">Rentabilidad por Docena</h5>
							</div>												
						</div>											
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Margen de Ganancia (docena) :</label>
										<select class="custom-select col-12" id="txtGananciaDocena" name="txtGananciaDocena" style="text-align:center">
											<option selected="">- Seleccione -</option>
											<option value="0.1"> 10% </option>
											<option value="0.2"> 20% </option>
											<option value="0.3"> 30% </option>
											<option value="0.4"> 40% </option>
											<option value="0.5"> 50% </option>
										</select>	
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Precio de Venta (docena) :</label>
										<input type="text" id="txtPVentaDocena" name="txtPVentaDocena" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
							</div>					
							
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h5 class="text-blue h5">Rentabilidad por Par</h5>
							</div>												
						</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Margen de Ganancia (par) :</label>
										<select class="custom-select col-12" id="txtGananciaPar" name="txtGananciaPar" style="text-align:center">
											<option selected="">- Seleccione -</option>
											<option value="0.1"> 10% </option>
											<option value="0.2"> 20% </option>
											<option value="0.3"> 30% </option>
											<option value="0.4"> 40% </option>
											<option value="0.5"> 50% </option>
										</select>	
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Precio de Venta (par) :</label>
										<input type="text" id="txtPVentaPar" name="txtPVentaPar" class="form-control" readonly="readonly" style="text-align:center;">
									</div>
								</div>
							</div>
						
							<br>
						
						<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<input type="button" value="CALCULAR" onclick="CalcularRentabilidad()" class="btn btn-info mr-2" style="width:100%; border-radius:20px;">
									</div>
								</div>
							</div>
							<script>
								function CalcularRentabilidad(){									
									var costoUnitario = Number(document.getElementById("txtCTUnitario").value);
									var costoDocena = Number(document.getElementById("txtCTDocena").value);
									var margenGananciaPar = Number(document.getElementById("txtGananciaPar").value);
									var margenGananciaDocena = Number(document.getElementById("txtGananciaDocena").value);
									var precioVentaPar = (costoUnitario + (costoUnitario * margenGananciaPar)) * 1.18;
									var precioVentaDocena = (costoDocena + (costoDocena * margenGananciaDocena)) * 1.18;
									document.getElementById("txtPVentaPar").value = precioVentaPar.toFixed(2);
									document.getElementById("txtPVentaDocena").value = precioVentaDocena.toFixed(2);
								}
							</script>
					</div>
					<!-- FORMULARIO DE RENTABILIDAD End -->

					<!-- ENVIO DE DATOS Start -->
					<div class="pd-20 card-box mb-30">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="submit" value="GENERAR REPORTE" class="btn btn-success mr-2" style="width:100%; height: 50px; border-radius:7px;"> 
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<a href="../app/Principal" class="btn btn-danger mr-2" style="width:100%; height: 50px; border-radius:7px;">CANCELAR OPERACIÓN</a>									
								</div>
							</div>
						</div>
					</div>
					<!-- ENVIO DE DATOS End -->

				</form>

			</div>
			
			<?php include("../components/footer.php"); ?>

		</div>
	</div>

	<?php include("../components/scripts.php"); ?>
</body>
</html>