        <?php 
        
        require './conectarBBDD.php';?>
        
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
    
    // PARA EL MENU DEL INDEX
    function menu (){
        if((isset($_SESSION['nombreUsuario'])) && 
               ($_SESSION['nombreUsuario'] != '')){
            $direccion = 'UsuarioFuerte.php';

        }else{
             $direccion = 'index.php';
        }
        return $direccion;
    }
    
    function corrigeNombre ($nombre){
        $primeraLetra = strtoupper($nombre[0]);
        $restoPalabra =  substr($nombre, 1, strlen($nombre)-1);
        strtolower($restoPalabra);
        $Final = $primeraLetra . $restoPalabra; 
        return $Final;
    }
    
    function actualizaInterfaz(){
//            if( (isset($_GET['usuarioNuevo'])) && ($_GET['usuarioNuevo'] == true)){
//                echo '<script language="javascript">alert("Usuario registrado con éxito");</script>';
//            }
            if((isset($_SESSION['nombreUsuario'])) && 
               ($_SESSION['nombreUsuario'] != '')){
                $nombre = str_replace('_', ' ', $_SESSION['nombreUsuario']);                
                
                //actulaliza el nombre de usuario en el nombre del login
                echo "<script>$('#letraLogin').text('".$this->corrigeNombre($nombre)."');</script>"; // creo que esta linea no sirve para nada
    //          print_r($_SESSION['nombreUsuario'] + 'este es el nombre de usuario');
                echo '<script>$("#top-user").html("'.'<div onclick="+"enviaPanel();"+" id="+"marginLogin"+">'
                . '<a href="+"javascript:void(0)"+" id="+"loginPop"+" title="+"Login"+" data-toggle="+"modal"+" data-target="+"#pop-auth"+">'
                        . '<img style="+"width:50px;margin-top:0px;margin-bottom:6px;margin-left:0px;"+" src="+"imagenes/iconoLogin.jpg"+"> <span id="+"letraLogin"+" class="+"letraLogin"+"> '. $this->corrigeNombre($nombre).'</span>'
                        . '</a>'
                        . '<a href="+"cerrarSesion.php"+" >'
                        . '<i style="+"font-size:60px;color:red;float:right"+" id="+"iconoLogin"+" class="+"icon-exit_to_app"+"></i>'
                        . '</a>'
                        . '</div>'.'");</script>';
                
            }
                   
                
    }

    }//FIN CLASE
        ?>
