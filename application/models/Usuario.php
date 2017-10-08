<?php
defined('BASEPATH') OR exit('Acceso directo no disponible');

/**
* Este modelo se encargar de realizar las conexiones a la base de datos, para accesder a la informacion del usuario.
*/

class Usuario extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function existeUsuario($data){
		return $regreso['usuario'] = $this->db->get_where('Usuario',array(
			'nick'=>$data->nomUsu,
			'password'=>$data->passUsu
			))->result();
	}


}


?>