<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Musculo</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimun-scale =1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="js/jquery.raty.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/propioCss.css" rel="stylesheet" type="text/css"/>
        
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
                print('<p> '.$nombre1.' </p>');
            }
        }
        
        function niveles ($creaConexion, $nivel){
            switch ($nivel){
                case 1:
                    $consulta1 = "select * from pecho where nivel = 1";
                    $ejecutaConsulta1 = mysqli_query($creaConexion, $consulta1);
                    $arrayConsulta1 = mysqli_fetch_all($ejecutaConsulta1);
                    return $arrayConsulta1;break;   
                case 2:
                    $consulta1 = "select * from pecho where nivel = 2";
                    $ejecutaConsulta1 = mysqli_query($creaConexion, $consulta1);
                    $arrayConsulta1 = mysqli_fetch_all($ejecutaConsulta1);
                    return $arrayConsulta1;break;
                case 3:
                    $consulta1 = "select * from pecho where nivel = 3";
                    $ejecutaConsulta1 = mysqli_query($creaConexion, $consulta1);
                    $arrayConsulta1 = mysqli_fetch_all($ejecutaConsulta1);
                    return $arrayConsulta1;break;                    
            }   
        
        }
       
        ?>
        
       
        
        <div id="menuArriba"class="row" style=" height: 50px; background-color: grey; margin-bottom: 15px;">
            <div class="col-md-6">utlimas noticias</div>
            <div class="col-md-4"><a href="index.php">logo</a></div>
            <div class="col-md-2"><div style="height: 50px;"class="btn bordeChuloAbajo text-center">Registrate</div></div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center" style="padding: 30px; background-color: #66ffc2">
                <h1>Nivel 1</h1>
                <div>
                    <?php
                        ejecutaConsulta($creaConexion, $lvl = 1);
                    ?>
                </div>
            </div>
            <div class="col-md-4 text-center" style="padding: 30px; background-color: #66ffc2">
                <h1>Nivel 2</h1>
                <div>
                    <?php
                        ejecutaConsulta($creaConexion, $lvl = 2);
                    ?>
                </div>            
            
            </div>
            <div class="col-md-4 text-center" style="padding: 30px; background-color: #66ffc2">
                <h1>Nivel 3</h1>
                <div>
                    <?php
                        ejecutaConsulta($creaConexion, $lvl = 3);
                    ?>
                </div>            
            </div>

        </div>
<!--        <div id="menuAbajo" class="row">
            <div class="col-md-12 text-center">contactanos acabar este menu</div>
        </div>-->
    <script>
    
    </script>
    </body>
</html>

