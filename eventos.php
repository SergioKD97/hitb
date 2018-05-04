<?php
session_start();
$nombreUsuario = $_SESSION['nombreUsuario'];
header('Content-Type: application/json');
require './conectarBBDD.php';
//Seleccionar los eventos del calendario
$sql = $pdo->prepare("select * from eventos where nombre ='$nombreUsuario'");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);
?>
