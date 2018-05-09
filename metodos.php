<!DOCTYPE html>

        <?php require './conectarBBDD.php';?>
        
        <?php 
        class metodos {
        //PAGINA NIVELES
            
            
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
        
        //PAGINA EJERCICIOS
        function numeroEjercicio($creaConexion){
        $consultaSQL = 'select count(*) from '.$_GET['tipo'].' where nivel='.$_GET['nivel'].'';
        $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
        $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
        echo $arrayConsulta[0][0];
        }
        

        function consultaBotonAyuda($creaConexion, $contador){
            
        // ESTA CONSULTASQL ESTA MAL, HAY QUE CORREGIRLA
        $consultaSQL = 'select descripcion from '.$_GET['tipo'].' where nivel='.$_GET['nivel'].'';
        $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
        $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
        echo $arrayConsulta[$contador][0];
        
        }
        
         // esta solo vale para las repes, no para el tiempo
    function numeroEjercicioPersonalizado($creaConexion){
        $consultaSQL = 'select count(*) from seriesPersonalizado where NombreUsu="'.$_SESSION['nombreUsuario'].'" and NombreTabla = "'.$_GET['NombreSerie'].'"';
        $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
        $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
        echo $arrayConsulta[0][0];
        }
        
    // esta solo vale para el tiempo
    function numeroEjercicioPersonalizadoTiempo($creaConexion){
        $consultaSQL = 'select count(*) from tiempopersonalizado where NombreUsu="'.$_SESSION['nombreUsuario'].'" and NombreTabla = "'.$_GET['NombreSerie'].'"';
        $ejecutaConsulta = mysqli_query($creaConexion, $consultaSQL);
        $arrayConsulta = mysqli_fetch_all($ejecutaConsulta);
        echo $arrayConsulta[0][0];

        }
    }
    
    function colocaEjercicioPrincipal($creaConexion){
        $sql = 'select * from '.$_GET['tipo'].' where id = '; //ACABAAAAAAAAAAAAAAAAAAAAR
    }
        // FIN PAGINA EJERCICIOS
   
        ?>
