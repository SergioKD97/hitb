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
        
        <?php 
        class metodos {
        //PAGINA EJERCICIOS
        function numeroEjercicio($creaConexion){
        $consultaSQL = 'select count(*) from pecho where tipo="'.$_GET['tipo'].'" and nivel='.$_GET['nivel'].'';
        $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
        $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
        echo $arrayConsulta[0][0];
        }
        

        function consultaBotonAyuda($creaConexion, $contador){
           
        // ESTA CONSULTASQL ESTA MAL, HAY QUE CORREGIRLA
        $consultaSQL = 'select descripcion from pecho where tipo="'.$_GET['tipo'].'" and nivel='.$_GET['nivel'].'';
        $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
        $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
        echo $arrayConsulta[$contador][0];
        
        }
    }
    
    function colocaEjercicioPrincipal($creaConexion){
        $sql = 'select * from pecho where tipo="'.$_GET['tipo'].'" and ';
    }
        // FIN PAGINA EJERCICIOS
    
        ?>
        
       
    </body>
</html>
