<?php 
//require_once('../includes/funciones/bd_conexion.php');
try{
        // Conexión a la base de datos
    $conexion = new PDO('mysql:host=localhost;dbname=unisoft', 'root', '');
    $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Sacar un resultado
    /*$sql = $connect->prepare('SELECT * FROM usuarios WHERE email = :Email');
    $sql->execute(array('Email' => 'victor@victor.com'));
    $resultado = $sql->fetchAll();
 
    var_dump($resultado[0]);*/
 
    // Sacar todos los resultados de la base de datos
   
 
}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}
?>