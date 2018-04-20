<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Hitbee</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimun-scale =1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="js/jquery.raty.css" rel="stylesheet" type="text/css"/>
        <link href="css/propioCss.css" rel="stylesheet" type="text/css"/>
        <link href="css/niveles/prueba.css" rel="stylesheet" type="text/css"/>
        <link href="css/icomoon.css" rel="stylesheet" type="text/css"/>
        
        <!--vh relacion con el alto vw relacion con el ancho de la pagina-->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.js" type="text/javascript"></script>
    </head>
    <style>
    
    
        
    </style>
    
    
    <body class="body-wrap-home">
        <?php //require './conectarBBDD.php';
             include './metodos.php';
        if(isset($_GET['usuarioNuevo'])){
            echo '<script language="javascript">alert("Usuario registrado con éxito");</script>';
            $metodos = new metodos();
            
        }
        
        ?>
        
        
   <div id="main">
    <header>
        <div class="row container" >
            
            <div class="menu_bar  col-xs-2 col-s-3 col-md-3 col-lg-3">
                <a href="#" class="bt-menu iconoMenu"><span class="icon-bars"></span></a>
            </div>
            
            <div class=" header-logo col-lg-3">
                <h1>
                    <a a href="index.php" id="logo"></a>
                </h1>
            </div>
            
            <div class="col-xs-7 col-s-6 col-md-6  col-lg-6" style="text-align: center">
                
                <div id="HitBee">
                   
                </div>
                
                <div  id="menu">
                    <ul class="top-menu">
                        <li><a href="index.php"><span class="li-text"> Workouts </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Noticias </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Dietas </span></a></li>
                        <li><a href="Productos.php"><span class="ac_unit"> Info </span></a></li>
                        
                    </ul>
                </div>
                
                
            </div>
            
            <div id="top-user" class="col-xs-3 col-s-3 col-md-3  col-lg-3">
            
                <div id="marginLogin">
                    <a href="javascript:void(0)" id="loginPop" title="Login" data-toggle="modal" data-target="#pop-auth">
                       <!--al pinchar en este boton se abre el modal puesto en el data-target-->
                       <i class="icon-user-circle iconoLogin"  data-toggle="modal" data-target="#ModalContenedor"></i> <span class="letraLogin">LOGIN</span>
                    </a>                
                    
                    
                    
                </div>
            
            
            
            
            </div>
            
    </header>
       
    <!--hace que el body se baje-->
    <div class="headerPad" ></div>
    
    
                <nav class="navResponsive">
                    <ul class="ulResponsive">
                        <li class="liResponsive"><a class="aResponsive" href="#"><span class="icon-house spanResponsive"></span>Inicio</a></li>
                        <li class="liResponsive"><a class="aResponsive" href="#"><span class="icon-suitcase spanResponsive"></span>Trabajos</a></li>
                        <li class="liResponsive"><a class="aResponsive" href="#"><span class="icon-earth spanResponsive"></span>Servicios</a></li>
                        <li class="liResponsive"><a class="aResponsive" href="#"><span class="icon-mail spanResponsive"></span>Contacto</a></li>
                    </ul>
		</nav>
    
    
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
        
        
        
       <div class="fotoBack">
           <div class="container bodyEjercicios " >

            <div id="bodyText">
                <div id="borrar">MÚSCULOS</div>
            </div>

            <div>
                 <?php
                

        

                 
                    //consultas para mostrar los ejercicios
                 $consultaSQL = "select *  from Programas";
                 $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
                 $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
                 for ($i = 0; $i< count($arrayConsulta); $i++){
                     $nombrePrograma = $arrayConsulta[$i][1];
                     $foto = $arrayConsulta[$i][2];
                 print('<div class="bordeChulo '.$nombrePrograma.'" style="margin:15px;margin-right:4px;background-image: url(imagenes/'.$foto.')">'
                    . '<div class ="info" style="height: 100%;width:100%;"><p>'.$nombrePrograma.'</p><p id="serie'.($i+1) .'" onclick="muestraNiveles()"  class="series bordeChulo1">Series</p><p id="tiempo'.$i.'" class="tiempo bordeChulo1">Tiempo</p></div>' 
                    . '</div></a>');
                    if($i == 0){
                        print('<div id="triangulo1" class="triangulo1"></div><div id="divNiveles1"  class="divNiveles1">'.$contenidoNiveles.'</div>');
                    }
                    if($i == 1){
                        print('<div id="triangulo2" class="triangulo2"></div><div id="divNiveles2" class="divNiveles2"></div>');
                    }
                    if($i == 2){
                        print('<div id="triangulo3" class="triangulo3"></div><div id="divNiveles3" class="divNiveles3"></div>');
                    }
                    if($i == 3){
                        print('<div id="triangulo4" class="triangulo4"></div><div id="divNiveles4" class="divNiveles4"></div>');
                    }
                    
                    if($i == 4){
                        print('<div id="triangulo15 class="triangulo5"></div><div id="divNiveles5" class="divNiveles5"></div>');
                    }
                    
                    
                 }
                 
                 
                 $contenidoNiveles= 
                ' <div class="row" style="margin: 0 auto; margin-left: 5% ">'
                . '<a href="Ejercicio.php?tipo=' . $_GET['tipo']. '&nivel=1">'
                . '<div class="col-md-3 text-center" style="margin: 3% ; ">'
                . '<h1 id="titulo1" class="text-center logo">Nivel 1</h1>'
                . '<div id="texto1" style="width: 100%; color: white;">'.ejecutaConsulta($creaConexion, $lvl = 1).';</div>'
                . '</div></a>' 

                . '<a href="Ejercicio.php?tipo='. $_GET['tipo'] .' &nivel=2">'
                . '<div class="col-md-3 text-center" style="margin: 3% ;">'
                .  '<h1 id="titulo2"  class="text-center logo">Nivel 2</h1>'
                .  '<div id="texto2" style="width: 100%; color: white;">'.ejecutaConsulta($creaConexion, $lvl = 2).';</div>' 
                .  '</div></a>' 
                .  '<a href="Ejercicio.php?tipo='. $_GET['tipo'] .'&nivel=3"><div class="col-md-3 text-center" style="margin: 3%;">'
                .  '<h1 id="titulo3"  class="text-center logo">Nivel 3</h1>'
                .  '<div id="texto3" style="width: 100%; color: white;">'.ejecutaConsulta($creaConexion, $lvl = 3).';'
                .  '</div>'
                .  '</div></a>'
                .  '</div> ';
                 
                 
                 
                 
                 
                 
                 ?>
                
                
                
                
            </div>        


         </div>
        </div>    
            

        <footer>
            <div class="footer-home small text-center">Copyright © HitBee, All Rights Reserved</div>
        </footer>
        
        
   </div>
        
    </body>
