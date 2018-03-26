<!DOCTYPE html>

        <?php require './conectarBBDD.php';?>
        
        <?php 
        class metodos {
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
    }
    
    function colocaEjercicioPrincipal($creaConexion){
        $sql = 'select * from '.$_GET['tipo'].' where id = '; //ACABAAAAAAAAAAAAAAAAAAAAR
    }
        // FIN PAGINA EJERCICIOS
    
        ?>
