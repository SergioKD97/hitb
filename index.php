<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Hitbee</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimun-scale =1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="js/jquery.raty.css" rel="stylesheet" type="text/css"/>

        
        
        <link href="css/propioCss.css" rel="stylesheet" type="text/css"/>
        
        
        
        <!--vh relacion con el alto vw relacion con el ancho de la pagina-->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.js" type="text/javascript"></script>
    </head>
    <style>
    
    
        
    </style>
    
    
    <body class="body-wrap-home">
        <?php require './conectarBBDD.php';?>
        
   <div id="main" class="main-wrap-home">
    <header>
        <div class="row container" >
            
            <div class="col-s-3 col-lg-3  header-logo">
                <h1>
                    <a a href="index.php" id="logo"></a>
                </h1>
            </div>
            
            <div class="col-s-6 col-lg-6" style="text-align: center">
                
                <div id="HitBee">
                   
                </div>
                
                <div style="clear: both"></div>
                
                <div  id="menu">
                    <ul class="top-menu">
                        <li><a href="Productos.php"><span class="li-text"> Home </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Noticias </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Dietas </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Sobre Nosotros </span></a></li>
                    </ul>
                </div>
                
                
            </div>
            
            <div id="top-user" class="col-s-3 col-lg-2">
            
                <div id="marginLogin">
                    <a href="javascript:void(0)" id="loginPop" title="Login" data-toggle="modal" data-target="#pop-auth">
                        <i class="fas fa-user"></i> LOGIN
                    </a>                
                
                </div>
                    
            
            
            
            </div>
            
    </header>
       <div id="headerPad" ></div>
        
        
        
        
        
       <div class="row container ">
            <div class="col-xs-3 "></div>
            <div class=" col-xs-9 container ">
                <?php
                $consultaSQL = "select *  from Programas";
                $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
                $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
                for ($i = 0; $i< count($arrayConsulta); $i++){
                    $nombrePrograma = $arrayConsulta[$i][1];
                    $foto = $arrayConsulta[$i][2];
                print('<a href="niveles.php?tipo='.$nombrePrograma.'">'
                        . '<div class="col-sm-4 col-xs-12 text-center bordeChulo img-responsive" style=" margin:20px;font-size: 3vw; background-image: url(imagenes/'.$foto.')"><div class ="info" style="height: 100%;width:100%;"><p>'.$nombrePrograma.'</p></div>' 
                    . '</div></a>');
                if(($i == 1 || $i ==3)){
                    print('<div style="clear: both"></div>');
                }
                }
                ?>
            </div>
        </div>
        <div id="menuAbajo" class="row">
            <div class="col-md-12 text-center">contactanos acabar este menu</div>
        </div>-->
    <script>
    
    </script>
    
    
    
    
   </div>
    
    </body>
</html>