</html>

<script>



                                    /*MENU RESPONSIVE*/
//$(document).ready(main);
$('#borrar').hide();
var contador = 1;

//function main () {
//	$('.iconoMenu').click(function(){
//		if (contador == 1) {
//			$('.navResponsive').animate({
//				left: '0'
//			});
//			contador = 0;
//		} else {
//			contador = 1;
//			$('.navResponsive').animate({
//				left: '-100%'
//			});
//		}
//	});
// 
//	// Mostramos y ocultamos submenus
//	$('.submenu').click(function(){
//		$(this).children('.children').slideToggle();
//	});
//}

function muestraNiveles(){
    
    document.write('hola');
}






    
    
                                    /*BODY*/
    
    
function main () {
	
        $('#triangulo1','#triangulo2','#triangulo4','#triangulo5').hide();
        $('.divNiveles1,.divNiveles2,.divNiveles4,.divNiveles5').hide();
        
}
    
    
//ocultar y desocultar los textos
        $('#texto1').hide();
        $('#texto2').hide();
        $('#texto3').hide();
        
        $("#titulo1").hover(function(){
		$("#texto1").fadeIn('fast');
		}, function(){
			$('#texto1').hide();
		});
        $("#titulo2").hover(function(){
		$("#texto2").fadeIn('fast');
		}, function(){
			$('#texto2').hide();
		});
        $("#titulo3").hover(function(){
		$("#texto3").fadeIn('fast');
		}, function(){
			$('#texto3').hide();
		});
               
        //fin ocultar y desocultar los textos    
    
    
    
    
    
    
    
    
    
</script>