<?php

require './metodos.php';
$sql = "select descripcion from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and id =". $_GET['id'];
$ejecutaSQL = mysqli_query($creaConexion, $sql);
$fetch = mysqli_fetch_all($ejecutaSQL);
for ($i = 0; $i < count($fetch); $i++){

    $descripcion = $fetch[$i][0];
    
    echo $descripcion;
 }
