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
            <div class="col-md-6" id="ultimasNoticias">utlimas noticias</div>
            <div class="col-md-4"><a href="index.php">logo</a></div>
            <div class="col-md-2"><div style="height: 50px;"class="btn bordeChuloAbajo text-center">Registrate</div></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="niveles.php?tipo=<?php echo $_GET['tipo']?>"><button class="btn btn-info" style="border-radius: 50%; margin-left: 10%;" ><i class="icon-arrow-left" ></i></button></a>
            </div>
            <div class="col-md-6" id="ejercicio"   style="background-color: red;">
                <p><b>AQUI IRA EL GIF, EL NOMBRE DEL EJERCICIO Y ABAJO LAS REPETICIONES PASAR DE UNA ACTIVIDAD A OTRA Y EN EL DIV DE LA DERECHA LA INFO DEL EJERCICIO</b></p>
                
            </div>
            <div class="col-md-3">
                <button id="botonAyuda" class="btn btn-info" onclick="apareceAyuda()" style="border-radius: 50%; margin-left: 10%;" ><i class="icon-question" ></i></button> 
                <br>
                <div id="textoAyuda" style="width: 100%; "><?php echo $miMetodos->consultaBotonAyuda($creaConexion, $postContador)?></div>
            </div>
        </div>
        
        <div class="row">
            <!--<form method="post" name="formularioEjercicio">-->
            <div class="col-md-12 text-center">      <!--ESta funcion ya hace sola que printe el numero total de ejercicios, PERO FALTA PONER POR CUAL VA-->
                <button name="botonMenos"  
                        class="btn btn-info" style="border-radius: 50%; font-size: 8vw;" onclick="temporizador('menos');">
                    <i class="icon-arrow-left  "></i></button>
                    
                <span id="numeroEjercicio" style="font-size: 8vw;">
                    <span id="spanContador"> 1<?php // echo $contador;?></span>
                    /
                    <span id="spanTotal"><?php echo $miMetodos->numeroEjercicio($creaConexion); ?></span>
                </span>
                <button onclick="temporizador('mas');" name="botonMas" id="botonMas" class="btn btn-info" style="border-radius: 50%; font-size: 8vw;"><i class="icon-arrow-right" ></i></button>
            </div> 
            <!--</form>-->
        </div>
        <div id="invisible"></div>
<!--        <div id="menuAbajo" class="row">
            <div class="col-md-12 text-center">contactanos acabar este menu</div>
        </div>-->
            <script>
    var ayuda = false;
    var contador = 1; 
    //Para cargar el 1 ejercicio
    actualizaAjax(); 
     
    
    function temporizador (condicion){
        
        if((condicion === 'mas') && (contador != $('#spanTotal').text())){
        
                var contadorCronometro = 5;
                var saludo = function (){
                    contadorCronometro--;
                    $('#ejercicio').html('<h1 class="text-center">'+contadorCronometro+'</h1>');  
                    if(contadorCronometro === 0){
                        clearInterval(intervalo);
                        sumaEjercicio();
                    }
            };
    
                intervalo = setInterval(saludo, 1000);
        }
        if((condicion ==='menos') && (contador !== 1)){

                var contadorCronometro = 5;
                var saludo = function (){
                    contadorCronometro--;
                    $('#ejercicio').text('<h1 class="text-center">'+contadorCronometro+'</h1>');  
                    if(contadorCronometro === 0){
                        clearInterval(intervalo);
                        restaEjercicio();
                    }
            };

            intervalo = setInterval(saludo, 1000);
        }
        
    };   
    
    
    
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
