<?php
session_start();
require './metodos.php';
// para que solo se ejecute cuando haya alguien logueado
if(isset($_SESSION['nombreUsuario'])){
$nombre = $_SESSION['nombreUsuario'];

if( (isset($_GET['modo'])) && $_GET['modo'] =='agenda' ){
    echo 'hola';
    $title = $_POST['nombreAgenda'];
    $descripcion = $_POST['descripcionAgenda'];
    $startAgenda = getdate();
    $startAgenda = $startAgenda['year'] .'-'. $startAgenda['mon'] .'-'. $startAgenda['mday'] .' '. $startAgenda['hours'] .':'. $startAgenda['minutes'] .':'. $startAgenda['seconds'];
    $sql= "INSERT INTO eventos (nombre, title, descripcion, start, color) VALUES ('$nombre', '$title', '$descripcion', '$startAgenda', '#ff4d4d'); ";
    $sql = mysqli_query($creaConexion, $sql);
}else{

//  A PARTIR DE AQUI ES PARA EJERCICIOS, TODO LO QUE ESTA AQUI ABAJO ESTA BIEN. ARRIBA DE ESTA LINEA VOY A PONER LO DE LA AGENDA
if(!isset($_GET['seccion'])){//para las clases ya predeterminadas
    $title = $_GET['tipo'];
    
    if($title[0] == 't'){
       $title = substr($title,1);
       $modo = 'tiempo';
    }else{
       $modo = 'repeticiones';
}
    $descripcion = "Hoy has ejercitado: $title del Nivel ".$_GET['nivel']." al estilo de $modo";
    
}else{
    $title = $_GET['nivel'];
    $title = str_replace('_', ' ', $title);
    $descripcion = "Hoy has ejercitado: $title  al estilo de ".$_GET['seccion']."";
}
//cambiamos el valor el titulo para que no salga la t primero si es de tiempo


$start = getdate();
//adpatamos bien la fecha para que la pueda pillar el calendario
$start = $start['year'] .'-'. $start['mon'] .'-'. $start['mday'] .' '. $start['hours'] .':'. $start['minutes'] .':'. $start['seconds'];
$sql= "INSERT INTO eventos (nombre, title, descripcion, start, color) VALUES ('$nombre', '$title', '$descripcion', '$start', '4d94ff'); ";
//print_r($sql);
$sql = mysqli_query($creaConexion, $sql);
 }// fin if ejercicios 
}
