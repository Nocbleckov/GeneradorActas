var app = angular.module("Login",[])

app.controller("LoginController",function($scope,$http){


	$scope.ing = function(){

		if($scope.loginForm.nomUsu.$valid && $scope.loginForm.passUsu.$valid){
			var url = base_url +"index.php/LoginController/datosIngreso";
			var data = {
				nomUsu: $scope.nomUsu,
				passUsu: $scope.passUsu
			}
			$http.post(url,data).then(
				function(datos){
					if(datos.data.length>0){
						Materialize.toast("Existe Usuario",2000);
						console.log(datos.data[0]);
						redirect(base_url+"index.php/AdminController",datos.data[0]);
					}else{
						Materialize.toast("La contraseña o el usuario son incorrectos",2000);
					}
				},function(error){
					console.log(error);
					Materialize.toast("Error en la conexion remota",2000);
				});

		}else{
			Materialize.toast(
				'Todos los campos son Obligatorios',
				2000);
		}
	}



});

function redirect(url,usuario){
	$('#loginData').attr('action',url);
	$('#idUsuData').val(usuario.idUsuario);
	$('#nomUsuData').val(usuario.nombre);
	$('#numLabData').val(usuario.numLab);
	$('#privUsuData').val(usuario.privilegios);
	$('#loginData').submit();
}