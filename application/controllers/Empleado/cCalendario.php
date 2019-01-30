<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class cCalendario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	//Retorno de vistas
  public function index(){
  	if ($this->session->userdata('tipo_usuario')==false) {
  	  redirect('cLogin');
  	}else{
 		    $info['tipoUser']= number_format($this->session->userdata('tipo_usuario'));
        //... 
        $this->load->view('Layout/Header1',$info);
        $this->load->view('Empleados/MenuEmpleados');
        $this->load->view('Empleados/calendario');
        $this->load->view('Layout/Footer');
        $this->load->view('clausulas');  
  	}
  }
}
 ?>