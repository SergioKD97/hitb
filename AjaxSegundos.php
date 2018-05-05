    <?php
require './metodos.php';
//function principal(){

//consulta de verdad, ahora usare otra para las pruebas
//$sql = "select segundos from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and id =". $_GET['id'];
$id = $_GET['id'];
//if($id != 1){
//    $id ++;
//   // print_r($id.'<-');
//}
$sql = "select segundos from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and idNivel =".$id;
//print_r($sql);
$ejecutaSQL = mysqli_query($creaConexion, $sql);
$fetch = mysqli_fetch_all($ejecutaSQL);
for ($i = 0; $i < count($fetch); $i++){
    $segundos = $fetch[$i][0];
}
    print $segundos;