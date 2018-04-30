<?php
session_start(); // iniciamos sesion

require './metodos.php';
         
         $nombreUsuarioLogin = $_POST["nombreLogin"];
         $contrasenaLogin = $_POST["contraLogin"];
 /// ESTE CODIGO ES PARA COMPROBAR SI LOS DATOS APORTADO SON CORRECTOS Y NOS DEJA ENTRAR EN LA BBDD/////
         
         $queryCompruebaNombre = mysqli_query($creaConexion, "SELECT * FROM usuario WHERE nombre = '$nombreUsuarioLogin'") ;
         // coge la contraseña de verdad para más tarde compararla con la puesta y ver si esta bien
         $querySeleccionaContrasena = mysqli_query($creaConexion,"SELECT contra FROM usuario WHERE contra ='$contrasenaLogin' and nombre ='$nombreUsuarioLogin' ");
         $numeroVecesNombreUsuarioLogin=mysqli_num_rows($queryCompruebaNombre);
         
        //hacemos un array con el campo de contraseña        
         $arrayContra = mysqli_fetch_all($querySeleccionaContrasena);
         $contraVerdad = $arrayContra[0][0];
         
         if($numeroVecesNombreUsuarioLogin > 0){ //CASO BUENO
             if( $contrasenaLogin == $contraVerdad ){
                // ESTO ES PARA TENER LAS VARIABLES DEL USUARIO DISPONIBLES EN CUALQUIER MOMENTOS
                $arrayVariablesUsuario = mysqli_fetch_all($queryCompruebaNombre);
                $_SESSION['id'] = $arrayVariablesUsuario[0][0] ;
                $_SESSION['nombreUsuario'] = $arrayVariablesUsuario[0][1];
                $_SESSION['contraseña'] = $arrayVariablesUsuario[0][2];
                echo "<script>location.href='index.php?login=true'</script>";
             }else{
                  echo ' <script language="javascript">alert("Contraseña incorrecta");</script> ';
                  echo "<script>location.href='index.php'</script>"; 
             }
         }else{
             echo ' <script language="javascript">alert("Usuario no registrado");</script> ';
             echo "<script>location.href='index.php'</script>";
         }
?>


