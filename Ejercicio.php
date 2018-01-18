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
        
        
        <div id="menuArriba"class="row" style=" height: 50px; background-color: #e6e6e6; margin-bottom: 15px;">
            <div class="col-md-6">utlimas noticias</div>
            <div class="col-md-4"><a href="index.php">logo</a></div>
            <div class="col-md-2"><div style="height: 50px;"class="btn bordeChuloAbajo text-center">Registrate</div></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="niveles.php?tipo=<?php echo $_GET['tipo']?>"><button class="btn btn-info" style="border-radius: 50%; margin-left: 10%;" ><i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
            </div>
            <div class="col-md-6" style="background-color: red;">
                <p><b>AQUI IRA EL GIF, EL NOMBRE DEL EJERCICIO Y ABAJO LAS REPETICIONES PASAR DE UNA ACTIVIDAD A OTRA Y EN EL DIV DE LA DERECHA LA INFO DEL EJERCICIO</b></p>
            </div>
            <div class="col-md-3">
                <button class="btn btn-info" style="border-radius: 50%; margin-left: 10%;" ><i class="fa fa-question" aria-hidden="true"></i></button>    
            </div>
        </div>
<!--        <div id="menuAbajo" class="row">
            <div class="col-md-12 text-center">contactanos acabar este menu</div>
        </div>-->
    <script>
    
    </script>
    </body>
</html>
