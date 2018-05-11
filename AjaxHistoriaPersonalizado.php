<?php
session_start();
require './metodos.php';
$tipo = str_replace(' ', '_', $_GET['tipo']);
$nombreTabla = str_replace(' ', '_', $_GET['nombreTabla']);
$sql = "select * from $tipo where NombreUsu = '".$_SESSION['nombreUsuario']."' and NombreTabla = '$nombreTabla'";          
print_r($sql);
$sql= mysqli_query($creaConexion, $sql);
            $resultado = mysqli_fetch_all($sql);
            if($tipo == 'seriespersonalizado'){
                for($i = 0; $i< count($resultado); $i++){
                    $nombreEjer = $resultado[$i][4];
                    $repeticiones = $resultado[$i][5];
                    print("<h4>$nombreEjer x $repeticiones</h4>");
                    
                }
            }else{           
                echo 'he entrador por tiempo';
                print_r("select * from $tipo where NombreUsu = '".$_SESSION['nombreUsuario']."' and NombreTabla = '".$_GET['nombreTabla']."'");
                for($it = 0; $it< count($resultado); $it++){
                    $nombreEjer = $resultado[$it][4];
                    $minutos = $resultado[$it][5];
                    $segundos = $resultado[$it][6];
                    print("<h4>$nombreEjer $minutos' $segundos''</h4>");
                    
                }
                
            }