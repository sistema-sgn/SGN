<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class cMenu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
// Gestor humano
	public function index(){ //$this->load->view('login.php');
      if ($this->session->userdata('tipo_usuario')==false) {
         redirect('cLogin');
      }else{
      $info['tipoUser']= number_format($this->session->userdata('tipo_usuario'));
      //... 
      $this->load->view('Layout/Header1',$info);
      if ($info['tipoUser']==5) {//Gestor Humano
        $this->load->view('Empleados/MenuEmpleados');
        $this->load->view('Empleados/Contenido');//Hacer una forma más optima de colocar los items de menu para las personas...
      }else{//Facilitador
        $this->load->view('Empleados/Facilitador/MenuFacilitador');
        $this->load->view('Empleados/Facilitador/Contenido');
      }
      $this->load->view('Layout/Footer');
      $this->load->view('clausulas'); 
      }
    }
    // -.........
    public function cantidadEmpleados()
    {
      $this->load->model('Empleado/mEmpleado');
      $cantidad=$this->mEmpleado->cantidadEmpleadosM();
      echo $cantidad->cantidad;
    }

    public function cantidadIncapacidades()
    {
      $this->load->model('Empleado/mIncapacidades');
      $cantidad=$this->mIncapacidades->cantidadIncapacidadesM();
      echo $cantidad->cantidad;
    }

    public function cantidadFSDG()
    {
      $this->load->model('Empleado/mFichaSDG');
      $cantidad=$this->mFichaSDG->cantidadFSDGM();
      echo $cantidad->cantidad;
    }

    public function cantidadPermisos()
    {
      $this->load->model("Empleado/mPermiso");
      $cantidad=$this->mPermiso->cantidadPermisosM();
      // var_dump($cantidad);
      echo $cantidad->cantidad;
    }
}

 ?>