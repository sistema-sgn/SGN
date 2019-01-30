<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class cUsuario extends CI_Controller
{
	
	function __construct()
	{
      parent::__construct();
      $this->load->model('Empleado/mUsuario');
      // $this->load->library('encrypt');
	}
// Retorno de vistas
  public function index(){
    if ($this->session->userdata('tipo_usuario')==false) {
      redirect('cLogin');
    }else{
 		   $info['tipoUser']= number_format($this->session->userdata('tipo_usuario'));
       //... 
       $this->load->view('Layout/Header1',$info);
       $this->load->view('Empleados/MenuEmpleados');
       $this->load->view('Empleados/Usuarios');
       $this->load->view('Layout/Footer');
       $this->load->view('clausulas');
    }
  }

  // public function desEncyptar()
  // {
  //   $contra= $this->input->post('contra');

  //   echo base64_decode($contra);
  // }

//Metodos 
  public function consultarTiposUsuarios(){
 	
  	$res=$this->mUsuario->consultarTiposUsuariosM();

  	echo json_encode($res);

  }

  public function registrarModificarUsuarios()
  {
  	$info['idU']=$this->input->post('idU');
  	$info['usuario']=$this->input->post('usuario');
  	$info['contra']= base64_encode($this->input->post('cont'));//$this->encrypt->sha1();
    $info['correo']=$this->input->post('correo');
  	$info['idTipo']=$this->input->post('idT');

  	$op=$this->input->post('accion');

  	$res=$this->mUsuario->registrarModificarUsuariosM($info,$op);
  	
  	echo json_encode($res);
  }

  public function consultarUsuarios()
  {
  	$id=$this->input->post('clave');

  	$res=$this->mUsuario->consultarUsuariosM($id);

  	echo json_encode($res);
  	
  }

  public function validarUsuariorepetido()
  {
  	$user= $this->input->post('nombre');
  	
    $res= $this->mUsuario->validarUsuariorepetidoM($user);

    echo json_encode($res);

  }

  public function eliminarUsuario()
  {
    $id=$this->input->post('idU');

    $res=$this->mUsuario->eliminarUsuarioM($id);

    echo $res;
  }



}

?>