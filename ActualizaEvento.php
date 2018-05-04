<?php
session_start();
require './metodos.php';
// para que solo se ejecute cuando haya alguien logueado
if(isset($_SESSION['nombreUsuario'])){
$nombre = $_SESSION['nombreUsuario'];
$title = $_GET['tipo'];
//cambiamos el valor el titulo para que no salga la t primero si es de tiempo
if($title[0] == 't'){
   $title = substr($title,1);
   $modo = 'tiempo';
}else{
    $modo = 'repeticiones';
}

$descripcion = "Hoy has ejercitado: $title del Nivel ".$_GET['nivel']." al estilo de $modo";
$start = getdate();
//adpatamos bien la fecha para que la pueda pillar el calendario
$start = $start['year'] .'-'. $start['mon'] .'-'. $start['mday'] .' '. $start['hours'] .':'. $start['minutes'] .':'. $start['seconds'];
$sql= "INSERT INTO eventos (nombre, title, descripcion, start) VALUES ('$nombre', '$title', '$descripcion', '$start'); ";
$sql = mysqli_query($creaConexion, $sql);

}
