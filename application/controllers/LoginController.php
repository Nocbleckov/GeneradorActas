<?php 
defined('BASEPATH') OR exit('No esta permitido el acceso directo');
/**
* 
*/
class LoginController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Usuario');
	}

	public function index(){
		$this->load->view('login/LoginGenAct');
	}

	public function datosIngreso(){
		$data = json_decode(file_get_contents('php://input',TRUE));
		$regreso = $this->Usuario->existeUsuario($data);

		echo json_encode($regreso);
	}

}

?>