    <?php
require './metodos.php';
//
$modo = $_GET['modo'];

//este if esta para ver si la serie es personalizada o creada. Si existe la variable
// seccion es que es personalizada, sino es de la normales
    if(!isset($_GET['seccion'])){
        //normal
        $sql = "select * from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and idNivel =". $_GET['id'];
        $ejecutaSQL = mysqli_query($creaConexion, $sql);
        $fetch = mysqli_fetch_all($ejecutaSQL);
        for ($i = 0; $i < count($fetch); $i++){
            $id = $fetch[$i][0];
            $nivelEj = $fetch[$i][1];
            $nombre = $fetch[$i][2];
            $descripcion = $fetch[$i][3];
            $repeticiones = $fetch[$i][4];
            $foto = $fetch[$i][5];


            print( ' <div><img class="img-responsive" style="margin:auto;" src="imagenes/'.$foto.'"/></div>
                     <h3 id="nombreEjercicio" class="text-center">'.$nombre.' <span id="repeticiones">x '.$repeticiones.'</span></h3>
          ');
         }
    
    }else{// personalizada
        $sqlPersonalizado = "select * from seriesPersonalizado where"
                . " NombreUsu = '".$_SESSION['nombreUsuario']."' and "
                . "NombreTabla = '".$_GET['NombreSerie']."' and "
                . "id = ".$_GET['id']."";
        $ejecutaSQLPersonalizado = mysqli_query($creaConexion, $sqlPersonalizado);
        $fetchPersonalizado = mysqli_fetch_all($ejecutaSQLPersonalizado);
        
        for($l = 0; $l<count($fetchPersonalizado); $l++){
            $id = $fetchPersonalizado[$l][0];
            $nombreUsu =  $fetchPersonalizado[$l][1];
            $NombreTabla =  $fetchPersonalizado[$l][2];
            $idEjercicio = $fetchPersonalizado[$l][3];
            $NombreEjer = $fetchPersonalizado[$l][4];
            $Repeticiones = $fetchPersonalizado[$l][5];
        }
        
        print('<h3 id="nombreEjercicio" class="text-center">'.$NombreEjer.' <span id="repeticiones">x '.$Repeticiones.'</span></h3>');
        
    }

 ?>
<script>
var modo = '<?php echo $modo?>';
actualizaInterfaz();
function actualizaInterfaz(){
    if(modo === 't'){
        $('#repeticiones').css({'display' : 'none'});
    }
}
</script>


