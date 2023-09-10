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
								<h4>ESTADÍSTICAS</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="../app/Principal.php">Principal</a></li>
									<li class="breadcrumb-item active" aria-current="page">Estadísticas</li>
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
				
				
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">COSTO DE PRODUCCION DE CALZADO POR MODELO (PAR) :</h4>
					<div id="chart3"></div>
				</div>

				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">PRECIO DE VENTA DE CALZADO POR MODELO (PAR) :</h4>
					<div id="chart32"></div>
				</div>
				
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">MARGEN DE GANANCIA (PAR):</h4>
					<div id="chart5"></div>
				</div>
				
				
			</div>
			
			
			<?php include("../components/footer.php"); ?>


		</div>
	</div>

    <script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../vendors/scripts/apexcharts-setting.js"></script>
</body>
</html>