<?php
defined('BASEPATH') OR exit('Acceso directo no disponible');
?>
<!DOCTYPE html>
<html ng-app="Administrador">
<head>
	<meta charset="utf-8">
	<title>Bienvenido Administrador</title>
	<?php $this->load->view('templates/ang_mat'); ?>
	<script type="text/javascript" src="<?php echo base_url('assets/js/buscarAlumno/buscarAlumno.js'); ?>"></script>
</head>
<body>
	<nav class="nav-extended">
		<div class="nav-wrapper">
			<a class="brand-logo">
				<?php echo "Identificado como: ".$nomUsu; ?>
			</a>
		</div>
		<div class="nav-content">
			<ul class="tabs tabs-transparent">
				<li class="tab">
					<a href="#buscarAlumno">
						Buscar Alumno
					</a>
				</li>
				<li class="tab">
					<a href="#ingresarRegistros">
						Ingresar Registros
					</a>
				</li>
				<li class="tab">
					<a href="#perfil">
						Perfil
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<br>
	<br>
	<div class="container">
		<div id="buscarAlumno" class="col s12 m12 l12">
			<div class="card-panel">
				<?php echo $buscarAlumno; ?>
			</div>
			<br>
			<div class="card-panel">
				<?php echo $mostrarRegistros; ?>
			</div>
		</div>
		<div id="ingresarRegistros" class="col s12 m12 l12">
			<?php echo $ingresarRegistros; ?>
		</div>
	</div>
	<script type="text/javascript">
		
		var base_url = '<?php echo base_url(); ?>';
		$(document).ready(function(){
			var base_url = '<?php echo base_url(); ?>';
		});

	</script>
</body>
</html>