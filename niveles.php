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
        <!--<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/icomoon.css" rel="stylesheet" type="text/css"/>
        <link href="css/propioCss.css" rel="stylesheet" type="text/css"/>
        <link href="css/niveles/prueba.css" rel="stylesheet" type="text/css"/>
        <!--vh relacion con el alto vw relacion con el ancho de la pagina-->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.js" type="text/javascript"></script>
    </head>
    <body>
        <?php require './conectarBBDD.php'; 
        // funcion que muestran el contenido de cada nivel
        
        function ejecutaConsulta($creaConexion, $lvl){
                        
            $arrayNivel1 = niveles($creaConexion, $lvl);
            for($i = 0; $i<count($arrayNivel1); $i++){
                $nombre1 = $arrayNivel1[$i][2];
                $descri = $arrayNivel1[$i][4];
                print('<p> '.$nombre1.' </p> ');
            }
        }
        
        function niveles ($creaConexion, $nivel){
            switch ($nivel){
                case 1:
                    $consulta1 = 'select * from '.$_GET['tipo'].' where nivel = 1';
                    $ejecutaConsulta1 = mysqli_query($creaConexion, $consulta1);
                    $arrayConsulta1 = mysqli_fetch_all($ejecutaConsulta1);
                    return $arrayConsulta1;break;   
                case 2:
                    $consulta1 = 'select * from '.$_GET['tipo'].' where nivel = 2';
                    $ejecutaConsulta1 = mysqli_query($creaConexion, $consulta1);
                    $arrayConsulta1 = mysqli_fetch_all($ejecutaConsulta1);
                    return $arrayConsulta1;break;
                case 3:
                    $consulta1 = 'select * from '.$_GET['tipo'].' where nivel = 3';
                    $ejecutaConsulta1 = mysqli_query($creaConexion, $consulta1);
                    $arrayConsulta1 = mysqli_fetch_all($ejecutaConsulta1);
                    return $arrayConsulta1;break;                    
            }   
        
        }
       
        ?>
        
       
        
        <div id="menuArriba"class="row" style=" height: 50px; background-color: #e6e6e6; margin-bottom: 15px;">
            <div class="col-md-6">utlimas noticias</div>
            <div class="col-md-4"><a href="index.php">logo</a></div>
            <div class="col-md-2"><div style="height: 50px;"class="btn bordeChuloAbajo text-center">Registrate</div></div>
        </div>
            <div class="row" style="margin: 0 auto; margin-left: 5% ">
                
                                
                <a href="Ejercicio.php?tipo=<?php echo $_GET['tipo'] ?>&nivel=1"><div class="col-md-3 text-center" style="margin: 3% ; ">
                <!--<div  class="text-center bordesCirculares" style="height:15vh; width: 100%; background-color: #66ffc2">-->
                <h1 id="titulo1" class="text-center logo">Nivel 1</h1>
                <!--</div>-->
                <div id="texto1" style="width: 100%; color: white;">
                    <?php
                        ejecutaConsulta($creaConexion, $lvl = 1);
                    ?>
                </div>
                </div></a>

                <a href="Ejercicio.php?tipo=<?php echo $_GET['tipo'] ?>&nivel=2"><div class="col-md-3 text-center" style="margin: 3% ;">
                <!--<div class="text-center bordesCirculares" style="width: 100%; background-color: #ffcc66">-->
                    <h1 id="titulo2"  class="text-center logo">Nivel 2</h1>
                <!--</div>-->
                <div id="texto2" style="width: 100%; color: white;">
                    <?php
                        ejecutaConsulta($creaConexion, $lvl = 2);
                    ?>
                </div>
                </div></a>
                <a href="Ejercicio.php?tipo=<?php echo $_GET['tipo'] ?>&nivel=3"><div class="col-md-3 text-center" style="margin: 3%;">
                <!--<div class="text-center bordesCirculares" style="width: 100%; background-color: #ff5c33">-->
                    <h1 id="titulo3"  class="text-center logo">Nivel 3</h1>
                <!--</div>-->
                <div id="texto3" style="width: 100%; color: white;">
                    <?php
                        ejecutaConsulta($creaConexion, $lvl = 3);
                    ?>
                </div>
                </div></a>
        </div>
<!--        <div id="menuAbajo" class="row">
            <div class="col-md-12 text-center">contactanos acabar este menu</div>
        </div>-->
    <script>
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
    </body>
</html>

