<?php
require './metodos.php';
//function principal(){
$sql = "select * from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and id =". $_GET['id'];
$ejecutaSQL = mysqli_query($creaConexion, $sql);
$fetch = mysqli_fetch_all($ejecutaSQL);
for ($i = 0; $i < count($fetch); $i++){
    $id = $fetch[$i][0];
    $nivelEj = $fetch[$i][1];
    $nombre = $fetch[$i][2];
    $descripcion = $fetch[$i][3];
    $repeticiones = $fetch[$i][4];
    $foto = $fetch[$i][5];
    
    
    print( ' <div><img class="img-responsive" src="imagenes/'.$foto.'"/></div>
             <h3 class="text-center">'.$nombre.' x '.$repeticiones.'</h3>
  ');
 }
//}

