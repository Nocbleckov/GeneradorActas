<?php
defined('BASEPATH') OR exit('Acceso directo no disponible');
?>
<div class="card-panel z-depth-3" ng-controller="ingresarRegistrosController">
	<input type="file" on-read-field="showContent($fileContent)">
	<div ng-if="content">
		<pre>
			{{content}}
		</pre>
	</div>
</div>