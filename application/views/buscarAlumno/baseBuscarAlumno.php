<?php 
defined('BASEPATH') OR exit('Acceso directo no disponible');
?>
<div class="row" ng-controller="buscarAlumnoController">
	<div class="col s12 m12 l12">
		<h3 class="header center-align">
			Buscar Registros de Alumnos
		</h3>
		<form name="alumnosForm">
			<ul id="buscarAlumno" class="collection" ng-repeat="alumno in alumnos">
				<li class="collection-item center-align">
					<div class="row">
						<div class="input-field col s10 m10 l10">
							<input name="alumnoIn" id="numCuenta" type="number" ng-model="alumno.numCuenta" min="10000000" required>
							<label for="numCuenta">
								Número de Cuenta
							</label>
						</div>
						<div class="col s2 m2 l2">
							<button class="btn" data-ng-click="dltAlm($index)">
								X
							</button>
						</div>
					</div>
				</li>
			</ul>
		</form>
	</div>
	<div class="col s6 m6 l6 center-align">
		<button class="btn" ng-click="agrAlm()">Agregar Alumno</button>
	</div>
	<div class="col s6 m6 l6 center-align">
		<button class="btn" ng-click="bscrAlm()">Buscar Alumno(s)</button>
	</div>
</div>