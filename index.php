<!DOCTYPE html>
<?php
session_start();
?>
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
        <?php 
        require './conectarBBDD.php';
        
        //variable para cambiar el href del Usuario
        if((isset($_SESSION['nombreUsuario'])) && 
               ($_SESSION['nombreUsuario'] != '')){
            $direccion = 'UsuarioFuerte.php';

        }else{
             $direccion = 'index.php';
        }
        
        
        //CODIGO QUE SE EJECUTA CUANDO ALGUIEN SE LOGUEA
        // REVISAR SI ESTA BIEN
        //ABAJO ESTA LA EJECUCION
        function actualizaInterfaz(){
            if( (isset($_GET['usuarioNuevo'])) && ($_GET['usuarioNuevo'] == true)){
                echo '<script language="javascript">alert("Usuario registrado con éxito");</script>';
            }
            if((isset($_SESSION['nombreUsuario'])) && 
               ($_SESSION['nombreUsuario'] != '')){
                
                //NO FINCIONAAAA HAY QUE CONSEGUIR QUE CAMBIE EL CSS AL ENTRAR EN MODO USUARIO
                echo "<script>$('#marginLogin').css(".'margin-left'.",".'0px'.");</script>";        
                
                
                //actulaliza el nombre de usuario en el nombre del login
                echo "<script>$('#letraLogin').text('".$_SESSION['nombreUsuario']."');</script>";
    //          print_r($_SESSION['nombreUsuario'] + 'este es el nombre de usuario');
                echo '<script>$("#top-user").html("'.'<div onclick="+"enviaPanel();"+" id="+"marginLogin"+">'
                . '<a href="+"javascript:void(0)"+" id="+"loginPop"+" title="+"Login"+" data-toggle="+"modal"+" data-target="+"#pop-auth"+">'
                        . '<img style="+"width:50px;margin-top:0px;margin-bottom:6px;margin-left:0px;"+" src="+"imagenes/iconoLogin.jpg"+"> <span id="+"letraLogin"+" class="+"letraLogin"+">'.$_SESSION['nombreUsuario'].'</span>'
                        . '</a>'
                        . '<a href="+"cerrarSesion.php"+" >'
                        . '<i style="+"font-size:60px;color:red;float:right"+" class="+"icon-exit_to_app iconoLogin"+"></i>'
                        . '</a>'
                        . '</div>'.'");</script>';
                
            }
                   
                
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
                
                <div id="HitBee"></div>
                
                <div  id="menu">
                    <ul class="top-menu">
                        <li><a href="index.php"><span class="li-text"> Workouts </span></a></li>
                        <li><a href="<?php echo $direccion?>"><span class="li-text"> Usuario </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Dietas </span></a></li>
                        <li><a href="Productos.php"><span class="ac_unit"> Info </span></a></li>
                        
                    </ul>
                </div>
                
                
            </div>
            
            <div id="top-user" class="col-xs-3 col-s-3 col-md-3  col-lg-3">
            
                <div id="marginLogin" data-toggle="modal" data-target="#ModalContenedor">
                    <a href="javascript:void(0)" id="loginPop" title="Login" data-toggle="modal" data-target="#pop-auth">
                       <!--al pinchar en este boton se abre el modal puesto en el data-target-->
                       <i class="icon-user-circle iconoLogin"  ></i> <span id="letraLogin" class="letraLogin">LOGIN</span>
                    </a>               
                    
                </div>
            </div>
            
            
    </header>

    
    
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
          <!--formulario registro-->
          <form id="formularioRegsitroModal" name="formularioRegsitroModal" action="registro.php" method="POST">
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
          <input  type="submit" class="btn  btn-block btn-primary"value="Confirmar" id="botonEnviar" name="botonEnviar" />   
          <input type="buton" class="btn  btn-block btn-danger" value="Login" id="login" onclick="muestraLogin(this.id);"/>
          </form>
          <!--FORMULARIO LOGIN-->
          <form id="formularioLogin" action="login.php" method="post">
             <table border="0" style=" margin-left: auto; margin-right: auto;">
                    <tbody>
                      <tr>
                          <td>Nombre de usuario</td>
                          <td style="margin-left: 10%;"><input type="text" value="Marco" required="" name="nombreLogin" placeholder="Nombre de usuario" /></th>
                      </tr>

                  
                      <tr>
                          <td>Contraseña</td>
                          <td style="margin-left: 10%;"> <input type="password" value="1234" required="" name="contraLogin" placeholder="contraseña" /></td>
                      </tr>
                  </tbody>
              </table>
          <br> 
          <input  type="submit" class="btn  btn-block btn-primary" value="Confirmar" id="ConfirmarLogin" name="botonEnviar" />   
          <input type="buton" class="btn  btn-block btn-danger" value="Registro" id="registro" onclick="muestraLogin(this.id);"/>
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
        <?php
        actualizaInterfaz();    
        
        ?>
    </body>
</html>

<script>
                                  
    
    
                                /*MENU RESPONSIVE*/
        mainS();
        var modo ="";
        var contador = 1;
        $('.triangulo1,.triangulo2,.triangulo3,.triangulo4,.triangulo5').hide();
        $('.divNiveles1,.divNiveles2,.divNiveles3,.divNiveles4,.divNiveles5').hide();


        //Marc
        $('#formularioLogin').css({'display' : 'none'});
        function enviaPanel(){
            location.href='UsuarioFuerte.php';
        }
        function muestraLogin(id){
            if(id === 'login'){
            $('#formularioRegsitroModal').hide();
            $('#formularioLogin').css({'display' : 'inline'});
            }else{
            $('#formularioRegsitroModal').css({'display' : 'inline'});
            $('#formularioLogin').hide();
            }
            
        }
        
        function ocultaDivs (id, tipo){
        var nombreBBDD = '';
                
        
        //para saber si son repes o tiempo    
        if(tipo === 1){
            tipo = '';
            modo = 'repes';
        }else{
            tipo = 't';
            modo = 'tiempo';
        }
        //para igualar el id
        id++; 
        //Siempre que se da a el boton se ocultan todos
        $('.triangulo1,.triangulo2,.triangulo3,.triangulo4,.triangulo5').hide();
        $('.divNiveles1,.divNiveles2,.divNiveles3,.divNiveles4,.divNiveles5').hide();
        
        
        
        // Ahora empezamos con la carga de la informacion
        switch(id){
            //ESTOS TIENEN QUE SER LOS NOMBRES DE LAS TABLAS DE EJRCICIOS DE LA BBDD
                case 1: nombreBBDD = 'pecho';break;
                case 2: nombreBBDD = 'hombroEspalda';break;
                case 3: nombreBBDD = 'brazo';break;
                case 4: nombreBBDD = 'abs';break; 
                case 5: nombreBBDD = 'pierna';break;
        }
        //agrupar todo el tipo en una sola variable
        var tipoFinal = tipo.toString() + nombreBBDD .toString();

        // aqui se ajusta a que div se va a meter la informacion dependiendo del tamaño
        if(innerWidth < 605 ){
            switch(id){
                    case 1: $('.triangulo1').css("margin-left", "134px");break;
                    case 2: $('.triangulo2').css("margin-left", "134px");break;
                    case 3: $('.triangulo3').css("margin-left", "134px");break;
                    case 4: $('.triangulo4').css("margin-left", "134px");break;
                    case 5: $('.triangulo5').css("margin-left", "134px");break;
            }
            
            //para el @media mas pequeño
            if(innerWidth < 440 ){
                switch(id){
                        case 1: $('.triangulo1').css("margin-left", "100px");break;
                        case 2: $('.triangulo2').css("margin-left", "100px");break;
                        case 3: $('.triangulo3').css("margin-left", "100px");break;
                        case 4: $('.triangulo4').css("margin-left", "100px");break;
                        case 5: $('.triangulo5').css("margin-left", "100px");break;
                }
            }
            
           
            
            //se muestra el correcto
            $('.triangulo' + id).show();
            $('.divNiveles' + id).show();
            $('.divNiveles' + id).load('Niveles.php?tipo='+tipoFinal);
            
            
            //DESPLAZAR AL BOCADILLO EN LOS 3 PRIMEROS EJERCICIOS
                 $('html,body').animate({
                scrollTop: $(".bordeChulo1").offset().top
                }, 1000);
           
        }
        
        
        //CUANDO HAY DOS CUADRADOS ARRIBA
        if((innerWidth > 605) && (innerWidth < 1199)){
            //cambia el triangulo para @ media mas grande cuando hay dos cuadrados
            switch(id){
                    case 1: $('.triangulo2').css("margin-left", "230px");break;
                    case 2: $('.triangulo2').css("margin-left", "607px");break;
                    case 3: $('.triangulo4').css("margin-left", "230px");break;
                    case 4: $('.triangulo4').css("margin-left", "607px");break;
                    case 5: $('.triangulo5').css("margin-left", "420px");break;
            }
            
            
            if((innerWidth > 605) && (innerWidth < 991)){
                if((innerWidth > 605) && (innerWidth < 767)){
                    //cambia el triangulo para @ media mediano cuando hay dos cuadrados
                    switch(id){
                        case 1: $('.triangulo2').css("margin-left", "90px");break;
                        case 2: $('.triangulo2').css("margin-left", "372px");break;
                        case 3: $('.triangulo4').css("margin-left", "90px");break;
                        case 4: $('.triangulo4').css("margin-left", "372px");break;
                        case 5: $('.triangulo5').css("margin-left", "236px");break;
                    }
                }else{
                    //cambia el triangulo para @ media mas pequeño cuando hay dos cuadrados
                    switch(id){
                        case 1: $('.triangulo2').css("margin-left", "164px");break;
                        case 2: $('.triangulo2').css("margin-left", "450px");break;
                        case 3: $('.triangulo4').css("margin-left", "164px");break;
                        case 4: $('.triangulo4').css("margin-left", "450px");break;
                        case 5: $('.triangulo5').css("margin-left", "310px");break;
                    }
                }
            }
            
            
            
            //div 2 
             if(id <= 2){
                 $('.triangulo2').show();
                 $('.divNiveles2').show();       
                 $('.divNiveles2').load('Niveles.php?tipo='+tipoFinal);
            
                //DESPLAZAR AL BOCADILLO EN LOS 3 PRIMEROS EJERCICIOS
                 $('html,body').animate({
                scrollTop: $(".info").offset().top
                }, 1000);
            }
            //div 4
                 if((id === 3) || (id === 4)){
                 $('.triangulo4').show();
                 $('.divNiveles4').show();         
                 $('.divNiveles4').load('Niveles.php?tipo='+tipoFinal);
            
                //DESPLAZAR AL BOCADILLO EN LOS 3 PRIMEROS EJERCICIOS
                 $('html,body').animate({
                scrollTop: $(".Brazo").offset().top
                }, 1000);
            }
            //div 5
            if(id === 5){
                 $('.triangulo5').show();
                 $('.divNiveles5').show();
                 $('.divNiveles5').load('Niveles.php?tipo='+tipoFinal); 
            
                 //DESPLAZAR AL BOCADILLO EN LOS 3 PRIMEROS EJERCICIOS
                 $('html,body').animate({
                scrollTop: $(".Pierna").offset().top
                }, 1000);
            }
        }
        
        
        if(innerWidth > 1199){
            //switch para mover el triangulo segun que id tenga series y tiempo en pantalla grande
        
            switch(id){
                    case 1: $('.triangulo3').css("margin-left", "140px");break;
                    case 2: $('.triangulo3').css("margin-left", "514px");break;
                    case 3: $('.triangulo3').css("margin-left", "891px");break;
                    case 4: $('.triangulo5').css("margin-left", "331px");break;
                    case 5: $('.triangulo5').css("margin-left", "700px");break;
            }
            
            if(id <= 3){
                 $('.triangulo3').show();
                 $('.divNiveles3').show();
                 $('.divNiveles3').load('Niveles.php?tipo='+tipoFinal);
            
                 //DESPLAZAR AL BOCADILLO EN LOS 3 PRIMEROS EJERCICIOS
                 $('html,body').animate({
                scrollTop: $(".info").offset().top
                }, 1000);
            }
            else{
                console.log('entro por el grande ' + id);
                    //se muestra el correcto
                    $('.triangulo5').show();
                    $('.divNiveles5').show();
                    $('.divNiveles5').load('Niveles.php?tipo='+tipoFinal);
                 
                //DESPLAZAR AL BOCADILLO EN LOS 2 ULTIMOS EJERCICIOS
                 $('html,body').animate({
                scrollTop: $(".footer-home").offset().top
                }, 2000);            
            }
            
            
        }

        
        
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
