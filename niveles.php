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
                $id1 = $arrayNivel1[$i][0];
                $nivel1 = $arrayNivel1[$i][1];
                $nombre1 = $arrayNivel1[$i][2];
                $descri1 = $arrayNivel1[$i][4];
                print('<p class="id'.$id1.'nvl'.$nivel1.'"> -'.$nombre1.' </p> ');
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
        
       
        
            <div class="row bodyNiveles" >
                
                                
                <div class="col-md-4 text-center divNivelBocata" style="margin-top: 0%;height: 250px;">
                    <a href="Ejercicio.php?tipo=<?php echo $_GET['tipo'] ?>&nivel=1"> 
                        <h1 id="titulo1" class="text-center logo">Nivel 1</h1>
                     </a>
                    
                    <div id="texto1">
                        <?php
                            ejecutaConsulta($creaConexion, $lvl = 1);
                        ?>
                    </div>
                </div>

                
                <div class="col-md-4 text-center" style="margin-top: 0%;height: 250px;">
                    <a href="Ejercicio.php?tipo=<?php echo $_GET['tipo'] ?>&nivel=2">
                        <h1 id="titulo2"  class="text-center logo">Nivel 2</h1>
                    </a>
                   
                    <div id="texto1">
                        <?php
                            ejecutaConsulta($creaConexion, $lvl = 2);
                        ?>
                    </div>
                </div>
                
                <div class="col-md-4 text-center" style="margin-top: 0%;height: 250px;">
                    <a href="Ejercicio.php?tipo=<?php echo $_GET['tipo'] ?>&nivel=3">
                        <h1 id="titulo3"  class="text-center logo">Nivel 3</h1>
                    </a>
                    
                    <div id="texto1">
                        <?php
                            ejecutaConsulta($creaConexion, $lvl = 3);
                        ?>
                    </div>
                </div>
        </div>
        
 
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
        
        
        
    /*   FUNCION PARA HACER ALGO EN OTRO DIV Q NO SEA EL HOVER 
    $(".logo").hover(function(){
        $(".divNivelBocata").css("border", "2px solid #C00");
        }, function(){
        $(".divNivelBocata").css("border", "none");
    });
    */
        
        
        
        
    </script>
    </body>
</html>

