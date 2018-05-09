<!DOCTYPE html>
<?php session_start();
?>
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
        
        <link rel='stylesheet' href='css/calendario/fullcalendar.css' />
        <script src='js/calendario/jquery.min.js'></script>
        <script src='js/calendario/moment.min.js'></script>
        <script src='js/calendario/fullcalendar.js'></script>

    </head>
    <body class="body-wrap-home">
        <?php 
        include './metodos.php';
        $miMetodos = new metodos();
        $nivel = "";
        $tipo = $_GET['tipo'];
        $Modo = $tipo[0];

        ?>
        
        
            
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
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        <div class="row">
            <div  class="col-sm-1 col-md-3 text-center"> <!--Aqui iran todos los ejercicios de la serie-->
                <h3>Tanda de Ejercicios</h3>
                <br>
                <?php
                    $sqlHistorial = "select * from ".$_GET['tipo']." where nivel = ".$_GET['nivel']."";
                    $sqlHistorial = mysqli_query($creaConexion, $sqlHistorial);
                    $resultadoHistorial = mysqli_fetch_all($sqlHistorial);
                    for($m = 0; $m <count($resultadoHistorial); $m++){
                        $idNivel = $resultadoHistorial[$m][5];
                        $nombreEjer = $resultadoHistorial[$m][2];
                        $repes = $resultadoHistorial[$m][6];
                        //Para que no salgan las repeticiones que tienen que hacer 
                        if( $Modo !== 't'){
                            print('<h4 class="tanda" id="tanda'.$m.'">'.$idNivel.'º '.$nombreEjer.' x '.$repes.'</h4>');
                        }else{
                            print('<h4 class="tanda" id="tanda'.$m.'">'.$idNivel.'º '.$nombreEjer.'</h4>');
                        }
                        
                    }
                ?>
            </div>
            <div class=" col-xs-12 col-sm-9 col-md-6" id="contenedorEjercicio" style="margin: auto;">
                
                <div id="ejercicio" class="text-center"style="width: 100%;"></div>
                <div id="cronometro" class="text-center"><h1><span id="temporizador" style="background-color: grey;"><span id="minutos">3</span>:<span id="cero">0</span><span id="segundos">3</span></span></h1></div>
                <div id="botones" class="text-center" style=" margin: auto;" >  
                    <button id="botonMenos"  
                            class="btn btn-info" style="border-radius: 50%;" onclick="restaEjercicio();">
                    <i class="icon-arrow-left  "></i></button>
                    
                    <span id="numeroEjercicio" style="font-size: 30px;">
                    <span id="spanContador"> 1<?php // echo $contador;?></span>
                    /
                    <span id="spanTotal"><?php echo $miMetodos->numeroEjercicio($creaConexion); ?></span>
                </span>
                    <button onclick="sumaEjercicio('flecha');" name="botonMas" id="botonMas" class="btn btn-info" style="border-radius: 50%;"><i class="icon-arrow-right" ></i></button>            
                </div>
                <div id="menuBotones" class="text-center" style="margin: auto;">
                    <button id="play" class="btn btn-success" onclick="actualizaPlay();" style="border-radius: 50%;"><i id="icono" class="icon-pause"></i></button>
                </div>
                
            </div>
            <div class="col-sm-2 col-md-3">
                <button id="botonAyuda" class="btn btn-info" onclick="apareceAyuda()" style="border-radius: 50%; margin-left: 10%;" ><i class="icon-question" ></i></button> 
                <br>
                <div id="textoAyuda" style="width: 100%; "><?php echo $miMetodos->consultaBotonAyuda($creaConexion, $postContador)?></div>
            </div>
        </div>                
    
        
        
            
            
        <div class="container">
                
                    <div id="CalendarioWeb"></div>
               
            
        </div>
    


<script>
//    NOTAS:
//    HAY METODOS DUPLICADOS PARA EJECUTARSE SEGÚN EL METODO SEA DE REPETICIONES O TIEMPO
    //Sergio
    mainS();
    var contadorS = 1;
