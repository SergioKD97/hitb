<?php
session_start();
require './metodos.php';


//SOLO PARA SERIEEEEEEEEES
// AUN NO ESTA HECHO PARA EL TIEMPOOOOOO
//MIRA ESTOOOOOOOOOOOOOO


$contador = $_GET['contador'];
$nombreSerie = $_POST['nombreSerie'];
//Chequeo si ya existe una tabla con este nombre para este usuario 
                    $sqlTabla="SELECT * FROM seriespersonalizado WHERE NombreUsu='".$_SESSION['nombreUsuario']."' and NombreTabla = '$nombreSerie' ";
                    $checkeaUsuario=mysqli_query($creaConexion,$sqlTabla);
                    $numeroVecesUsuario=mysqli_num_rows($checkeaUsuario);
if($numeroVecesUsuario == 0 ){
    for($i = 1; $i<=$contador; $i++){
        $sql = "insert into seriespersonalizado "
            . "(NombreUsu,NombreTabla,idEjercicio,NombreEjer,Repeticiones)"
            . "values ('".$_SESSION['nombreUsuario']."','"
                . "$nombreSerie',"
                . "$i, "
                . "'".$_POST['nombre' . $i]."',"
                . "".$_POST['repeticiones' . $i].");";
        $ejecutaSQL = mysqli_query($creaConexion, $sql);
    }
echo '<script>location.href= "UsuarioFuerte.php";</script>';
}else{
    echo '<script>location.href= "UsuarioFuerte.php"; alert("No puedes llamar igual a dos series");</script>';
    
}
