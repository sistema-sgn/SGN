<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class cEmpresa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Empleado/mEmpresa');
	}

// Retorno de vista
	public function index()
	{
		if ($this->session->userdata('tipo_usuario')==false) {
		  redirect('cLogin');
		}else{
		  $info['tipoUser']= number_format($this->session->userdata('tipo_usuario'));
		  //... 
		  $this->load->view('Layout/Header1',$info);
		  $this->load->view('Empleados/MenuEmpleados');
		  $this->load->view('Empleados/FichaSDG/Configuracion/empresas');
		  $this->load->view('Layout/Footer');
		  $this->load->view('clausulas'); 	
		}
	}
//Procedimientos y funciones
    public function buscarEmpresas()
 	{
 		$res= $this->mEmpresa->getEmpresas();
 		echo json_encode($res);
 	}

 	public function registrarModificarEstadoEmpresa()
 	{
 		$info['idEmpresa']=$this->input->post('idEm');
 		$info['nombreEmpresa']=$this->input->post('nombre');
 		$info['estadoEmpresa']=$this->input->post('estadoE');

 		// var_dump($info);

 		$res=$this->mEmpresa->registrarModificarEstadoEmpresaM($info);

 		echo json_decode($res);
 	}

 	public function consultarEmpresas()
 	{
 		$op=$this->input->post('op');

 		$res=$this->mEmpresa->consultarEmpresasM($op);

 		echo json_encode($res);

 	}


}

 ?>