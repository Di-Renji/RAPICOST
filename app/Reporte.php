<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("../components/head.php"); ?>
</head>
<body>
    	

	<?php include("../components/navegacion.php"); ?>

	<div class="mobile-menu-overlay"></div>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Generalidades
            $fecha = $_POST["txtFecha"];
            $hora = $_POST["txtHora"];
            $modelo = $_POST["txtModelo"];
            $categoria = $_POST["txtCategoria"];
            // Costo Directos de Produccion
            $corte = $_POST["txtCorte"];
            $perfilado = $_POST["txtPerfilado"];
            $armado = $_POST["txtArmado"]; 
            $acabado = $_POST["txtAcabado"];
            // Costo Indirectos de Produccion
            $luz = $_POST["txtLuz"];   
            $internet = $_POST["txtInternet"];
            $personaAdm = $_POST["txtPerAdm"];   
            $personaVen = $_POST["txtPerVen"]; 
            $movilidad =  $_POST["txtMovilidad"];    
            $depreciacion = $_POST["txtDepreciacion"];     
            $gastos = $_POST["txtGastos"]; 
            // Costos Totales de Producción
            $CTDirecto = $_POST["txtCTDirecto"]; 
            $CTIndirecto = $_POST["txtCTIndirecto"]; 
            $CTDocena = $_POST["txtCTDocena"]; 
            $CTUnitario = $_POST["txtCTUnitario"];
            // RENTABILIDAD 
            $margenGananciaDocena = $_POST["txtGananciaDocena"];
            $margenGananciaPar = $_POST["txtGananciaPar"];
            $precioVentaDocena = $_POST["txtPVentaDocena"];
            $precioVentaPar = $_POST["txtPVentaPar"];

            // Margenes de ganancia Docena
            if($margenGananciaDocena == 0.1){
                $newMargenGananciaDocena = "10 %";
            } elseif ($margenGananciaDocena == 0.2) {
                $newMargenGananciaDocena = "20 %";
            } elseif ($margenGananciaDocena == 0.3) {
                $newMargenGananciaDocena = "30 %";
            } elseif ($margenGananciaDocena == 0.4) {
                $newMargenGananciaDocena = "40 %";
            } elseif ($margenGananciaDocena == 0.5) {
                $newMargenGananciaDocena = "50 %";
            }

            // Margenes de ganancia Par
            if($margenGananciaPar == 0.1){
                $newMargenGananciaPar = "10 %";
            } elseif ($margenGananciaPar == 0.2) {
                $newMargenGananciaPar = "20 %";
            } elseif ($margenGananciaPar == 0.3) {
                $newMargenGananciaPar = "30 %";
            } elseif ($margenGananciaPar == 0.4) {
                $newMargenGananciaPar = "40 %";
            } elseif ($margenGananciaPar == 0.5) {
                $newMargenGananciaPar = "50 %";
            }

            $precioVentaDocena = $_POST["txtPVentaDocena"];
            $precioVentaPar = $_POST["txtPVentaPar"];

            // Margenes en soles
            $margenGananciaDocenaSoles = $CTDocena * $margenGananciaDocena;
            $margenGananciaParSoles = $CTUnitario * $margenGananciaPar;
        }
    ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="title">
                                <img src="../vendors/images/logos/logo3.png" alt="">
							</div>							
						</div>
						<div class="col-md-8 col-sm-12 text-right" style="padding-left:5%;">
							<div class="dropdown">
								<div class="pull-right">
									<h1>REPORTE DE COSTOS DE </h1>
                                    <h2>PRODUCCIÓN Y RENTABILIDAD</h2>
                                    <h2>DE CALZADO</h2>
								</div>								
							</div>
						</div>
					</div> <br><br>

                    <div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
                                <h4>EMPLEADO: Joel L.A. </h4>
                                <h4>CALZADO: <?php echo $categoria." - ".$modelo; ?> </h4>
							</div>							
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<div class="pull-right">
									<h4>FECHA: <?php echo $fecha; ?></h4>
                                    <h4>HORA: <?php echo $hora; ?></h4>
								</div>								
							</div>
						</div>
					</div> <br><br>
                   


                <!-- Bordered table 1 start -->
				<div class="pd-20 card-box mb-30">					
					<table border="2" style="width:100%;text-align:center; border:2px solid #001FA5;">
                        <thead>
                            <tr>
                                <th colspan="3"><h4>COSTOS DIRECTOS DE PRODUCCION</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><h6># ITEM</h6></td>
                                <td><h6>DETALLE</h6></td>
                                <td><h6>VALOR (S/.)</h6></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Etapa de Corte</td>
                                <td><?php echo $corte; ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Etapa de Perfilado</td>
                                <td><?php echo $perfilado; ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Etapa de Armado</td>
                                <td><?php echo $armado; ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Etapa de Acabado</td>
                                <td><?php echo $acabado; ?></td>
                            </tr>
                        </tbody>
                    </table>					
				</div>
				<!-- Bordered table 1 End -->


                <!-- Bordered table 2 start -->
				<div class="pd-20 card-box mb-30">					
					<table border="2" style="width:100%;text-align:center; border:2px solid #001FA5;">
                        <thead>
                            <tr>
                                <th colspan="3"><h4>COSTOS INDIRECTOS DE PRODUCCION</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><h6># ITEM</h6></td>
                                <td><h6>DETALLE</h6></td>
                                <td><h6>VALOR (S/.)</h6></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Luz Eléctrica</td>
                                <td><?php echo $luz; ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Internet</td>
                                <td><?php echo $internet; ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Personal Administrativo</td>
                                <td><?php echo $personaAdm; ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Personal de Ventas</td>
                                <td><?php echo $personaVen; ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Movilidad</td>
                                <td><?php echo $movilidad; ?></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Depreciación</td>
                                <td><?php echo $depreciacion; ?></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Gastos Financieros</td>
                                <td><?php echo $gastos; ?></td>
                            </tr>
                        </tbody>
                    </table>					
				</div>
				<!-- Bordered table 2 End -->


                <!-- Bordered table 3 start -->
				<div class="pd-20 card-box mb-30">					
					<table border="2" style="width:100%;text-align:center; border:2px solid #001FA5;">
                        <thead>
                            <tr>
                                <th colspan="4"><h4>COSTOS TOTALES DE PRODUCCION</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><h6>COSTO TOTAL DIRECTO</h6></td>
                                <td><h6>COSTO TOTAL INDIRECTO</h6></td>
                                <td><h6>COSTO TOTAL POR DOCENA</h6></td>
                                <td><h6>COSTO UNITARIO (par)</h6></td>
                            </tr>
                            <tr>
                                <td><?php echo $CTDirecto; ?></td>
                                <td><?php echo $CTIndirecto; ?></td>
                                <td><?php echo $CTDocena; ?></td>
                                <td><?php echo $CTUnitario; ?></td>
                            </tr>
                        </tbody>
                    </table>					
				</div>
				<!-- Bordered table 3 End -->

                <!-- Bordered table 4 start -->
				<div class="pd-20 card-box mb-30">					
                <table border="2" style="width:100%;text-align:center; border:2px solid #001FA5;">
                    <tbody>
                        <tr>
                            <td colspan="3"><h4>RENTABILIDAD</h4></td>
                        </tr>
                        <tr>
                            <td colspan="3"><h6>Rentabilidad por DOCENA</h6></td>
                        </tr>
                        <tr>
                            <td><h6>Margen Ganancia %</h6></td>
                            <td><h6>Margen Ganancia S/.</h6></td>
                            <td><h6>Precio de Venta</h6></td>
                        </tr>
                        <tr>
                            <td><?php echo $newMargenGananciaDocena; ?></td>
                            <td><?php echo $margenGananciaDocenaSoles ?></td>
                            <td><?php echo $precioVentaDocena; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3"><h6>Rentabilidad por PAR</h6></td>
                        </tr>
                        <tr>
                            <td><h6>Margen Ganancia %</h6></td>
                            <td><h6>Margen Ganancia S/.</h6></td>
                            <td><h6>Precio de Venta</h6></td>
                        </tr>
                        <tr>
                            <td><?php echo $newMargenGananciaPar; ?></td>
                            <td><?php echo $margenGananciaParSoles ?></td>
                            <td><?php echo $precioVentaPar; ?></td>
                        </tr>
                    </tbody>
                </table>		
				</div>
				<!-- Bordered table 4 End -->



                <div class="row" style="text-align:center;">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                        <img src="../vendors/images/impresora.png" onclick="imprimirPagina()"  alt="" style="width:35px;cursor:pointer;"> 
                        </div>							
                    </div>                    
                </div>

                <script>
                    function imprimirPagina() { 
                        window.print(); // Esta función abre el cuadro de diálogo de impresión del navegador
                    }
                </script>
               
			</div>
			
			<?php include("../components/footer.php"); ?>

		</div>
	</div>

	<?php include("../components/scripts.php"); ?>
</body>
</html>