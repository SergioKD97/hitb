<?php

require './metodos.php';


                    // enlaza los campos rellenados con las variables de php
                    $nombreUsuario= str_replace(' ', '_', $_POST['nombre']) ;
                    $contrasena= $_POST['contra'];
                    $confirmarContraseña=$_POST['contra2'];
                    
                    //comprueba si esta repetido el email y el nombre de usuario
                    //email
                    $sql="SELECT * FROM usuario WHERE nombre='$nombreUsuario'";
                    $checkeaUsuario=mysqli_query($creaConexion,$sql);
                    $numeroVecesUsuario=mysqli_num_rows($checkeaUsuario);
                    //nombre de usuario
                        
                        if( ($contrasena === $confirmarContraseña) && ($numeroVecesUsuario ==0) ){
                                    
                                    $registraUsuario = "INSERT INTO usuario (nombre, contra) VALUES ('".$nombreUsuario."','".$contrasena."')";
                                    $creaConexion->query($registraUsuario);
                                    echo  "<script>location.href='index.php?usuarioNuevo=true'</script>";
                                    
                            }else{
                                echo '<script language="javascript">alert("El nombre de usuario    '.$nombreUsuario .'   ya esta creado o las contraseñas son incorrectas");</script>';
                                echo "<script>location.href='index.php'</script>";
                                
                                
                                
                                if($creaConexion->errno){
                                    die("<p>no ha sido posible insertar datos en la tabla . $creaConexion->error");
                                }     
                        }

		
?>

