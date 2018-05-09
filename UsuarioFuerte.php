<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hitbee</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimun-scale =1.0">        
          <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/propioCss.css" rel="stylesheet" type="text/css"/>
        <link href="css/icomoon.css" rel="stylesheet" type="text/css"/>
        <link rel='stylesheet' href='css/calendario/fullcalendar.css' />
        <script src="js/calendario/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
                
        <script src='js/calendario/moment.min.js'></script>
        <script src='js/calendario/fullcalendar.js'></script>
        <script src="js/calendario/es.js" type="text/javascript"></script>
        
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
    </head>
    <body class="body-wrap-home">
        <?php 
        include './metodos.php';
        $miMetodos = new metodos();
        $nivel = "";
//        $tipo = $_GET['tipo'];
//        $Modo = $tipo[0];
        if(isset($_GET['usuarioNuevo'])){
            echo '<script language="javascript">alert("Usuario registrado con éxito");</script>';
        }
        ?>
        
        
            
        <header>
        <div class="row container" >
            
            <div class="menu_bar  col-xs-2 col-s-3 col-md-3 col-lg-3">
                <a href="#" class="bt-menu iconoMenu"><span class="icon-bars"></span></a>
            </div>
            
            <div class=" header-logo col-lg-3">
                <h1>
                    <a a href="index.php" id="logo"></a>
                </h1>
            </div>
            
            <div class="col-xs-7 col-s-6 col-md-6  col-lg-6" style="text-align: center">
                
                <div id="HitBee">
                   
                </div>
                
                <div  id="menu">
                    <ul class="top-menu">
                        <li><a href="index.php"><span class="li-text"> Workouts </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Noticias </span></a></li>
                        <li><a href="Productos.php"><span class="li-text"> Dietas </span></a></li>
                        <li><a href="Productos.php"><span class="ac_unit"> Info </span></a></li>
                        
                    </ul>
                </div>
                
                
            </div>
            
            <div id="top-user" class="col-xs-3 col-s-3 col-md-3  col-lg-3">
            
                <div id="marginLogin">
                    <a href="javascript:void(0)" id="loginPop" title="Login" data-toggle="modal" data-target="#pop-auth">
                       <!--al pinchar en este boton se abre el modal puesto en el data-target-->
                       <i class="icon-user-circle iconoLogin"  data-toggle="modal" data-target="#ModalContenedor"></i> <span class="letraLogin">LOGIN</span>
                    </a>                
                    
                    
                    
                </div>
            
            
            
            
            </div>
            
    </header>
       
    <!--hace que el body se baje-->
    <div class="headerPad" ></div>
    
    
                <nav class="navResponsive">
                    <ul class="ulResponsive">
                        <li class="liResponsive"><a class="aResponsive" href="#"><span class="icon-house spanResponsive"></span>Inicio</a></li>
                        <li class="liResponsive"><a class="aResponsive" href="#"><span class="icon-suitcase spanResponsive"></span>Trabajos</a></li>
                        <li class="liResponsive"><a class="aResponsive" href="#"><span class="icon-earth spanResponsive"></span>Servicios</a></li>
                        <li class="liResponsive"><a class="aResponsive" href="#"><span class="icon-mail spanResponsive"></span>Contacto</a></li>
                    </ul>
		</nav>
    
    
        <!--****MODAAAAAAAAAAAAAAAAAAAAAL*****-->
<!-- Modal -->
<div class="modal fade" id="ModalContenedor" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <!--Este boton es la x de arriba a la derecha-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          <h3 class="modal-title text-center"  id="tituloModal"><b>Formulario de registro</b></h3>
      </div>
        
      <div class="modal-body">
          <form name="formularioRegsitroModal" action="registro.php" method="POST">
          <table border="0" style=" margin-left: auto; margin-right: auto;">
                    <tbody>
                      <tr>
                          <td>Nombre de usuario</td>
                          <td style="margin-left: 10%;"><input type="text" required="" name="nombre" placeholder="Nombre de usuario" /></th>
                      </tr>

                  
                      <tr>
                          <td>Contraseña</td>
                          <td style="margin-left: 10%;"> <input type="password" required="" name="contra" placeholder="contraseña" /></td>
                      </tr>
                      <tr>
                          <td>Confirmar contraseña</td>
                          <td style="margin-left: 10%;"><input type="password" required="" name="contra2" placeholder="Confirma contraseña" /></td>
                      </tr>
                  </tbody>
              </table>
          <br>
          <input  type="submit" class="btn  btn-block btn-primary"value="Confirmar" name="botonEnviar" />   
          </form>
      </div>
    </div>
  </div>
