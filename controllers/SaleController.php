<?php

require_once('../modelo/ModelSale.php');
$Sale = new Sale();
	//session_start();

  /*  
	if($_POST['metodo'] == "actualizarEstado"){

		$Estudiante->actualizarEstadoEstudiante($_POST['id'], $_POST['estado']);

	} else if($_POST['metodo'] == "registrarEstudiante") {
		$Estudiante->registrarEstudiante($_POST['identificacion'], $_POST['nombreCompleto'], $_POST['sexo'], (int)$_POST['grado'], $_POST['fechaNacimiento'], (int)$_POST['escuela'], 1);
		//header('Location: ../paginas/include/nuevo_estudiante.php');
	} else {
		//actualizar los datos del estudiante del listar estudiante
		$Estudiante->actualizarEstudiante($_POST['identificacion'], $_POST['nombreCompleto'], $_POST['sexo'], (int)$_POST['grado'], $_POST['fechaNacimiento'], (int)$_POST['escuela'], $_POST['id_estudiante']);
		//header('Location: ../paginas/include/listar_estudiante.php');
	}
*/
	$Sale->cerrarConexion();
		$Sale = NULL;
 ?>