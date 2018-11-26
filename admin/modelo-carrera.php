<?php 
include_once('funciones/funciones.php');
if (isset($_POST['guardar_registro'])) {

$nombre_carrera = $_POST['nombre_carrera'];
$semestre_carrera = intval($_POST['semestre_carrera']);
	if ($_POST['registro'] == 'nuevo') {
		try {
	        $sql = "INSERT INTO carrera (id_carrera, nombre_carrera, semestre_carrera) VALUES (NULL, :nombre, :semestre)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':nombre', $nombre_carrera, PDO::PARAM_STR);
			$statement->bindParam(':semestre', $semestre_carrera, PDO::PARAM_INT);
		    $statement->execute();
		    $id_insertado = $conexion->lastInsertId();
		    $resultado = $statement->rowCount();
			if ($resultado != false) {
				$respuesta = array(
					'respuesta' => 'exito',
					'id_insertado' => $id_insertado
				);
			}else{
				$respuesta = array(
					'respuesta' => 'error'
				);
			}
			$statement = null;
        	$conexion = null;
		} catch (Exception $e) {
			echo "Error: ".$e->getMessage();
		}
	die(json_encode($respuesta));
	}

	if ($_POST['registro'] == 'actualizar') {
		$id_registro = $_POST['id_registro'];
		$fecha_hora = getdate();
		try {
			$sql = "UPDATE carrera SET nombre_carrera = :nombre, semestre_carrera = :semestre WHERE id_carrera = :id_registro";
			$statement = $conexion->prepare($sql);
		    $statement->bindParam(':nombre', $nombre_carrera, PDO::PARAM_STR);
		    $statement->bindParam(':semestre', $semestre_carrera, PDO::PARAM_INT);
		    $statement->bindParam(':id_registro', $id_registro, PDO::PARAM_INT);
		    $statement->execute();
		    $resultado = $statement->rowCount();
			if ($resultado != false) {
				$respuesta = array(
					'respuesta' => 'exito',
					'id_actualizado' => $id_registro
				);
			}else{
				$respuesta = array(
					'respuesta' => 'error'
				);
			}
			$statement = null;
        	$conexion = null;
		} catch (Exception $e) {
			echo "Error: ".$e->getMessage();
		}
		die(json_encode($respuesta));
	}
}

	//Eliminar Registros
	if ($_POST['registro'] == 'eliminar') {
		$id_borrar = $_POST['id'];
		try {
			$sql = "DELETE FROM carrera  WHERE id_carrera = :id_registro";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':id_registro', $id_borrar, PDO::PARAM_INT);
		    $statement->execute();
		    $resultado = $statement->rowCount();
			if ($resultado != false) {
				$respuesta = array(
					'respuesta' => 'exito',
					'id_eliminado' => $id_borrar
				);
			}else{
				$respuesta = array(
					'respuesta' => 'error'
				);
			}
			$statement = null;
        	$conexion = null;
		} catch (Exception $e) {
			echo "Error: ".$e->getMessage();
		}
		die(json_encode($respuesta));
	} 

 ?>