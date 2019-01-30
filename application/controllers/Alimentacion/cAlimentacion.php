<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class cAlimentacion extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('tipo_usuario')==false) {
		  redirect('cLogin');
		}else{
		  $this->load->view('Layout/Header');
		  $this->load->view('Alimentacion/MenuAlimentacion');
		  $this->load->view('Alimentacion/Contenido');
		  $this->load->view('Layout/Footer');
		  $this->load->view('clausulas');	
		}
	}

	public function proveedor()
	{
		if ($this->session->userdata('tipo_usuario')==false) {
		  redirect('cLogin');
		}else{
		  $this->load->view('Layout/Header');
		  $this->load->view('Alimentacion/MenuAlimentacion');
		  $this->load->view('Alimentacion/Proveedor');
		  $this->load->view('Layout/Footer');
		  $this->load->view('clausulas');		
		}
	}

	public function producto()
	{
		if ($this->session->userdata('tipo_usuario')==false) {
		  redirect('cLogin');
		}else{
		  $this->load->view('Layout/Header');
		  $this->load->view('Alimentacion/MenuAlimentacion');
		  $this->load->view('Alimentacion/producto');
		  $this->load->view('Layout/Footer');
		  $this->load->view('clausulas');	
		}
	}

	public function configuracion()
	{
		if ($this->session->userdata('tipo_usuario')==false) {
		  redirect('cLogin');
		}else{
		  $this->load->view('Layout/Header');
		  $this->load->view('Alimentacion/MenuAlimentacion');
		  $this->load->view('Alimentacion/configuracion');
		  $this->load->view('Layout/Footer');
		  $this->load->view('clausulas');		
		}
	}
}

?>