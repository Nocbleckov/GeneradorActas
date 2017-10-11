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
});

app.controller("ingresarRegistrosController",function($scope){

	$scope.showContent = function($fileContent){
		$fileContent.forEach(function(item){
			stringToArray(item).then(function(dato){
				console.log(dato);
			});
		});
	}



});

app.directive('onReadField',function($parse){
	return {
		restric:'A',
		scope:false,
		link:function(scope,element,attrs){
			var fn = $parse(attrs.onReadField);
			element.on('change',function(onChangeEvent){
				var open = [];
				var fc = (onChangeEvent.srcElement || onChangeEvent.target);
				var fs = 0;
				for(var i = 0;i<fc.files.length;i++){
					var reader = new FileReader();
					reader.onloadend = function(onLoadEvent){

						if(onLoadEvent.target.readyState == FileReader.DONE){
							
							open.push(onLoadEvent.target.result);
							fs++;

							if(fs==fc.files.length){
								scope.$apply(function(){
									fn(scope,{$fileContent:open});
								});
							}
						}
					};
					reader.readAsBinaryString(fc.files[i],"UTF-8");
				}

			});
		},
	};
});

async function stringToArray(cadena){
	var arreglo = cadena.split(/[\n]/);
	return arreglo;
}


//fn(scope,{$fileContent:onLoadEvent.target.result});
/*reader.readAsText((onChangeEvent.srcElement ||
onChangeEvent.target).files[0]);*/
/*console.log((onChangeEvent.srcElement ||
onChangeEvent.target));*/