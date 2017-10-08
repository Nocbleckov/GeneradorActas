<?php
defined('BASEPATH') OR exit('Acceso directo no disponible');
?>
<div class="row" ng-controller="mostrarRegistrosController">
	<div class="col s12 m12 l12">
		<table ng-show="table.visible">
			<thead>
				<th>Nombre Alumno</th>
				<th>Número de Cuenta</th>
				<th>Laboratorio</th>
				<th>Semestre</th>
				<th>Calificación</th>
			</thead>
			<tbody id="mostrarRegistros" ng-repeat="reg in registros">
				<td>{{reg.nombreAlumno}}</td>
				<td>{{reg.numeroCuenta}}</td>
				<td>{{reg.nombreLab}}</td>
				<td>{{reg.semestre}}</td>
				<td>{{reg.calificacion}}</td>
				<td>
					<button class="btn">Acta</button>
				</td>
			</tbody>
		</table>
	</div>
</div>