</div>
<br><br>       
<div class="container">   
    <div class="col-md-6"  id="calendar"></div>
    <div class="col-md-6"  id="series">
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#modalSeries">Crea Tus Series</button>
        <br>
        <h2 class="text-center">Tus series: </h2>
        <div style="width: 100%;" id="seriesCreadas">
            <?php 
            // ESTA ES PARA LAS REPETICIONES
                $consultaSerie = "select * from seriespersonalizado where NombreUsu = '".$_SESSION['nombreUsuario']."' group by NombreTabla;";
                $consultaSerie = mysqli_query($creaConexion, $consultaSerie);
                $resultado = mysqli_fetch_all($consultaSerie);
                print('<h3 class="text-center"> Repeticiones</h3>');
                for($i = 0; $i<count($resultado); $i++){
                    $id = $resultado[$i][0] ;
                    $nombreTabla = $resultado[$i][2];

                    print('<a href="EjerciciosPersonalizados.php?NombreSerie='.$nombreTabla.'&tipo=seriespersonalizado"><button class="btn btn-warning btn-block">'.$nombreTabla.'</button></a>');
                }
                
                // ESTA ES PARA LAS DE TIEMPO
                //REVISAR ESTOS PARAMETROOOOOOOS
                $consultaSeriet = "select * from tiempopersonalizado where NombreUsu = '".$_SESSION['nombreUsuario']."' group by NombreTabla;";
                $consultaSeriet = mysqli_query($creaConexion, $consultaSeriet);
                $resultadot = mysqli_fetch_all($consultaSeriet);
                print('<h3 class="text-center"> Tiempo</h3>');
                for($j = 0; $j<count($resultadot); $j++){
                    $id = $resultadot[$j][0] ;
                    $nombreTabla = $resultadot[$j][2];

                    print('<a href="EjerciciosPersonalizados.php?NombreSerie='.$nombreTabla.'&tipo=tiempopersonalizado"><button class="btn btn-block btn-info">'.$nombreTabla.'</button></a>');
                }
            ?>
        </div>
    </div>
</div>     




<!--MODAAAAAAAL SERIRES-->
<!-- Modal -->
<div class="modal fade" id="modalSeries" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Crea tu serie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <button id="repes" class="btn btn-info btn-block" onclick="seleccionaFormulario(this.id);" >Repeticiones</button>
          <button id="tiempo" class="btn btn-info btn-block" onclick="seleccionaFormulario(this.id);" >Tiempo</button>
          <form id="formularioTiempo" action="seriePersonalizada.php?tiempo=tiempo&contador=1" method="post">
           
              <input type="text" name="nombreTiempo" required="" placeholder="Nombre de la serie" style="margin-left: 30%;" />
              
              <br><br>
              <div id="contenidoFormulariot">                 
               <!--  Aqui se cargarán los ejercicicios que se quieran meter-->
                <div id="cuerpoTiempo">
                    <div id="ejerciciot">
                        <input type="text" required="" name="nombret1" id="nombret" placeholder="nombre"/>
                        <input type="text" required="" name="minutos1" id="minutost" placeholder="minutos"/>
                        <input type="text" required="" name="segundos1" id="segundost" placeholder="segundos"/>
                        <!--<input type="text" required="" id="id"/>-->
                    </div>
                </div> 
               <div class="btn-group" role="group" aria-label="Basic example">
                   <input type="button" id="OtroEjerciciot" onclick="SumaEjercicio(this.id);" class="btn btn-secondary" value="Otro ejercicio"/>
                   <input type="reset" value="Borrar" class="btn btn-danger" />
                   <input type="submit" id="enviaRepest" name="enviaTiempo" value="Enviar" class="btn btn-success" />             
               </div> </div>
         </form>  
          
          <!--FORMULARIO SERIES!!!-->
          <form id="formularioSeries" action="seriePersonalizada.php?contador=1" method="post">
              <input type="text" name="nombreSerie" required="" placeholder="Nombre de la serie" style="margin-left: 30%;" />
              <br><br>
              <div id="contenidoFormulario">                 
               <!--  Aqui se cargarán los ejercicicios que se quieran meter-->
                <div id="cuerpoSerie">
                    <div id="ejercicio">
                        <input type="text" required="" name="nombre1" id="nombre" placeholder="nombre"/>
                        <input type="text" required="" name="repeticiones1" id="repeticiones" placeholder="repeticiones"/>
                        <!--<input type="text" required="" id="id"/>-->
                    </div>
                </div> 
               <div class="btn-group" role="group" aria-label="Basic example">
                   <input type="button" id="OtroEjercicio" onclick="SumaEjercicio(this.id);" class="btn btn-secondary" value="Otro ejercicio"/>
                   <input type="reset" value="Borrar" class="btn btn-danger" />
                   <input type="submit" id="enviaRepes" name="enviaRepes" value="Enviar" class="btn btn-success" />
              </div>
         </div>    
        </form>                 
      </div>
    </div>
  </div>
