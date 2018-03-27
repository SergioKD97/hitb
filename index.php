<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Hitbee</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimun-scale =1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="js/jquery.raty.css" rel="stylesheet" type="text/css"/>
        <link href="css/propioCss.css" rel="stylesheet" type="text/css"/>

        <link href="css/icomoon.css" rel="stylesheet" type="text/css"/>
        
        
        <!--vh relacion con el alto vw relacion con el ancho de la pagina-->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.js" type="text/javascript"></script>
    </head>
    <style>
    
    
        
    </style>
    
    
    <body class="body-wrap-home">
        <?php require './conectarBBDD.php';
        if(isset($_GET['usuarioNuevo'])){
            echo '<script language="javascript">alert("Usuario registrado con éxito");</script>';
        }
        ?>
        
        
   <div id="main" class="main-wrap-home">
    <header>
        <div class="row container" >
            
            <div class="col-s-3 col-lg-3  header-logo">
                <h1>
                    <a a href="index.php" id="logo"></a>
                </h1>
            </div>
            
            <div class="col-s-6 col-lg-6" style="text-align: center">
                
                <div id="HitBee">
                   
                </div>
                
                <div style="clear: both"></div>
                
                <div  id="menu">
                    <ul class="top-menu">
                        <li><a href="Productos.php"><span class="li-text"> Home </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Noticias </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Dietas </span></a></li>
                        <li><a href="Productos.php"><span class="ac_unit"> Sobre Nosotros </span></a></li>
                        
                    </ul>
                </div>
                
                
            </div>
            
            <div id="top-user" class="col-s-3 col-md-2 col-lg-3">
            
                <div id="marginLogin">
                    <a href="javascript:void(0)" id="loginPop" title="Login" data-toggle="modal" data-target="#pop-auth">
                       <!--al pinchar en este boton se abre el modal puesto en el data-target-->
                        <i class="icon-user-circle" data-toggle="modal" data-target="#ModalContenedor"></i> LOGIN
                    </a>                
                
                </div>
                    
            
            
            
            </div>
            
    </header>
       <div id="headerPad" ></div>
        
        <!--****MODAAAAAAAAAAAAAAAAAAAAAL*****-->
<!-- Modal -->
<div class="modal fade" id="ModalContenedor" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <!--Este boton es la x de arriba a la derecha-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          <h3 class="modal-title text-center"  id="tituloModal"><b>Formulario de registro</b></h3>
      </div>
        
      <div class="modal-body">
          <form name="formularioRegsitroModal" action="registro.php" method="POST">
          <table border="0" style=" margin-left: auto; margin-right: auto;">
                    <tbody>
                      <tr>
                          <td>Nombre de usuario</td>
                          <td style="margin-left: 10%;"><input type="text" required="" name="nombre" placeholder="Nombre de usuario" /></th>
                      </tr>

                  
                      <tr>
                          <td>Contraseña</td>
                          <td style="margin-left: 10%;"> <input type="password" required="" name="contra" placeholder="contraseña" /></td>
                      </tr>
                      <tr>
                          <td>Confirmar contraseña</td>
                          <td style="margin-left: 10%;"><input type="password" required="" name="contra2" placeholder="Confirma contraseña" /></td>
                      </tr>
                  </tbody>
              </table>
          <br>
          <input  type="submit" class="btn  btn-block btn-primary"value="Confirmar" name="botonEnviar" />   
          </form>
      </div>
    </div>
  </div>
</div>
        
        
        <!--**** FIN  MODAAAAAAAAAAAAAAAAAAAAAL*****-->
        
        
        
       <div class="row container ">
            <div class="col-xs-3 "></div>
            <div class=" col-xs-9 container ">
                <?php
                $consultaSQL = "select *  from Programas";
                $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
                $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
                for ($i = 0; $i< count($arrayConsulta); $i++){
                    $nombrePrograma = $arrayConsulta[$i][1];
                    $foto = $arrayConsulta[$i][2];
                print('<a href="niveles.php?tipo='.$nombrePrograma.'">'
                        . '<div class="col-sm-4 col-xs-12 text-center bordeChulo img-responsive" style=" margin:20px;font-size: 3vw; background-image: url(imagenes/'.$foto.')"><div class ="info" style="height: 100%;width:100%;"><p>'.$nombrePrograma.'</p></div>' 
                    . '</div></a>');
                if(($i == 1 || $i ==3)){
                    print('<div style="clear: both"></div>');
                }
                }
                ?>
            </div>
        </div>
        <div id="menuAbajo" class="row">
            <div class="col-md-12 text-center">contactanos acabar este menu</div>
        </div>
   </div>
        
    </body>
</html>

