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
                <div id="cronometro" class="text-center"><h1><span id="temporizador" style="background-color: grey;"><span id="minutos">00</span>:<span id="segundos">03</span></span></h1></div>
                <div id="botones" class="text-center" style=" margin: auto;" >  
                    <button name="botonMenos"  
                     class="btn btn-info" style="border-radius: 50%;" onclick="temporizador('menos');">
                    <i class="icon-arrow-left  "></i></button>
                    
                    <span id="numeroEjercicio" style="font-size: 30px;">
                    <span id="spanContador"> 1<?php // echo $contador;?></span>
                    /
                    <span id="spanTotal"><?php echo $miMetodos->numeroEjercicio($creaConexion); ?></span>
                </span>
                <button onclick="temporizador('mas');" name="botonMas" id="botonMas" class="btn btn-info" style="border-radius: 50%;"><i class="icon-arrow-right" ></i></button>            
                </div>
                <div id="menuBotones" class="text-center" style="margin: auto;">
                    <button id="play" class="btn btn-success" onclick="actualizaPlay();" style="border-radius: 50%;"><i class="icon-play"></i></button>
                </div>
                
            </div>
            <div class="col-sm-2 col-md-3">
                <button id="botonAyuda" class="btn btn-info" onclick="apareceAyuda()" style="border-radius: 50%; margin-left: 10%;" ><i class="icon-question" ></i></button> 
                <br>
                <div id="textoAyuda" style="width: 100%; "><?php echo $miMetodos->consultaBotonAyuda($creaConexion, $postContador)?></div>
            </div>
        </div>
        
        
    <script>
    var ayuda = false;
    var contador = 1; 
    var temporizadorCorrecto = true;
    var play = false;
    //Para cargar el 1 ejercicio
    
    $('#cronometro').hide();
    actualizaAjax(); 
   
   
   
   
   function actualizaPlay() {
       //adapto el div al cronometro      
    if(play){
       $('#play').html('<i class="icon-play"></i>');  
      clearInterval(tiempoMinutos);
      clearInterval(intervalo);
      play = false;     
      
    }else{
      $('#play').html('<i class="icon-pause"></i>'); 
      
//      if($("#cronometro").is(":visible")){       
      duracionEjercicio();
//      }else{
      temporizador();
//      }
      play = true;  
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
//            if(parseInt(segundos) < 10){
                
                $('#segundos').html('0'+segundos);
//            }
           
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
               temporizador('mas');
               $('#cronometro').hide();
//               $('#minutos').text();
               $('#segundos').text('03');
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
        if(temporizadorCorrecto){
            temporizadorCorrecto = false;
            if((condicion === 'mas') && (contador != $('#spanTotal').text())){
                var contadorCronometro = 5;
                var saludo = function (){
                    contadorCronometro--;
                    $('#ejercicio').html('<h1 class="text-center">'+contadorCronometro+'</h1>'); 
                    if(contadorCronometro === 0){
                        clearInterval(intervalo);
                        sumaEjercicio();
                        temporizadorCorrecto = true;
                        duracionEjercicio();
                    }
            };
    
                intervalo = setInterval(saludo, 1000);
        }
        if((condicion ==='menos') && (contador !== 1)){

                var contadorCronometro = 5;
                var saludo = function (){
                    contadorCronometro--;
                    $('#ejercicio').html('<h1 class="text-center">'+contadorCronometro+'</h1>');  
                    if(contadorCronometro === 0){
                        clearInterval(intervalo);
                        restaEjercicio();
                        temporizadorCorrecto = true;
                    }
            };

            intervalo = setInterval(saludo, 1000);
        }
            
        }
        else{
            console.log('me voy por el else grande');
            if(condicion === 'mas'){
                console.log('me meto en la condicion = mas del else grande');
                clearInterval(intervalo);
                temporizadorCorrecto = true;
                sumaEjercicio();
            }else{
    
                clearInterval(intervalo);
                temporizadorCorrecto = true;
                restaEjercicio();
            }
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
       // actualización de contador
        if(contador != $('#spanTotal').text()){ // esta bien esta comparacion, no poner otro igual
        contador++;
        $('#spanContador').text(contador);
        $('#spanTotal').text($('#spanTotal').text());
        actualizaAjax();
        return contador;
        }
        // ahora actualizar el contenido del div que muestra el gif
        

        
    }
    function restaEjercicio (){
       // actualización de contador
        if( contador !== 1){
        contador--;
        $('#spanContador').text(contador);
        $('#spanTotal').text($('#spanTotal').text());
        actualizaAjax();
        return contador;
        }

       // ahora actualizar el contenido del div que muestra el gif
    }


    </script>
    </body>
</html>
