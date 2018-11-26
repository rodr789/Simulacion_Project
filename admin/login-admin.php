<?php 
include_once('funciones/funciones.php');
if (isset($_POST['login-admin'])) {
        $usuario_a = filter_var(strtolower($_POST['usuario_admin']), FILTER_SANITIZE_STRING);
		$password_a = $_POST['password_admin'];
	try {
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE nombre_usuario = :usuario');
	    $statement->execute(array(':usuario' => $usuario_a));
	    $resultado = $statement->fetch();
	    $password_admin = $resultado['password_usuario'];
	    $nombre_admin = 'Anonymous'; //$resultado['nombre'];
	    $nivel_admin = $resultado['id_nivel'];
	    $id_admin = $resultado['id_usuario'];
		if ($resultado != false) { //verifica si el usuario existe
			if (password_verify($password_a, $password_admin)) {
				session_start();
				$_SESSION['usuario'] = $usuario_a;
				$_SESSION['nombre'] = $nombre_admin;
				$_SESSION['nivel'] = $nivel_admin;
				$_SESSION['id_admin'] = $id_admin;

					$respuesta = array(
						'respuesta' => 'exitoso',
						'usuario' => $nombre_admin
					);
			}else{
				$respuesta = array(
					'respuesta' => 'password_incorrecto'
				);
			}
			
		}else{
			$respuesta = array(
						'respuesta' => 'no_existe' // No existe el Usuario
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