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
    <body>
        <?php 
        include './metodos.php';
        $miMetodos = new metodos();
        $nivel = "";
        //$contador = 1; 
//        $contador = $_POST['postContador'];
        ?>


        <div id="menuArriba"class="row" style=" height: 50px; background-color: #e6e6e6; margin-bottom: 15px;">
            <div class="col-md-6" id="ultimasNoticias">EL ERROR DEL CRONOMETRO DE QUITAR AL PRINCIPIO 2 SEGUNDOS EN VEZZ DE UNO SOLO OCURRE CUANDO LOS MINUTOS SON DISTINTOS DE CERO</div>
            <div class="col-md-4"><a href="index.php">logo</a></div>
            <div class="col-md-2"><div style="height: 50px;"class="btn bordeChuloAbajo text-center">Registrate</div></div>
        </div>
        
        
        
        <div class="row">
            <div class="col-sm-1 col-md-3">
                <a href="niveles.php?tipo=<?php echo $_GET['tipo']?>"><button class="btn btn-info" style="border-radius: 50%; margin-left: 10%;" ><i class="icon-arrow-left" ></i></button></a>
            </div>
            <div class=" col-xs-12 col-sm-9 col-md-6" id="contenedorEjercicio" style="margin: auto;">
                
                <div id="ejercicio" class="text-center"style="width: 100%;"></div>
                <div id="cronometro" class="text-center"><h1><span id="temporizador" style="background-color: grey;"><span id="minutos">00</span>:<span id="cero">0</span><span id="segundos">3</span></span></h1></div>
                <div id="botones" class="text-center" style=" margin: auto;" >  
                    <button id="botonMenos"  
                            class="btn btn-info" style="border-radius: 50%;" onclick="restaEjercicio();">
                    <i class="icon-arrow-left  "></i></button>
                    
                    <span id="numeroEjercicio" style="font-size: 30px;">
                    <span id="spanContador"> 1<?php // echo $contador;?></span>
                    /
                    <span id="spanTotal"><?php echo $miMetodos->numeroEjercicio($creaConexion); ?></span>
                </span>
                <button onclick="temporizador('mas');" name="botonMas" id="botonMas" class="btn btn-info" style="border-radius: 50%;"><i class="icon-arrow-right" ></i></button>            
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
    
        
      
