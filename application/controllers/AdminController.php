<?php 
defined('BASEPATH') OR exit('No esta permitido el acceso directo');
/**
* 
*/
class AdminController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Alumno');
	}

	function index(){
		$data = array(
			'nomUsu'=>$this->input->post('nomUsuData'),
			'idUsu'=>$this->input->post('idUsuData'),
			'numLab'=>$this->input->post('numLabData'),
			'privUsu'=>$this->input->post('
				privUsuData'),
			'buscarAlumno'=>$this->load->view('buscarAlumno/baseBuscarAlumno',NULL,TRUE),
			'mostrarRegistros'=>$this->load->view('buscarAlumno/baseMostrarRegistros',NULL,TRUE),
			'ingresarRegistros'=>$this->load->view('ingresarRegistros/baseIngresarRegistros',NULL,TRUE)
			);
		$this->load->view('administrador/AdminGenAct',$data);
	}

	function obtAlumno(){
		$data = json_decode(file_get_contents('php://input',TRUE));
		$regreso = $this->Alumno->obtAlumno($data);
		echo json_encode($regreso);
	}
}

?>