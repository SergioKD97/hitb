    <?php
    session_start();
require './metodos.php';

$id = $_GET['id'];
    if(!isset($_GET['seccion'])){
        
        $sql = "select segundos from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and idNivel =".$id;
        //print_r($sql);
        $ejecutaSQL = mysqli_query($creaConexion, $sql);
        $fetch = mysqli_fetch_all($ejecutaSQL);
        for ($i = 0; $i < count($fetch); $i++){
            $segundos = $fetch[$i][0];
        }
            print $segundos;
    }else{
        
        $sql = "select segundos from tiempopersonalizado where NombreTabla = ".$_GET['NombreSerie']. " and idEjercicio =".$id;
        $ejecutaSQL = mysqli_query($creaConexion, $sql);
        $fetch = mysqli_fetch_all($ejecutaSQL);
        for ($e = 0; $e < count($fetch); $e++){
            $segundos = $fetch[$e][0];
        }
            print $segundos;
        
    }