//fin sergio 
    var ayuda = false;
    var contador = 1; 
    var temporizadorCorrecto = true;
    var tiempoTemporizador = 30;
    var primerPlay = 0;
    var numeroTotal = $('#spanTotal').text();
    var modo = '<?php echo $Modo?>';
    console.log(modo);
    //Para cargar el 1 ejercicio
    $('#botonMenos').attr("disabled","disabled");
    $('#cronometro').css({'display' : 'none'});
    $('#cero').css({'display' : 'none'});
    actualizaAjax();
    adaptaInterfaz();
    
  
  function coloreaTanda(){ // pone en rojo el ejercicio actual en la tanda de ejercicios
    $('.tanda').css({'color' : 'black', 'font-weight':'normal'});
    $('#tanda'+ (contador-1)).css({'color' : 'red', 'font-weight':'bold'}); //esto ultimo es negrita

  }
  function añadeAlCalendario (){
      $.ajax({
          url: 'ActualizaEvento.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>',
          type: 'post',
          success: function (resp) {
            console.log(resp);
                    }
      });
  }
   
  function adaptaInterfaz(){
      if(modo !== 't'){
        $('#icono').removeClass('icon-pause').addClass('icon-play');
        $('#play').css({'display' : 'none'});
        $('#repeticiones').css({'display' : 'inline'});
      }else{
        $('#botonMenos').css({'display' : 'none'});
        $('#botonMas').css({'display' : 'none'});
      }
  }
   
   function actualizaPlay() {
       if(modo !=='t'){
         actualizaPlayRepes();  
       }else{
       //adapto el div al cronometro
       $('#botonMenos').removeAttr('disabled');
       if((primerPlay === 0)){
           primerPlay++;
           $('#botonMenos').css({'display' : 'inline'});
           $('#botonMas').css({'display' : 'inline'});
           $('#icono').removeClass('icon-pause').addClass('icon-play');
           duracionEjercicio();
       }else{
       
    if($('#icono').hasClass('icon-play')){
        
       $('#icono').removeClass('icon-play').addClass('icon-pause');  
       
        if(typeof tiempoMinutos !== 'undefined'){clearInterval(tiempoMinutos);}
        if(typeof intervalo !== 'undefined'){clearInterval(intervalo);}
         
      
    }else{
      $('#icono').removeClass('icon-pause').addClass('icon-play'); 
      if($('#cronometro').is(":visible")){duracionEjercicio();}
      else{temporizadorCorrecto= true;temporizador('mas');}
    }
}
    }
}
   
   // TEMPORIZADOR PARA LA DURACION DE LOS EJERCICIOS
   function duracionEjercicio(){
       //para que si se pasa de ejercicio antes de que se acaabe el tiempo no siga estando el cero de mas
       $('#cero').css({ 'display': 'none'});
       $('#cronometro').css({ 'display': 'block'});
       //actulizo el contenido del div para ajustarlo al cronometro
       var minutos = $('#minutos').text();
       var segundos = $('#segundos').text();
       var tiempo = function (){
                                     
           //para hacer el pitido de los 5 segundos
            if(segundos == 5){
                reproduceSonido('5s')
            }
            // actualizo minutos
            if((segundos == 0) && (minutos != 0)){
                $('#cero').css({ 'display': 'none'});
                   segundos = 60;
                   minutos--;
                 
                   $('#minutos').html(minutos);
                   $('#segundos').html(segundos);
               }            
            //se acaba el tiempo
            if((segundos == 0) && (minutos ==00) ){
               clearInterval(tiempoMinutos);
            //pasa al siguiente ejercicio
               $('#cronometro').hide();
               var correctorDeContador = contador+1;
               $('#segundos').load('AjaxSegundos.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+correctorDeContador);
               $('#minutos').load('AjaxMinutos.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+correctorDeContador);
               $('#ejercicio').html('<h1>'+tiempoTemporizador+'</h1>');
               reproduceSonido('go');
               if(contador != numeroTotal){  
               temporizador();
               }else{
                completado();
               }
           }
           
           if(segundos != 0){
                segundos--;
                if(segundos <10){
                    $('#cero').css({'display' : 'inline'});
                }else{
                    $('#cero').css({'display' : 'none'});
                    
                }
                $('#segundos').html(segundos);
            }
       };
       
        tiempoMinutos = setInterval(tiempo, 1000);
   }
   
   
   
   // TEMPORIZADOR PARA DESCANSOS
   
    function temporizador (){
    
        $('#icono').removeClass('icon-pause').addClass('icon-play'); 
        
        //oculto el cronometro para que solo se vea el temporizador 
        if($('#cronometro').is(":visible")){$('#cronometro').css({'display': 'none'});}
        //para los cronometros si es que exsisten. Aqui se actualiza bien el cronometro del ejercicio para la siguiente vez si es que se ha avanzado antes de acabar
        if(typeof tiempoMinutos !== 'undefined'){
            clearInterval(tiempoMinutos);
            var correctorDeContador = contador+1;
            $('#segundos').load('AjaxSegundos.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+correctorDeContador);
            $('#minutos').load('AjaxMinutos.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+correctorDeContador);
        }
        if(typeof intervalo !== 'undefined'){clearInterval(intervalo); tiempoTemporizador = 30;}
        $('#ejercicio').html('<h1>'+tiempoTemporizador+'</h1>');
            if((contador != $('#spanTotal').text())){
                
              //  var contadorCronometro = $('#ejercicio').text();
                var saludo = function (){
                    tiempoTemporizador--;
                    $('#ejercicio').html('<h1 class="text-center">'+tiempoTemporizador+'</h1>');
                    if(tiempoTemporizador === 5){
                        console.log('cambiar esto a 5s');
                        reproduceSonido('4s');
                    }
                    if(tiempoTemporizador === 0){
                     
                        //recargo el tiempo otra vezzzzz
                        tiempoTemporizador = 30;
                        clearInterval(intervalo);
                        reproduceSonido('go');
                        sumaEjercicio();
//                        temporizadorCorrecto = true;
                        if(contador != $('#spanTotal').text()){
                          //  $('#botonMas').attr("disabled","disabled");
                        }
                    }
            };
    
                intervalo = setInterval(saludo, 1000);
        }
 
    };   
    //fin temporizador
    
    
    
    //para el boton de ayuda
    function apareceAyuda(){
        
        if(!ayuda){
            $('#textoAyuda').css({ 'opacity': '1'});
            ayuda = true;
        }else{
            $('#textoAyuda').css({ 'opacity': '0'});
            ayuda = false;
        }
        return ayuda;
    }
    
    
    function actualizaAjax(){
         $('#ejercicio').load('AjaxEjercicio.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&modo=<?php echo $Modo?>&id='+contador);
         $('#textoAyuda').load('AjaxBotonAyuda.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+contador);
         coloreaTanda();
         $('#segundos').load('AjaxSegundos.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+contador);
         $('#minutos').load('AjaxMinutos.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+contador);
 }
    
    function sumaEjercicio (flecha){
        if(modo !== 't'){
            sumaEjercicioRepes();
        }else{
        //console.log('si no entiendes porque el crono funciona bien aqui esta el codigo que arregla el contador explicado');
        var correctorDeContador = contador+1;
        $('#segundos').load('AjaxSegundos.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+correctorDeContador);
        $('#minutos').load('AjaxMinutos.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+correctorDeContador);
        console.log(flecha);
        if(flecha != 'flecha'){
            //actulizo el temporizador de descanso 
        tiempoTemporizador =30;
        $('#botonMenos').removeAttr('disabled');
       // actualización de contador
        if(contador != $('#spanTotal').text()){ // esta bien esta comparacion, no poner otro igual
        contador++;
        $('#spanContador').text(contador);
        $('#spanTotal').text($('#spanTotal').text());
        actualizaAjax();
       duracionEjercicio();
        }if(contador == parseInt($('#spanTotal').text())){
            $('#botonMas').attr("disabled","disabled");}
        // ahora actualizar el contenido del div que muestra el gif
        return contador; 
        }else{
        //actualizo segundos 
        
        //paro los cronos (ver si se pueden poner a 0)
        if(typeof tiempoMinutos !== 'undefined'){clearInterval(tiempoMinutos);}
        if(typeof intervalo !== 'undefined'){clearInterval(intervalo);}
        if($('#cronometro').is(":visible")){
            if(contador != numeroTotal){   
               temporizador();
            }else{
                completado();
             }
        }else{
            sumaEjercicio();
        }
    }         
        }
    }
    function restaEjercicio (){
       if(modo !== 't'){
           restaEjercicioRepes();
       }else{
       // actualización de contador
       $('#botonMas').removeAttr("disabled");
       $('#cero').css({'display' : 'none'});
        if( contador !== 1){
        contador--;
        //paro el cronometro
        if(typeof tiempoMinutos !== 'undefined'){clearInterval(tiempoMinutos);}
        if(typeof intervalo !== 'undefined'){clearInterval(intervalo);}
        //actualizo el contador
        $('#spanContador').text(contador);
        $('#spanTotal').text($('#spanTotal').text());
        //cambio de ejercicio
        actualizaAjax();
        $('#icono').removeClass('icon-play').addClass('icon-pause');
        $('#cronometro').css({'display': 'block'});
        //NOSE SI HACE FALTA PONER ESTE TRUEEEEEEEEEEEEEEEEEE
        if(contador ==1){$('#botonMenos').attr("disabled","disabled");}
        temporizadorCorrecto=true;
        return contador;
        }

    }
    }
    //comentado porque no soporto el puto sonido 
    function reproduceSonido(condicion){
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'https://www.soundjay.com/misc/sounds/censor-beep-2.mp3');                    
        var audio2 = document.createElement('audio');
        audio2.setAttribute('src', 'https://www.soundjay.com/button/sounds/beep-25.mp3');
        
        if(condicion == "go"){
            console.log('audio1');
            audioElement.play();
        }else{
            console.log('audio2');
            audio2.play();
        }
        
    }
    function completado (){
        $('#ejercicio').html('<h1>COMPLETADO!</h1>');
        $('#botonMas').hide();
        $('#play').hide();
        $('#botonMenos').hide();
        $('#numeroEjercicio').hide();
        añadeAlCalendario();
    }

//METODOS DUPLICADOS PARA CUANDO SEA DE REPETICIONES
    function actualizaPlayRepes(){
               
        if($('#icono').hasClass('icon-play')){ 
           $('#icono').removeClass('icon-play').addClass('icon-pause');  
           if(typeof intervalo !== 'undefined'){clearInterval(intervalo);}

        }else{
          $('#icono').removeClass('icon-pause').addClass('icon-play'); 
          var saludo = function (){
                    tiempoTemporizador--;
                    $('#ejercicio').html('<h1 class="text-center">'+tiempoTemporizador+'</h1>');
                    if(tiempoTemporizador === 5){
                        console.log('cambiar esto a 5s');
                        reproduceSonido('5s');
                    }
                    if(tiempoTemporizador === 0){
                     
                        //recargo el tiempo otra vezzzzz
                        tiempoTemporizador = 30;
                        clearInterval(intervalo);
                        reproduceSonido('go');
                        contador++;       
                        $('#spanContador').text(contador);
                        $('#spanTotal').text($('#spanTotal').text());
                        actualizaAjax();
//                        temporizadorCorrecto = true;
                        if(contador != $('#spanTotal').text()){
                          //  $('#botonMas').attr("disabled","disabled");
                        }
                    }
            };
    
            intervalo = setInterval(saludo, 1000);
        }
    }
    function  sumaEjercicioRepes(){
       $('#icono').removeClass('icon-pause').addClass('icon-play');
       if(typeof intervalo !== 'undefined'){clearInterval(intervalo);}
       $('#botonMenos').removeAttr('disabled');
       if($('#play').is(":visible")){
           contador++;       
           $('#spanContador').text(contador);
           $('#spanTotal').text($('#spanTotal').text());
           actualizaAjax();
           $('#play').css({'display' : 'none'});
       }else{
           if(typeof intervalo !== 'undefined'){clearInterval(intervalo); tiempoTemporizador = 30;}
           $('#ejercicio').html('<h1>'+tiempoTemporizador+'</h1>');
           if((contador != $('#spanTotal').text())){
                
              //  var contadorCronometro = $('#ejercicio').text();
                var saludo = function (){
                    tiempoTemporizador--;
                    $('#ejercicio').html('<h1 class="text-center">'+tiempoTemporizador+'</h1>');
                    if(tiempoTemporizador === 5){
                        console.log('cambiar esto a 5s');
                        reproduceSonido('4s');
                    }
                    if(tiempoTemporizador === 0){
                     
                        //recargo el tiempo otra vezzzzz
                        tiempoTemporizador = 30;
                        clearInterval(intervalo);
                        reproduceSonido('go');
                        contador++;       
                        $('#spanContador').text(contador);
                        $('#spanTotal').text($('#spanTotal').text());
                        $('#play').css({'display' : 'none'});
                        actualizaAjax();
//                        temporizadorCorrecto = true;
                        if(contador != $('#spanTotal').text()){
                          //  $('#botonMas').attr("disabled","disabled");
                        }
                    }
            };
    
            intervalo = setInterval(saludo, 1000);
           $('#play').css({'display' : 'inline'});
       }else{
            completado();
               }
       
     }
    }
    
    function restaEjercicioRepes(){
        $('#botonMas').removeAttr("disabled");
        $('#cero').css({'display' : 'none'});
        if( contador !== 1){
        contador--;
        //paro el cronometro
        if(typeof intervalo !== 'undefined'){clearInterval(intervalo);}
        //actualizo el contador
        $('#spanContador').text(contador);
        $('#spanTotal').text($('#spanTotal').text());
        $('#play').css({'display' : 'none'});  
        //cambio de ejercicio
        actualizaAjax();
        $('#icono').removeClass('icon-pause').addClass('icon-play');
        if(contador ==1){$('#botonMenos').attr("disabled","disabled");}
        return contador;
        }
    }                                   /*MENU RESPONSIVE*/

 
function mainS () {
	$('.iconoMenu').click(function(){
		if (contadorS == 1) {
			$('.navResponsive').animate({
				left: '0'
			});
			contadorS = 0;
		} else {
			contadorS = 1;
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
    



    </script>
    </body>
</html>
