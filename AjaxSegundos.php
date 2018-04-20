    <?php
require './metodos.php';
//function principal(){

//consulta de verdad, ahora usare otra para las pruebas
//$sql = "select segundos from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and id =". $_GET['id'];

$sql = "select segundos from tpecho";
$ejecutaSQL = mysqli_query($creaConexion, $sql);
$fetch = mysqli_fetch_all($ejecutaSQL);
for ($i = 0; $i < count($fetch); $i++){
    $segundos = $fetch[$i][0];
}
    print $segundos;