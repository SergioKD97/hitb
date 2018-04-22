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
        <div class="container bodyEjercicios">

            <div id="bodyText">
                <div id="borrar" >MÚSCULOS</div>
            </div>

            <div>
                 <?php
                 $consultaSQL = "select *  from Programas";
                 $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
                 $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
                 for ($i = 0; $i< count($arrayConsulta); $i++){
                     $nombrePrograma = $arrayConsulta[$i][1];
                     $foto = $arrayConsulta[$i][2];
                 print('<div class="bordeChulo '.$nombrePrograma.'" style="margin:15px;margin-right:4px;background-image: url(imagenes/'.$foto.')">'
                    . '<div class ="info" style="height: 100%;width:100%;"><p>'.$nombrePrograma.'</p><p id="'.$i.'" class="series bordeChulo1"  onclick="ocultaDivs(this.id,1);">Series</p><p id="'.$i.'" class="tiempo bordeChulo1" onclick="ocultaDivs(this.id,2);">Tiempo</p> </div>' 
                    . '</div></a>');
                 
                    if($i == 0){
                        print('<div class="triangulo1"></div><div class="divNiveles1"></div>');
                    }
                    if($i == 1){
                        print('<div class="triangulo2"></div><div class="divNiveles2"></div>');
                    }
                    if($i == 2){
                        print('<div class="triangulo3"></div><div class="divNiveles3"></div>');
                    }
                    if($i == 3){
                        print('<div class="triangulo4"></div><div class="divNiveles4"></div>');
                    }
                    
                    if($i == 4){
                        print('<div class="triangulo5"></div><div class="divNiveles5"></div>');
                    }
                 
                 }
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
mainS();
 
var contador = 1;
$('.triangulo1,.triangulo2,.triangulo4,.triangulo5').hide();
$('.divNiveles1,.divNiveles2,.divNiveles4,.divNiveles5').hide();


//Marc
function ocultaDivs (id, tipo){
var nombreBBDD = '';
//para saber si son repes o tiempo    
if(tipo === 1){
    tipo = '';
}else{
    tipo = 't';
}
//para igualar el id
id++; 
//Siempre que se da a el boton se ocultan todos
$('.triangulo1,.triangulo2,.triangulo3,.triangulo4,.triangulo5').hide();
$('.divNiveles1,.divNiveles2,.divNiveles3,.divNiveles4,.divNiveles5').hide();
//se muestra el correcto
$('.triangulo' + id).show();
$('.divNiveles' + id).show();
// Ahora empezamos con la carga de la informacion
switch(id){
        case 1: nombreBBDD = 'pecho';break;
        case 2: nombreBBDD = 'hombro-espalda';break;
        case 3: nombreBBDD = 'brazo';break;
        case 4: nombreBBDD = 'abs';break;
        case 5: nombreBBDD = 'pierna';break;
}
//agrupar todo el tipo en una sola variable
var tipoFinal = tipo.toString() + nombreBBDD .toString();
console.log('tipo + nombreBBDD =' + tipoFinal);
$('.divNiveles' + id).load('Niveles.php?tipo='+tipoFinal);
console.log('Niveles.php?tipo='+tipo+nombreBBDD);

}
//Fin Marc
function mainS () {
	$('.iconoMenu').click(function(){
		if (contador == 1) {
			$('.navResponsive').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.navResponsive').animate({
				left: '-100%'
			});
		}
	});
 
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}
    
    
                                /*BODY*/
    
    


    
    
    
    
    
    
    
</script>