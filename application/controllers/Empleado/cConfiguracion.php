<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class cConfiguracion extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Empleado/mConfiguracion');
	}
//Retorno de vistas
	public function index()
	{
		if ($this->session->userdata('tipo_usuario')==false) {
		  redirect('cLogin');
		}else{
		    $info['tipoUser']= number_format($this->session->userdata('tipo_usuario'));
		    //... 
		    $this->load->view('Layout/Header1',$info);
			$this->load->view('Empleados/MenuEmpleados');
			$this->load->view('Empleados/Configuracion');
			$this->load->view('Layout/Footer');
			$this->load->view('clausulas'); 
		} 
	}
//Metodos

	public function consultarConfiguracion()
	{
		$id= $this->input->post('ID');	
		$res=$this->mConfiguracion->consultarConfiguracionM($id);
		echo json_encode($res);
	}

	public function validarHoras()
	{
		$horas['hora1']=$this->input->post('hora1');
		$horas['hora2']=$this->input->post('hora2');

		$res=$this->mConfiguracion->validarHorasM($horas);

		echo $res;
	}

	public function actualizarConfiguracion()
	{
		$horas['HIL']= $this->input->post('HIL');
		$horas['HFL']= $this->input->post('HFL');
		$horas['HID']= $this->input->post('HID');
		$horas['HFD']= $this->input->post('HFD');
		$horas['HIA']= $this->input->post('HIA');
		$horas['HFA']= $this->input->post('HFA');
		$horas['TD']= $this->input->post('TD');
		$horas['TA']= $this->input->post('TA');
		$horas['ID']= $this->input->post('ID');
		$horas['nombre']= $this->input->post('nombre');

		$res=$this->mConfiguracion->registrarActualizarConfiguracionM($horas);

		echo $res;
		
	}

	public function cambiarEstadoHorarioConfiguracion()
	{
		$id= $this->input->post('ID');

		$res= $this->mConfiguracion->cambiarEstadoHorarioConfiguracionM($id);

		echo $res;
	}

}
 ?>