<?php 
include_once('funciones/funciones.php');
if (isset($_POST['guardar_registro'])) {
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$nivel = $_POST['select_nivel'];

	if ($_POST['registro'] == 'nuevo') {
		$opciones = array('cost' => 12);
		$password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
	try {
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE nombre_usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();
		if ($resultado != false) {
			$respuesta = array(
				'respuesta' => 'error'
			);
		}else{
        $statement = $conexion->prepare('INSERT INTO usuarios (id_usuario, nombre_usuario, password_usuario, id_nivel) VALUES (null, :usuario,  :password, :id_nivel)');
		$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password_hashed,
			':id_nivel' => $nivel
		));
		$id_insertado = $conexion->lastInsertId();
		$respuesta = array('respuesta' => 'exito', 'id_insertado' => $id_insertado);
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
			if(empty($_POST['password'])){
				$sql = "UPDATE usuarios SET nombre_usuario = :usuario, id_nivel = :id_nivel, editado = NOW()  WHERE id_usuario = :id_registro";
				$statement = $conexion->prepare($sql);
			    $statement->bindParam(':usuario', $usuario, PDO::PARAM_STR);
			    $statement->bindParam(':id_nivel', $nivel, PDO::PARAM_INT);
			    $statement->bindParam(':id_registro', $id_registro, PDO::PARAM_INT);
			}else{
				$opciones = array('cost' => 12);
				$password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
				$sql = "UPDATE usuarios SET nombre_usuario = :usuario, password_usuario = :password, id_nivel = :id_nivel WHERE id_usuario = :id_registro";
				$statement = $conexion->prepare($sql);
			    $statement->bindParam(':usuario', $usuario, PDO::PARAM_STR);
			    $statement->bindParam(':password', $password_hashed, PDO::PARAM_STR);
			    $statement->bindParam(':id_nivel', $nivel, PDO::PARAM_INT);
			    $statement->bindParam(':id_registro', $id_registro, PDO::PARAM_INT);
			}
		
		    $statement->execute();
		    $resultado = $statement->rowCount();
			if ($resultado != false) {
				$respuesta = array(
					'respuesta' => 'exito'
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
			$sql = "DELETE FROM usuarios WHERE id_usuario = :id_registro";
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
