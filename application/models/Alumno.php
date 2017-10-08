<?php
defined('BASEPATH') OR exit('Acceso directo no disponible');

/**
* 
*/
class Alumno extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function obtAlumno($data){
		$i = 0;
		foreach ($data as $alumno) {
			$query = "SELECT * FROM Registro AS r WHERE r.numeroCuenta = ".$alumno->numCuenta.";";
			$regreso[$i] = $this->db->query($query)->result_array();
			$i++;
		}
		
		return $regreso;
	}

}


?>