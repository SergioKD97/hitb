    <?php
    session_start();
    error_reporting(0);
require './metodos.php';
    $id = $_GET['id'];
    
if(!isset($_GET['seccion'])){


$sql = "select minutos from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and idNivel =".$id;
//print_r($sql);
$ejecutaSQL = mysqli_query($creaConexion, $sql);
$fetch = mysqli_fetch_all($ejecutaSQL);
for ($i = 0; $i < count($fetch); $i++){
    $minutos = $fetch[$i][0];
}
    print $minutos;
    
    
}else{
    $sqlT = "select minutos from tiempopersonalizado where NombreUsu = '".$_SESSION['nombreUsuario']."' and NombreTabla = '".$_GET['NombreSerie']."' and idEjercicio =".$id;
$ejecutaSQLT = mysqli_query($creaConexion, $sqlT);
$fetchT= mysqli_fetch_all($ejecutaSQLT);
for ($e = 0; $e < count($fetchT); $e++){
    $minutos = $fetchT[$e][0];
}
    print $minutos;
    
}   