</div>
<script>
    
    
//CALENDARIO 
$("#calendar").fullCalendar({
    dayClick:function(date,jsEvent,view){
//        $(this).css('background-color', 'red');
//        alert('pulsaste sobre ' + date.format());
        //$('#modalEvento1').modal();
    },
    events:'http://127.0.0.1:8081/PHP/hitbee/eventos.php',
    eventClick:function(calEvent,jsEvent,view){     
        $('#titutloEvento').html(calEvent.title);
        $('#descripcionEvento').html(calEvent.descripcion);
        $('#modalEvento1').modal();
        
    }
});
//FIN CALENDARIO
    contador = 1;
    $('#formularioSeries').hide();
    $('#formularioTiempo').hide();
    function seleccionaFormulario(id){
        $('#tiempo').fadeIn();
        $('#repes').fadeIn();
        console.log(id);
        switch(id){
            case 'repes': 
                $('#formularioSeries').fadeIn();
                $('#tiempo').hide();
                $('#repes').hide();
                break;
            case 'tiempo': 
                $('#formularioTiempo').fadeIn();
                $('#tiempo').hide();
                $('#repes').hide(); ;break;
            default: alert('error al seleccionar formulario para la serie');break;
        }      
    }
    function SumaEjercicio(id){
        contador++;
        switch(id){
            case 'OtroEjercicio':   
                                $('#cuerpoSerie').html($('#cuerpoSerie').html() + '<div id="ejercicio'+contador+'">\n\
                                                         <input type="text" required="" id="nombre'+contador+'" name="nombre'+contador+'" placeholder="nombre"/>\n\
                                                          <input type="text" required="" id="repeticiones'+contador+'" name="repeticiones'+contador+'" placeholder="repeticiones"/>\n\
                                                          <!--<input type="text" required="" id="'+contador+'"/>-->\n\
                                                          </div>' );
        $('#formularioSeries').attr('action', 'seriePersonalizada.php?contador='+contador);break;
    
            case 'OtroEjerciciot' : 
                                $('#cuerpoTiempo').html($('#cuerpoTiempo').html() + '<div id="ejercicio'+contador+'">\n\
                                 <input type="text" required="" id="nombret'+contador+'" name="nombret'+contador+'" placeholder="nombre"/>\n\
                                  <input type="text" required="" id="minutos'+contador+'" name="minutos'+contador+'" placeholder="minutos"/>\n\
                                  \n\<input type="text" required="" id="segundos'+contador+'" name="segundos'+contador+'" placeholder="segundos"/>\n\
                                  <!--<input type="text" required="" id="'+contador+'"/>-->\n\
                                  </div>' );
        $('#formularioTiempo').attr('action', 'seriePersonalizada.php?tiempo=tiempo&contador='+contador);break;
        }
        
        
    }
</script>

<!--MODAAAAAAAAAL CALENDARIO-->
<!-- Modal -->
<div class="modal fade" id="modalEvento1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titutloEvento">Agregar titulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div id="descripcionEvento"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-secondary">Borrar</button>
        <button type="button" class="btn btn-primary">Modificar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
  </div> 
</div>
    </body>
</html>

