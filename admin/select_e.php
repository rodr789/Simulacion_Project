<?php  
include_once('funciones/funciones.php');
$datos = $_POST['id_factura'];
$dato = array_map('intval', explode(',', $datos));
$id_producto = $dato[0];
$envio = $dato[1];
$fecha_hora = getdate();
try {
	$sql = "UPDATE compras SET envio_compra = :envio, fecha_compra = CURRENT_TIMESTAMP WHERE id_factura = :id_registro";
	$statement = $conexion->prepare($sql);
    $statement->bindParam(':envio', $envio, PDO::PARAM_INT);
    $statement->bindParam(':id_registro', $id_producto, PDO::PARAM_INT);
    $statement->execute();
    $resultado = $statement->rowCount();
	if ($resultado != false) {
		$respuesta = array(
			'respuesta' => 'exito',
			'id_actualizado' => $id_producto
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
?>