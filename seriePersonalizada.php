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
                //consulta para meter los datos en la tabla
                $sqlt = "insert into tiempoPersonalizado "
                    . "(NombreUsu,NombreTabla,idEjercicio,NombreEjer,minutos,segundos)"
                    . "values ('".$_SESSION['nombreUsuario']."','"
                        . "$nombreTiempo',"
                        . "$i, "
                        . "'".$_POST['nombret' . $i]."',"
                        . "".$_POST['minutost' . $i].","
                        . "'". corrigeCeros($_POST['segundost' . $i])."');"; 
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
                if (isset($_FILES['foto'.$i])===false) {//esto verifica si se ha subido foto o no
                    $foto = $_FILES["foto".$i]["name"];
                    $ruta = $_FILES["foto".$i]["tmp_name"];
                    $servidor = "imagenesUsu/";
                    //cambio el nombre para que si dos imagenes tienen el mismo nombre, se distingan ya que no hay dos usuarios distintos
                    $rutaImagenFinal = $servidor.$_SESSION['nombreUsuario'].$foto;
                    print_r($rutaImagenFinal);
                    move_uploaded_file($ruta, $rutaImagenFinal );
                    echo $_FILES['foto'.$i]['tmp_name']; 
                }else{//valor predeterminado
                    $foto= 'logo.png';
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