    <?php
require './metodos.php';

    
$id = $_GET['id'];

$sql = "select minutos from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and id =".$id;
//print_r($sql);
$ejecutaSQL = mysqli_query($creaConexion, $sql);
$fetch = mysqli_fetch_all($ejecutaSQL);
for ($i = 0; $i < count($fetch); $i++){
    $minutos = $fetch[$i][0];
}
    print $minutos;