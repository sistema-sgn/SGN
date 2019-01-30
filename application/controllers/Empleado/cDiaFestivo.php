<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class cDiaFestivo extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Empleado/mDiaFestivo');
	}
	// Retorno de views 
	 public function index(){
	 	if ($this->session->userdata('tipo_usuario')==false) {
	 	  redirect('cLogin');
	 	}else{
			    $info['tipoUser']= number_format($this->session->userdata('tipo_usuario'));
	       //... 
	       $this->load->view('Layout/Header1',$info);
	       $this->load->view('Empleados/MenuEmpleados');
	       $this->load->view('Empleados/diasFestivos');
	       $this->load->view('Layout/Footer');
	       $this->load->view('clausulas');  
	 	}
	 }

	// Metodos
	public function registrarModificarDiaFestivo()
	{
	 	$info['idD']= $this->input->post('idD');
	 	$info['fecha']= $this->input->post('fecha');
	 	$info['nombre']= $this->input->post('nombre');

	 	$res=$this->mDiaFestivo->registrarModificarDiaFestivoM($info);

	 	echo $res;
	}

	public function consultarDiasFestivos()
	{
		$id= $this->input->post('idD');

	 	$res=$this->mDiaFestivo->consultarDiasFestivosM($id);

	 	echo json_encode($res);
	}

	public function cambiarEstadoDiaFestivo()
	{
		$id= $this->input->post('idD');

		$res=$this->mDiaFestivo->cambiarEstadoDiaFestivoM($id);

		echo $res;
	}

	public function validarFechaFestiva()
	{
		$fecha= $this->input->post('fechaF');

		$res= $this->mDiaFestivo->validarFechaFestivaM($fecha);

		echo $res;
	}
} ?>