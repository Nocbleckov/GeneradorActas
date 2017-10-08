var app = angular.module("Administrador",[]);
app.service('Registros',function(){
	var registros = [];
	var table={
		visible:false
	};

	var addRegistro = function(item){
		registros.push(item);
	}
	var getRegistros = function(){
		return registros;
	}

	return{
		addRegistro:addRegistro,
		getRegistros:getRegistros,
		table:table
	}
});

app.controller("buscarAlumnoController",function($scope,$http,Registros){

	$scope.alumnos = [
	{
		numCuenta:""
	}
	];

	$scope.agrAlm = function(){
		alumno = {
			numCuenta:""
		}
		$scope.alumnos.push(alumno);
	}

	$scope.bscrAlm = function(){
		var url = base_url+"index.php/AdminController/obtAlumno";
		if(!$scope.alumnosForm.$valid || $scope.alumnos.length < 1){
			Materialize.toast('Existen números de cuenta no válidos',3000);	
		}else{
			$http.post(url,$scope.alumnos).then(
				function(datos){
					datos.data.forEach(function(element){
						element.forEach(function(item){
							Registros.addRegistro(item);
						});						
					});
					Registros.table.visible = true;
					$scope.alumnos = [
					{
						numCuenta:""
					}
					];
				},function(error){
					console.log(error);
				});
		}
	}
	$scope.dltAlm = function(index){
		$scope.alumnos.splice(index,1);
	}

});

app.controller("mostrarRegistrosController",function($scope,Registros){
	$scope.table = Registros.table;
	$scope.registros = Registros.getRegistros();
	$scope.data = function(){
		console.log("Scope",$scope.table);
		console.log("Service",Registros.table);
		console.log($scope.registros);
	}
});