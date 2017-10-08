<?php 
defined('BASEPATH') OR exit('No esta disponible el acceso directo');
?>

<!DOCTYPE html>
<html ng-app="Login">
<head>
	<meta charset="utf-8">
	<title>Bienvenido al Administrador de Actas</title>
	<?php $this->load->view('templates/ang_mat'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login/login.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/login/login.js'); ?>"></script>
</head>
<body >
	<nav>
		<div class="nav-wrapper ">
			<a class="brand-logo center">
				Administrador de Actas
			</a>
		</div>
	</nav>

	<div></div>
	<br>
	<div></div>
	<br>
	<div></div>

	<div class="container">
		<div class="card z-depth-5" ng-controller="LoginController">
			<div class="card-content">
				<span class="card-title" grey-text text-darken-2">
					Ingrese sus Datos de Usuario
				</span>
				<br>
				<br>
				<form name="loginForm">
					<div class="input-field col s12 m6 l6">
						<input type="text" name="nomUsu" id="nomUsu" ng-model='nomUsu' required/>
						<label for="nomUsu">Nombre de Usuario</label>
					</div>
					<div class="input-field col s12 m6 l6">
						<input type="password" id="passUsu" name="passUsu" ng-model='passUsu' required/>
						<label for="passUsu">Contraseña</label>
					</div>
				</form>
			</div>
			<div class="card-action" >
				<button class="red-text btn-flat" ng-click="ing()"">Ingresar</button>
				<a  class="red-text">Cancelar</a>
			</div>
		</div>

	</div>

	<form style="display: hidden" id="loginData" action="" method="POST">
		<input type="hidden" name="idUsuData" id="idUsuData">
		<input type="hidden" name="nomUsuData" id="nomUsuData">
		<input type="hidden" name="numLabData" id="numLabData">
		<input type="hidden" name="privUsuData" id="privUsuData">	
	</form>

	<script type="text/javascript">
		
		var base_url = '<?php echo base_url(); ?>';
		$(document).ready(function(){
			var base_url = '<?php echo base_url(); ?>';
		});

	</script>
</body>
</html>