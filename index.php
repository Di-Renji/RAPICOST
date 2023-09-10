<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>R A P I C O S T</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/logos/icono.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/logos/icono.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/logos/icono.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
</head>
<body class="login-page">
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo" style="width:100%; text-align:center;"><img src="vendors/images/logos/logo3.png" alt="" style="width:40%"></div><br><br>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div><br>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Cargando ...
			</div>
		</div>
	</div>
	<div class="login-header box-shadow" style="background-color:#0D0960;">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="">
					<img src="vendors/images/logos/logo2.png" alt="" style="width: 200PX;">
				</a>
			</div>
			<div class="">
				<ul>
					<li><a href="" style="color:white;">IESTPFM</a></li>
				</ul>
			</div>
		</div>
	</div>

	<?php
        // Verificamos si se envió el formulario
        if (isset($_POST['submit'])) {
            // Obtenemos los datos ingresados por el usuario
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            // Definimos los usuarios y contraseñas permitidos
            $usuariosPermitidos = [
                'admin' => '12345',
                'alumno' => '456',
                'secretario' => '789'
            ];

            // Verificamos si el usuario y la contraseña son correctos
            if (isset($usuariosPermitidos[$usuario]) && $usuariosPermitidos[$usuario] === $contrasena) {
                // Las credenciales son válidas, redirigimos a la interfaz correspondiente
                if ($usuario === 'admin') {
                    header('Location: app/Principal');
                    exit();
                } elseif ($usuario === '') {
                    //header('Location: pages/menu_al.php');
                    //exit();
                } elseif ($usuario === '') {
                   // header('Location: pages/menu_se.php');
                    //exit();
                } 
            } else {
                // Las credenciales son incorrectas, incrementamos el contador de intentos
                session_start();
                if (!isset($_SESSION['intentos'])) {
                    $_SESSION['intentos'] = 1;
                } else {
                    $_SESSION['intentos']++;
                }

                // Verificamos si se superó el límite de intentos
                if ($_SESSION['intentos'] >= 3) {
                    echo '<script>alert("Has fallado 3 veces de acceso. Comunícate con el Administrador.");</script>';
                    session_destroy();
                } else {
                    echo '<script>alert("Credenciales Incorrectas !!!. Intento # '.$_SESSION['intentos'].'");</script>';
                }
            }
        }
    ?>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center" style="background-color:#88EFF8;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/logos/logo3.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">ACCESO A RAPICOST</h2>
						</div>
						<form  method="POST" action="">
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn active">
										<input type="radio" name="options" id="admin">
										<div class="icon"><img src="vendors/images/briefcase.svg" class="svg" alt=""></div>
										<span>Yo soy</span>
										Gerente
									</label>
									<label class="btn">
										<input type="radio" name="options" id="user">
										<div class="icon"><img src="vendors/images/person.svg" class="svg" alt=""></div>
										<span>Yo soy</span>
										Empleado
									</label>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" id="usuario" name="usuario" class="form-control form-control-lg" placeholder="Usuario">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" id="contrasena" name="contrasena" class="form-control form-control-lg" placeholder="Contraseña">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Recordar</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password.html">Registrarme</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<input name="submit" class="btn btn-primary btn-lg btn-block" type="submit" value="Iniciar Sesión">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>