<?php
session_start();
require './metodos.php';
$nombreSerie = $_GET['nombreTabla'];
$nombreUsuario = $_SESSION['nombreUsuario'];

$sqlArcaica = "select * from seriespersonalizado where NombreUsu = '$nombreUsuario' and NombreTabla = '$nombreSerie'";
$sqlArcaica = mysqli_query($creaConexion, $sqlArcaica);
$numeroVecesSqlArcaica=mysqli_num_rows($sqlArcaica);
if($numeroVecesSqlArcaica >0){
   //procedemos a borrar la serie en las de repeticiones
    $sql = "delete from seriespersonalizado where NombreUsu = '$nombreUsuario' and NombreTabla = '$nombreSerie'";
    $sql = mysqli_query($creaConexion, $sql); 
}else{
    $sql = "delete from tiempopersonalizado where NombreUsu = '$nombreUsuario' and NombreTabla = '$nombreSerie'";
    $sql = mysqli_query($creaConexion, $sql); 
}



echo '<script>location.href="UsuarioFuerte.php"</script>';

