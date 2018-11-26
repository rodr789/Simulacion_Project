<?php  
$producto = $_POST['id_producto'];

try {
  include_once('funciones/funciones.php');
  $sql = "SELECT id_categoria FROM productos WHERE id_producto = :producto"
  $statement = $conexion->prepare($sql);
  $statement->bindParam(':producto', $producto, PDO::PARAM_INT);
  $resultado = $statement->execute();
  $resultado->fetchAll(PDO::FETCH_ASSOC);
  $id_categoria = $resultado['id_categoria'];
} catch (Exception $e) {
  $error = $e->getMessage();
  echo $error;
}

$route = "img/productos/$id_categoria/";
$archivo = $_FILES['file'];
$templocation = $archivo["tmp_name"];
$name = $archivo["name"];
if (!$templocation) {
	die('No ha seleccionado ningun archivo');
}
if (move_uploaded_file($templocation, $route.$name)) {
	$nombre = $route.$name;
	$tipo_file = $_FILES["file"]["type"];
	$tamano_file = $_FILES["file"]["size"];
	if(!is_dir($route)){
			mkdir($route, 0777);
	}
	try {
	        $sql = "INSERT INTO galeria (id_galeria, id_producto, nombre_galeria, tipo_galeria, size_galeria) VALUES (NULL, :producto, :nombre, :tipo_file, :tamano_file)";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':producto', $producto, PDO::PARAM_INT);
			$statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
			$statement->bindParam(':tipo_file', $tipo_file, PDO::PARAM_STR);
			$statement->bindParam(':tamano_file', $tamano_file, PDO::PARAM_INT);
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
}else{
	echo "Error al guardar el archivo";
}
?>