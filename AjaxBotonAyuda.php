<?php
session_start();
require './metodos.php';
$sql = "select * from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and idNivel =". $_GET['id'];
$ejecutaSQL = mysqli_query($creaConexion, $sql);
$fetch = mysqli_fetch_all($ejecutaSQL);
for ($i = 0; $i < count($fetch); $i++){

    $nombre = $fetch[$i][2];
    $descripcion = $fetch[$i][3];
    $foto = $fetch[$i][4];
    
     if(isset($_GET['size'])){
         print('<div><img class="img-responsive" style="margin: auto;margin-top: 6px;height:40vh" src="imagenes/Ejercicios/'.$foto.'"/></div>
                         <h3 id="nombreEjercicio" class="text-center">'.$nombre.'</h3>'
                 . '<div>'.$descripcion.'</div>');
     }else{
     echo $descripcion;

     }
 }

