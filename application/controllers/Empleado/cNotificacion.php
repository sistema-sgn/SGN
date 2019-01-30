<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class cNotificacion extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Empleado/mNotificacion');
	}

	public function consultarNotificacionesUsuario()//Pendiente por terminar el desarrollo
	{//Hasta acá se llego el 01/10/2018-----
		$rol=$this->input->post('rol');//Esto se debe sacar de la variable global
		$vista=$this->input->post('view');//Esto se debe sacar de la variable global
		// ...
		$notificaciones= $this->mNotificacion->consultarNotificacionesUsuarioM($rol);
		// ...
		// if ($vista==1) {//Notificaciones barra de navegacion...
		// 	echo json_encode($notificaciones);
		// }else if($vista==2){//Notificaciones calendario...
		// 	// $mensaje='';
		// 	// foreach ($notificaciones as $noti) {//el formato de la fecha debe ser DD/MM/YYYY
		// 	// 	$mensaje.="{title: '".$noti->comentario."',start: '".$noti->origen1."'},";
		// 	// }
		// 	echo json_encode($notificaciones);
		// }
		echo json_encode($notificaciones);
	}

	public function cambiarEstadoNotificaciones()
	{
		$id=$this->input->post('user');

		$res= $this->mNotificacion->cambiarEstadoNotificacionesM($id);

		echo json_encode($res);
	}

	public function cantidadNotificacionesNuevas()
	{
		$id=$this->input->post('user');

		$res= $this->mNotificacion->cantidadNotificacionesNuevasM($id);

		echo json_encode($res);
	}

	public function consultarPersonasNotificacion()
	{
		$info['fecha']=$this->input->post('fecha');
		$info['tipo']=$this->input->post('tipo');

		$res= $this->mNotificacion->consultarPersonasNotificacionM($info);

		echo json_encode($res);
	}


}

 ?>