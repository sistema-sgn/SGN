<?php 
// Esta pendiente por terminar...

$conexion= conexion();

$conexion->query("CALL SE_PA_EstadoIncialAsistenciaOperario()");

cerrarConexion($conexion);


//Establecer conexion con la base de datos
function conexion()
{
	$con= mysqli("localhost","root","SaAFjmXlMRvppyqW","sgn") or die("La conexion no se puedo establecer"+ mysql_error());

	return $con;
}

//Destruir la conexion con la base de datos
function cerrarConexion($conexion){

 	$conexion->close();

}

 ?>