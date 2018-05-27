<?php
session_start();
require './metodos.php';



//MIRA ESTOOOOOOOOOOOOOO
$contador = $_GET['contador'];

if(isset($_GET['tiempo'])){
    //Chequeo si ya existe una tabla con este nombre para este usuario
    $nombreTiempo = $_POST['nombreTiempo'];
    $nombreTiempo = str_replace(' ', '_', $nombreTiempo);
    

        $sqlTablat="SELECT * FROM tiempopersonalizado WHERE NombreUsu='".$_SESSION['nombreUsuario']."' and NombreTabla = '$nombreTiempo' ";
        $checkeaUsuariot=mysqli_query($creaConexion,$sqlTablat);
        $numeroVecesUsuariot=mysqli_num_rows($checkeaUsuariot);
        
        if($numeroVecesUsuariot == 0 ){
            for($i = 1; $i<=$contador; $i++){
                
                //para subir la foto
                if ($_FILES['fotot'.$i]['size'] == 0) {//esto verifica si se ha subido foto o no
                    $foto= 'logo.png';
                }else{//valor predeterminado
                    $foto = $_FILES["fotot".$i]["name"];
                    $ruta = $_FILES["fotot".$i]["tmp_name"];
                    $servidor = "imagenesUsu/";
                    //cambio el nombre para que si dos imagenes tienen el mismo nombre, se distingan ya que no hay dos usuarios distintos
                    $rutaImagenFinal = $servidor.$_SESSION['nombreUsuario'].$foto; //para guardarlo bn en el server
                    $foto = $_SESSION['nombreUsuario'].$foto;//para la bbdd
                    move_uploaded_file($ruta, $rutaImagenFinal );//movimiento de la foto al server
                }
                
                //FIN SUBIR FOTO
                //consulta para meter los datos en la tabla
                $sqlt = "insert into tiempoPersonalizado "
                    . "(NombreUsu,NombreTabla,idEjercicio,NombreEjer,minutos,segundos,foto)"
                    . "values ('".$_SESSION['nombreUsuario']."','"
                        . "$nombreTiempo',"
                        . "$i, "
                        . "'".$_POST['nombret' . $i]."',"
                        . "".$_POST['minutost' . $i].","
                        . "'". corrigeCeros($_POST['segundost' . $i])."',"
                        . "'$foto');";
                $ejecutaSQL = mysqli_query($creaConexion, $sqlt);
            }
        echo '<script>location.href= "UsuarioFuerte.php";</script>';
        }else{
            echo '<script>location.href= "UsuarioFuerte.php"; alert("No puedes llamar igual a dos series");</script>';

        }
}else{
    

        $nombreSerie = $_POST['nombreSerie'];
        $nombreSerie = str_replace(' ', '_', $nombreSerie);
        //Chequeo si ya existe una tabla con este nombre para este usuario 
                            $sqlTabla="SELECT * FROM seriespersonalizado WHERE NombreUsu='".$_SESSION['nombreUsuario']."' and NombreTabla = '$nombreSerie' ";
                            $checkeaUsuario=mysqli_query($creaConexion,$sqlTabla);
                            $numeroVecesUsuario=mysqli_num_rows($checkeaUsuario);
        if($numeroVecesUsuario == 0 ){
            for($i = 1; $i<=$contador; $i++){
                //para subir la foto
                if ($_FILES['foto'.$i]['size'] == 0) {//esto verifica si se ha subido foto o no
                    $foto= 'logo.png';
                }else{//valor predeterminado
                    $foto = $_FILES["foto".$i]["name"];
                    $ruta = $_FILES["foto".$i]["tmp_name"];
                    $servidor = "imagenesUsu/";
                    //cambio el nombre para que si dos imagenes tienen el mismo nombre, se distingan ya que no hay dos usuarios distintos
                    $rutaImagenFinal = $servidor.$_SESSION['nombreUsuario'].$foto; //para guardarlo bn en el server
                    $foto = $_SESSION['nombreUsuario'].$foto;//para la bbdd
                    move_uploaded_file($ruta, $rutaImagenFinal );//movimiento de la foto al server
                }
                
                //FIN SUBIR FOTO
                
                $sql = "insert into seriespersonalizado "
                    . "(NombreUsu,NombreTabla,idEjercicio,NombreEjer,Repeticiones,foto)"
                    . "values ('".$_SESSION['nombreUsuario']."','"
                        . "$nombreSerie',"
                        . "$i, "
                        . "'".$_POST['nombre' . $i]."',"
                        . "".$_POST['repeticiones' . $i].","
                        . "'$foto');";
                $ejecutaSQL = mysqli_query($creaConexion, $sql);          
            }
        echo '<script>location.href= "UsuarioFuerte.php";</script>';
        }else{
            echo '<script>location.href= "UsuarioFuerte.php"; alert("No puedes llamar igual a dos series");</script>';

        }
    
}

    function corrigeCeros( $segundos){//para poner los segundos con dos ceros si solo ponen 1:
        if($segundos <= 9){

            return '0'.$segundos ;
        }else{
            return $segundos;
        }
    }