<!--Nose porque pero tienen que estar separados estos script-->
<script>
    var ayuda = false;
    var contador = 1; 
    var temporizadorCorrecto = true;
    var tiempoTemporizador = 5;
    var primerPlay = 0;
    //Para cargar el 1 ejercicio
    $('#botonMenos').attr("disabled","disabled");
    $('#cronometro').css({'display' : 'none'});
    $('#cero').css({'opacity' : '0'});
    actualizaAjax(); 
   
   function actualizaPlay() {
       //adapto el div al cronometro
       $('#botonMenos').removeAttr('disabled');
       if((primerPlay === 0) &&(contador ===1)){primerPlay++;$('#icono').removeClass('icon-pause').addClass('icon-play'); duracionEjercicio();}else{
       
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
   
   // TEMPORIZADOR PARA LA DURACION DE LOS EJERCICIOS
   function duracionEjercicio(){
   
   
       $('#cronometro').css({ 'display': 'block'});
       //actulizo el contenido del div para ajustarlo al cronometro
       var minutos = $('#minutos').text();
       var segundos = $('#segundos').text();
       
       var tiempo = function (){
           
           //NO VA PONER EL 0 DELANTE DE LOS SEGUNDOS BIEN. SOLO CUANDO TANTO LOS SEGUNDOS COMO LOS MINUTOS SON 0
            if((segundos < 10)){
//                console.log('el cero extra');
                $('#cero').css({ 'opacity': '100'});
            }
            //para hacer el pitido de los 5 segundos
            if(segundos == 5){
                reproduceSonido('5s')
            }
            // actualizo minutos
            if((segundos == 0) && (minutos != 0)){
                   segundos = 60;
                   minutos--;
                 
                   $('#minutos').html('0'+minutos);
                   $('#segundos').html(segundos);
               }

            //bajada de segundos normal
            if((segundos != 0) && (minutos != 0) ){
                segundos--;
                $('#segundos').html(segundos);
            }
            
            //se acaba el tiempo
            if((segundos == 0) && (minutos ==00) ){
               clearInterval(tiempoMinutos);
            //pasa al siguiente ejercicio
               $('#cronometro').hide();
//             $('#minutos').text();
               $('#segundos').text('3');
               $('#ejercicio').html('<h1>'+tiempoTemporizador+'</h1>');
               reproduceSonido('go');
               temporizador('mas');
               

           }
           
           if(segundos != 0){
                segundos--;
                $('#segundos').html(segundos);
            }
       };
       
        tiempoMinutos = setInterval(tiempo, 1000);
   }
   
   
   
   // TEMPORIZADOR PARA DESCANSOS
   
    function temporizador (condicion){
        $('#icono').removeClass('icon-pause').addClass('icon-play'); 
        
        //oculto el cronometro para que solo se vea el temporizador 
        if($('#cronometro').is(":visible")){$('#cronometro').css({'display': 'none'});}
        //para los cronometros si es que exsisten
        if(typeof tiempoMinutos !== 'undefined'){clearInterval(tiempoMinutos);}
        if(typeof intervalo !== 'undefined'){clearInterval(intervalo);}
        $('#ejercicio').html('<h1>'+tiempoTemporizador+'</h1>');
        
        
        if(temporizadorCorrecto){
            temporizadorCorrecto = false;
            if((condicion === 'mas') && (contador != $('#spanTotal').text())){
                
              //  var contadorCronometro = $('#ejercicio').text();
                var saludo = function (){
                    tiempoTemporizador--;
                    $('#ejercicio').html('<h1 class="text-center">'+tiempoTemporizador+'</h1>');
                    if(tiempoTemporizador === 4){
                        console.log('cambiar esto a 5s');
                        reproduceSonido('4s');
                    }
                    if(tiempoTemporizador === 0){
                        //recargo el tiempo otra vezzzzz
                        tiempoTemporizador = 5;
                        clearInterval(intervalo);
                        reproduceSonido('go');
                        sumaEjercicio();
                        temporizadorCorrecto = true;
                        if(contador != $('#spanTotal').text()){duracionEjercicio();}
                        else{$('#botonMas').attr("disabled","disabled");}
                    }
            };
    
                intervalo = setInterval(saludo, 1000);
        }
//        if((condicion ==='menos') && (contador !== 1)){
//            restaEjercicio();
//            temporizadorCorrecto = true;
//        }
            
        }else{
            if(condicion === 'mas'){
                clearInterval(intervalo);
                temporizadorCorrecto = true;
                sumaEjercicio();
                //actualizo el contador del ejercicio para tenerlo actualizado
                //$('#minutos').text();
               $('#segundos').text('3'); // poner aqui cero?
                if(contador != $('#spanTotal').text()){duracionEjercicio();}
              }else{$('#botonMas').attr("disabled","disabled");}
//            else{
//              //  clearInterval(intervalo);
//                temporizadorCorrecto = true;
//                restaEjercicio();
//            }
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
         $('#ejercicio').load('AjaxEjercicio.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+contador);
         $('#textoAyuda').load('AjaxBotonAyuda.php?tipo=<?php echo $_GET['tipo']?>&nivel=<?php echo $_GET['nivel']?>&id='+contador);
  }
    
    function sumaEjercicio (){
        //actulizo el temporizador de descanso 
        tiempoTemporizador =5;
        $('#botonMenos').removeAttr('disabled');
       // actualización de contador
        if(contador != $('#spanTotal').text()){ // esta bien esta comparacion, no poner otro igual
        contador++;
        $('#spanContador').text(contador);
        $('#spanTotal').text($('#spanTotal').text());
        actualizaAjax();
       
        }if(contador == parseInt($('#spanTotal').text())){
            $('#botonMas').attr("disabled","disabled");}
        // ahora actualizar el contenido del div que muestra el gif
        return contador; 

        
    }
    function restaEjercicio (){
       // actualización de contador
       $('#botonMas').removeAttr("disabled");
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

       // ahora actualizar el contenido del div que muestra el gif
    }
    function reproduceSonido(condicion){
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'https://www.soundjay.com/misc/sounds/censor-beep-2.mp3');                    
        var audio2 = document.createElement('audio');
        audio2.setAttribute('src', 'https://www.soundjay.com/button/sounds/beep-25.mp3');
        
        if(condicion == "go"){
            audioElement.play();
        }else{
            console.log('desde el metodo');
            audio2.play();
        }
        
    }


    </script>
    </body>
</html>
