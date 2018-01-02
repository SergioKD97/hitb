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
        <?php require './conectarBBDD.php';?>
        
        <div id="menuArriba"class="row" style=" height: 50px; background-color: grey; margin-bottom: 15px;">
            <div class="col-md-6">utlimas noticias</div>
            <div class="col-md-4"><a href="index.php">logo</a></div>
            <div class="col-md-2"><div style="height: 50px;"class="btn bordeChuloAbajo text-center">Registrate</div></div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <?php
                $consultaSQL = "select *  from Programas";
                $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
                $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
                for ($i = 0; $i< count($arrayConsulta); $i++){
                    $nombrePrograma = $arrayConsulta[$i][1];
                    $foto = $arrayConsulta[$i][2];
                print('<a href="niveles.php"><div class="col-md-4 text-center pull-left bordeChulo" style="font-size: 3vw;">'.$nombrePrograma.'<br> '
                    . '<div class="img-responsive "><img style="width:20vw; height:20vw;" src="imagenes/'.$foto.'"></img></div> </div></a>');
                }
                ?>
            </div>
        </div>
<!--        <div id="menuAbajo" class="row">
            <div class="col-md-12 text-center">contactanos acabar este menu</div>
        </div>-->
    <script>
    
    </script>
    </body>
</html>

