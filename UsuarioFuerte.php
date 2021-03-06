<!DOCTYPE html>
<?php
session_start();
?>
<html style="height: 100%">
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
        
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.js" type="text/javascript"></script>
        <script src='js/calendario/moment.min.js'></script>
        <script src='js/calendario/fullcalendar.js'></script>
        <script src="js/calendario/es.js" type="text/javascript"></script>
        
        <!--estas dos son para el clockpicker-->
        <script src="js/calendario/bootstrap-clockpicker.js" type="text/javascript"></script>
        <link href="css/calendario/bootstrap-clockpicker.css" rel="stylesheet" type="text/css"/>
        <!--FIN CLOCKPICKER-->
        
        
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
    </head>
    <body class="bodyUsuario" style="height: 100%">
        <?php
        include './metodos.php';
        $miMetodos = new metodos();
        $direccion = $miMetodos->menu();//variable para cambiar el href del Usuario  
        //Abajo esta lo de actualiza interfaz porque como lo ponga arriba se ejecuta antes del codigo
        //nomal y se buggea
        $nivel = "";

        
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
            
            <div class="col-xs-6 col-s-6 col-md-6  col-lg-6" style="text-align: center">
                
                <a href="index.php"><div id="HitBee"></div></a>
                
                <div  id="menu">
                    <ul class="top-menu">
                        <li><a href="index.php"><span class="li-text"> Workouts </span></a></li>
                        <li><a href="<?php echo $direccion?>"><span class="li-text"> Usuario </span></a></li>
                    </ul>
                </div>
                
                
            </div>
            
            <div id="top-user" class="col-xs-4 col-s-3 col-md-3  col-lg-3">
            
                <div id="marginLogin" data-toggle="modal" data-target="#ModalContenedor">
                    <a href="<?php echo $direccion?>" id="loginPop" title="Login" data-toggle="modal" data-target="#pop-auth">
                       <!--al pinchar en este boton se abre el modal puesto en el data-target-->
                       <i class="icon-user-circle iconoLogin"  ></i> <span id="letraLogin" class="letraLogin">LOGIN</span>
                    </a>               
                    
                </div>
            </div>
            
            
    </header>
       

    
    
                <nav class="navResponsive">
                    <ul class="ulResponsive">
                        <li class="liResponsive"><a class="aResponsive" href="index.php"><span class="icon-home spanResponsive"></span>Workout</a></li>
                        <li class="liResponsive"><a class="aResponsive" href="<?php echo $direccion?>"><span class="icon-home spanResponsive"></span>Usuario</a></li>
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
          <!--formulario registro-->
          <form id="formularioRegsitroModal" name="formularioRegsitroModal" action="registro.php" method="POST">
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
          <input  type="submit" class="btn  btn-block btn-primary"value="Confirmar" id="botonEnviar" name="botonEnviar" />   
          <input type="buton" class="btn  btn-block btn-danger" value="Login" id="login" onclick="muestraLogin(this.id);"/>
          </form>
          <!--FORMULARIO LOGIN-->
          <form id="formularioLogin" action="login.php" method="post">
             <table border="0" style=" margin-left: auto; margin-right: auto;">
                    <tbody>
                      <tr>
                          <td>Nombre de usuario</td>
                          <td style="margin-left: 10%;"><input type="text" value="Marco" required="" name="nombreLogin" placeholder="Nombre de usuario" /></th>
                      </tr>

                  
                      <tr>
                          <td>Contraseña</td>
                          <td style="margin-left: 10%;"> <input type="password" value="1234" required="" name="contraLogin" placeholder="contraseña" /></td>
                      </tr>
                  </tbody>
              </table>
          <br> 
          <input  type="submit" class="btn  btn-block btn-primary" value="Confirmar" id="ConfirmarLogin" name="botonEnviar" />   
          <input type="buton" class="btn  btn-block btn-danger" value="Registro" id="registro" onclick="muestraLogin(this.id);"/>
          </form>
      </div>
    </div>
  </div>
</div>
        
        
        <!--**** FIN  MODAAAAAAAAAAAAAAAAAAAAAL*****-->


        
<br><br>            
<div class="container-fluid contenedorUsuarioFuerte" >    
    <div class="col-xs-1 hidden-md col-lg-1 divPrimeroCalendario"></div>
    <div class="col-xs-10 col-md-6 col-lg-5 DivCalendario"  id="calendar"></div>

    <div class="col-xs-1 text-center clearBoth col-md-1 col-lg-1 divPrimeroSeries"></div>
    <div class="col-xs-10 col-md-6 col-lg-4 "  id="series" >
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#modalSeries">Crea Tus Series</button>
        <br>
        <h2 class="text-center clearBoth">Tus series: </h2>
        <div style="width: 100%;" id="seriesCreadas">
            <?php 
            // ESTA ES PARA LAS REPETICIONES
                $consultaSerie = "select * from seriespersonalizado where NombreUsu = '".$_SESSION['nombreUsuario']."' group by NombreTabla;";
                $consultaSerie = mysqli_query($creaConexion, $consultaSerie);
                $resultado = mysqli_fetch_all($consultaSerie);
                
                if(count($resultado)>0){ 
                    print('<h3 class="text-center clearBoth"> Repeticiones</h3>');
                    
                }                   
                
                for($i = 0; $i<count($resultado); $i++){
                    $id = $resultado[$i][0] ;
                    $nombreTabla = $resultado[$i][2];

                    print('<a href="EjerciciosPersonalizados.php?NombreSerie='.$nombreTabla.'&tipo=seriespersonalizado"><button style="margin-bottom: 10px;" id="boton'.$i.'" class="ejerciciosCreados btn btn-warning col-xs-10 col-md-10">'. str_replace('_', ' ', $nombreTabla) .'</button></a>'
                            . '<button id="ayuda'.$i.'" onclick="sS('."'muestraS$i'".')" class="ayudaComun btn btn-secondary col-xs-1 col-md-1"><i class="icon-question"></i></button>'
                            . '<button id="'.$i.'"  class="borrarComun btn btn-secondary col-xs-1 col-md-1" onclick="modoBorrar(this.id,0)"><i id="icono'.$i.'" class="icon-lock"></i></button>'
                            . '<div style="clear: both"></div>'                           
                            . '<div id="muestraS'.$i.'"></div>');
                }
                
                // ESTA ES PARA LAS DE TIEMPO
                //REVISAR ESTOS PARAMETROOOOOOOS
                $consultaSeriet = "select * from tiempopersonalizado where NombreUsu = '".$_SESSION['nombreUsuario']."' group by NombreTabla;";
                $consultaSeriet = mysqli_query($creaConexion, $consultaSeriet);
                $resultadot = mysqli_fetch_all($consultaSeriet);
                
                if(count($resultadot)>0){ 
                    print('<h3 class="text-center" style="clear: both;margin-top: 30px;"> Tiempo</h3>');
                    
                }
                
                if((count($resultado) == 0)&&(count($resultadot) == 0)){ echo '<br><h4 class="text-center">Aún no has creado ninguna serie personalizada. Picha arriba para hacerlo</h4>';
                
                } 
                
                for($j = 0; $j<count($resultadot); $j++){
                    $id = $resultadot[$j][0] ;
                    $nombreTablat = $resultadot[$j][2];

                    print('<a href="EjerciciosPersonalizadosTiempo.php?NombreSerie='.$nombreTablat.'&tipo=tiempopersonalizado"><button id="botonT'.$j.'" class="ejerciciosCreados btn btn-info col-xs-10 col-md-10">'.str_replace('_', ' ', $nombreTablat).'</button></a>'
                            . '<button id="ayuda'.$j.'" onclick="sT('."'muestraT$j'".')" class="ayudaComun btn btn-secondary col-xs-1 col-md-1"><i class="icon-question"></i></button>'
                            . '<button id="t'.$j.'"  class="borrarComun btn btn-secondary col-xs-1 col-md-1" onclick="modoBorrar(this.id,1)" ><i id="iconot'.$j.'" class="icon-lock" ></i></button>'
                            . '<div style="clear: both"></div>'
                            . '<div id="muestraT'.$j.'"></div>');
                }
            ?>
        </div>
    </div>
    <div class="col-xs-1 hidden-md col-lg-1 divSegundoSeries"></div>

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
          
          <button class="btn btn-secondary" id="atrasFormularioPers" onclick="atrasFormPers()" style="display: none;"><i class="icon-arrow-left"></i></button>
          <!--FORMULARIO TIEMPO!!!-->
          
          <form class="form-horizontal" id="formularioTiempo" action="seriePersonalizada.php?tiempo=tiempo&contador=1" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                  <label for="name" class="col-sm-3 col-md-3 col-lg-3 control-label labelNombre">Nombre Serie: </label>
                  <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8 divLabelNombre">
                    <input type="text" class="form-control" name="nombreTiempo" required="" placeholder="" />
                   </div>
              </div>
              
              <br>
              <div id="contenidoFormulariot">                 
               <!--  Aqui se cargarán los ejercicicios que se quieran meter-->
                <div id="cuerpoTiempo">
                    <div class="row"  id="ejerciciot">
                        <div class="col-xs-1 col-sm-1 col-md-1"></div>
                        <label for="name" class="col-xs-4 col-sm-4 col-md-4 text-center">Nombre </label>
                        <label for="name" class="col-xs-3 col-sm-3 col-md-3 text-center">Minutos </label>
                        <label for="name" class="col-xs-3 col-sm-3 col-md-3 text-center">Segundos </label>
                        <br>
                        
                            <div class="col-xs-1 col-sm-1 col-md-1" style="clear: both;font-size: 24px">1.-</div>
                            <div class="col-xs-4 col-sm-4 col-md-4 text-center" style="" >
                                <input type="text" class="contenidoNombre form-control" required="" name="nombret1" id="nombret" placeholder=""/>
                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 text-center" style="margin-left: 23px;" >
                                <input type="number" min="00" class="contenidoMinutos form-control" required="" name="minutost1" id="minutost" placeholder=""/>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1"></div>
                            <div class="col-xs-2 col-sm-2 col-md-2 text-center" style="" >
                                <input type="number" min="00" max="59" class="contenidoSegundos form-control" required="" name="segundost1" id="segundost" placeholder=""/>
                            </div>
                            
                        <div class="row" style="clear: both">
                            <div style="margin-right: 13px;" class="col-xs-1 col-sm-1 col-md-1"></div>
                            <div class="col-xs-4 col-sm-4 col-md-4" style="margin-top: 3px;">
                                <input type="file" id="fotot" name="fotot1">
                            </div>
                        </div>
                    </div>
                </div>               
               
               <div class="btn-group barraOtroEjercicio" role="group" aria-label="Basic example" style="clear: both">
                   <span id="OtroEjerciciot" onclick="SumaEjercicio(this.id);" class="icon-plus icon-pluscss"></span>
                   <span id="EjercicioMenost" onclick="restaEjercicio(this.id);" style="margin-left: 3%;" class="icon-minus icon-pluscss"></span>
                   <input type="reset" value="Borrar" class="btn btn-danger" style="float: right;border-radius: 4px;" />
                   <input type="submit" id="enviaRepest" name="enviaTiempo" value="Enviar" style="float:right;border-radius: 4px;" class="btn btn-success" />             
               </div> </div>
         </form>  
          
          <!--FORMULARIO SERIES!!!-->
          
          <form class="form-horizontal" id="formularioSeries" enctype="multipart/form-data" action="seriePersonalizada.php?contador=1" method="post">
              
              <div class="form-group">
                  <label for="name" class="col-sm-3 col-md-3 col-lg-3 control-label labelNombre">Nombre Serie: </label>
                  <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8 divLabelNombre">
                    <input type="text" class="form-control" name="nombreSerie" required="" placeholder="" />
                   </div>
              </div>
              
              <br>
              <div id="contenidoFormulario">                 
               <!--  Aqui se cargarán los ejercicicios que se quieran meter-->
                <div id="cuerpoSerie">
                    <div class="row" id="ejercicio">
                        <h1 class="col-xs-1 col-sm-1 col-md-1" style="float: left"></h1>
                        <label for="name" class="col-md-4 text-center labelEjercicio">Nombre </label>
                        <label for="name" class="col-md-4 text-center labelRepeticion ">Repeticiones </label>
                                      <br>
                                      <br>

                        <div class="col-xs-1 col-sm-1 col-md-1" style="float: left;font-size: 24px">1.-</div>
                        <div class="col-xs-4 col-sm-4 col-md-4" style="" >
                            <input type="text" class="contenidoNombre form-control" required="" name="nombre1" id="nombre" placeholder=""/>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1"></div>
                        
                        <div class="col-xs-2 col-sm-2 col-md-2" style="">
                            <input type="number" min="0" class="contenidoRepes form-control" required="" name="repeticiones1" id="repeticiones" placeholder=""/>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4"></div>
                        
                        <div class="row" style="clear: both">
                            <div style="margin-right: 13px;" class="col-xs-1 col-sm-1 col-md-1"></div>
                            <div class="col-xs-4 col-sm-4 col-md-4" style="margin-top: 3px;" >
                                <input type="file" id="foto" name="foto1"/>
                            </div>
                        </div>
                </div> 
                </div>
               <div class="btn-group barraOtroEjercicio" role="group" aria-label="Basic example" style="clear: both">
                    <span id="OtroEjercicio" onclick="SumaEjercicio(this.id);" class="icon-plus icon-pluscss"></span>
                    <span id="EjercicioMenos" onclick="restaEjercicio(this.id);" style="margin-left: 3%;" class="icon-minus icon-pluscss"></span>
                    <!--EL INPUT SIGUIENTE LO HE CAMBIADO POR EL SPAN DE ARRIBA(POSIBLES ERRORES)
                    <input type="button" id="OtroEjercicio" onclick="SumaEjercicio(this.id);" />
                    -->
                    <input type="reset" value="Borrar" class="btn btn-danger" style="float: right;border-radius: 4px;"/>
                    <input type="submit" id="enviaRepes" name="enviaRepes" value="Enviar" style="float:right;border-radius: 4px;" class="btn btn-success" />
              </div>
         </div>   
              
        </form>                 
      </div>
    </div>
  </div>
</div>
</div>
                <!--MODAL PARA CREAR EVENTOS COMO UNA AGENDA-->
<!-- Modal -->
<div class="modal fade" id="modalAgenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">          
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>          
        <h2 class="modal-title text-center" id="exampleModalLabel">Agenda</h2>
      </div>
      <div class="modal-body">
          <form id="formularioAgenda" name="formularioAgenda" method="POST" action="ActualizaEvento.php?modo=agenda">
              <h5 id="fecha" class="text-center" style="font-size: 18px">hola</h5>
              <input class="form-control" name="nombreAgenda" id="nombreAgenda" type="text" required="" placeholder="Nombre del evento"/>
              <input class="form-control" name="descripcionAgenda" id="descripcionAgenda" type="text" required="" placeholder="Descripcion del evento"/>              
              <input class="form-control" name="fechaAgenda" id="fechaAgenda" type="hidden" readonly="" />
              <!--para el clockPicker-->
              <div class="input-group clockpicker" data-autoclose="true"  >
                  <input type="text" name="horaAgenda" id="horaAgenda" class="form-control" placeholder="Hora" required=""/>
              </div>
                            
              <button style="float: right;" type="reset" class="btn btn-danger">Borrar</button>
              <button style="float: right; "type="submit" class="btn btn-success">Enviar</button>
              <button style="float: right;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <br>
          </form>
      </div>
    </div>
  </div>
</div>

        <footer class="footer2" >
            <div class="footer-home small text-center">Copyright © HitBee, All Rights Reserved</div>
        </footer>



            <?php
        
        if((isset($_SESSION['nombreUsuario'])) && 
               ($_SESSION['nombreUsuario'] != '')){
        $nombre = str_replace('_', ' ', $_SESSION['nombreUsuario']); 
        $nombreFinal = $miMetodos->actualizaInterfaz();
        }
        
        ?>
<script>
    mainS();
        //PARA HEADER
       
        $( document ).ready(function() {
            $('#formularioLogin').css({'display' : 'none'});
             contador =1;
             contadorSerie =1;
             contadorTiempo=1;
             contadorSer = 1;
             cargaInfoS = true;
             cargaInfoT = true;
             contadorS = <?php echo count($resultado); ?>;
             contadorT = <?php echo count($resultadot); ?>;
            sS();
            sT();
        });        
        function modoBorrar(id, tipo){
            console.log('icono'+id);
            if($('#icono'+id).hasClass('icon-lock')){
                
                   $('#icono'+id).removeClass('icon-lock').addClass('icon-trash');
                   $('#'+id).removeClass('btn-secondary').addClass('btn-danger');
            }else{
                if(tipo == 0){//REPETICIONES
                    if($('#icono'+id).hasClass('icon-trash')){
                        $('#cuerpoSerieBorrar').text('¿Desea borrar la serie de ' +$('#boton'+id).text() +'?' );
                                //cambio el id del boton de si para pasar de una forma guarra el nombre de la tabla
                                var texto = $('#boton'+id).text();
                                texto = texto.replace(/ /g,'_');
                                //esta clase no esta declarada, se la pongo al boton para seguir teniendolo identificado, porque el id cambia y no se puede hacer referencia al id si cambia pero a la clase que no cambia, si
                                $('.webon').attr('id',texto);
                                $('#modalBorrar').modal();
                    }
                }else{//TIEMPO
                    if($('#icono'+id).hasClass('icon-trash')){
                        $('#cuerpoSerieBorrar').text('¿Desea borrar la serie de ' +$('#botonT'+id.substring(1)).text() +'?' );
                                //cambio el id del boton de si para pasar de una forma guarra el nombre de la tabla
                                var texto = $('#botonT'+id.substring(1)).text();
                                texto = texto.replace(/ /g,'_');
                                //esta clase no esta declarada, se la pongo al boton para seguir teniendolo identificado, porque el id cambia y no se puede hacer referencia al id si cambia pero a la clase que no cambia, si
                                $('.webon').attr('id',texto);
                                $('#modalBorrar').modal();
                    }
                }
            }

        }
    function borraSerie(id){
            location.href = 'borraSerie.php?nombreTabla='+id;
        }
        
        //una funcion que cargue los datos que se ejecute automaticamente y otra que solo los muestre
        function sS (id){
            //esto es para hacer la carga de datos, las demas veces que se llame a este metodo sera para mostrar los datos unicamente
            if(cargaInfoS === true){
                cargaInfoS = false;
                for(var s = 0; s <contadorS; s++){
                    $('#muestraS'+s).css({'display' : 'none'});
                    var texto = $('#boton' +s).text();
                    texto = texto.replace(/ /g,'_');   
                    
                    $('#muestraS'+s).load('AjaxHistoriaPersonalizado.php?tipo=seriespersonalizado&nombreTabla=' + texto); 
                   
                }
            }else{//como ya se ha hecho el load, ahora solo se ocultaran y mostraran los divs segun convenga
                //esto es para que sipinchas en un boton que ya este mostrando contenido, se ouclte (es intuitivo)
                if($('#'+id).is(":visible")){
                    
                    $('#'+id).css({'display' : 'none'});
                
                }else{
                    for(var a = 0; a <contadorS; a++){
                        $('#muestraS'+a).css({'display' : 'none'});
                    }
                    $('#'+id).css({'display' : 'inline'});
                }
            }

            
        }
        
        function sT (id){
            
            if(cargaInfoT === true){
                cargaInfoT = false;
                for(var b = 0; b <contadorT; b++){
                    $('#muestraT'+ b).css({'display' : 'none'});
                    var texto = $('#botonT' + b).text();
                    texto = texto.replace(/ /g,'_');
                    console.log(texto);
                    $('#muestraT'+ b).load('AjaxHistoriaPersonalizado.php?tipo=tiempopersonalizado&nombreTabla=' + texto); 
                   
                }
                
            }else{
                
                if($('#'+id).is(":visible")){
                    
                    $('#'+id).css({'display' : 'none'});
                    
                }else{
                    
                    for(var o = 0; o <contadorT; o++){
                        $('#muestraT'+o).css({'display' : 'none'});
                    }
                        $('#'+id).css({'display' : 'inline'});
                }

            }
                       
        }
        
        function muestraLogin(id){
            if(id === 'login'){
            $('#formularioRegsitroModal').hide();
            $('#formularioLogin').css({'display' : 'inline'});
            }else{
            $('#formularioRegsitroModal').css({'display' : 'inline'});
            $('#formularioLogin').hide();
            }
            
        }
        
        function mainS () {
                $('.iconoMenu').click(function(){
                        if (contadorSer == 1) {
                                $('.navResponsive').animate({
                                        left: '0'
                                });
                                contadorSer = 0;
                        } else {
                                contadorSer = 1;
                                $('.navResponsive').animate({
                                        left: '-100%'
                                });
                        }
                });

                // Mostramos y ocultamos submenus
                $('.submenu').click(function(){
                        $(this).children('.children').slideToggle();
                });
                
                
                
                
                
                 //CSS SI EXISTE EL ID CUANDO ESTA LOGEADO
             if (document.getElementById("iconoLogin")) {
                $('#marginLogin').css({'margin-left' : '0px'});
                $('#loginPop').css({'margin-left' : '0px'});
                
             
                
             }
        
        
        
    }
    
    
    
    
    
//CALENDARIO 
$("#calendar").fullCalendar({
    dayClick:function(date,jsEvent,view){
//        $(this).css('background-color', 'red');
//        alert('pulsaste sobre ' + date.format());
        $('#fecha').html(date.format());
        $('#fechaAgenda').val(date.format());
        $('#modalAgenda').modal();
    },
    events:'./eventos.php',
    eventClick:function(calEvent,jsEvent,view){     
        $('#titutloEvento').html(calEvent.title);
        $('#descripcionEvento').html(calEvent.descripcion);
        $('#modalEvento1').modal();
        
    }
});
//CLOCKPICKER 
$('.clockpicker').clockpicker();
//FIN CALENDARIO
//    contador = 1;
    $('#formularioSeries').hide();
    $('#formularioTiempo').hide();
    function seleccionaFormulario(id){
        $('#tiempo').fadeIn();
        $('#repes').fadeIn();
        $('#atrasFormularioPers').hide();
        console.log(id);
        switch(id){
            case 'repes': 
                $('#atrasFormularioPers').fadeIn();
                $('#formularioSeries').fadeIn();
                $('#tiempo').hide();
                $('#repes').hide();
                break;
            case 'tiempo': 
                $('#atrasFormularioPers').fadeIn();
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
                contadorSerie++
                                $('#cuerpoSerie').html($('#cuerpoSerie').html() + '</div><div class="row" style="margin-top: 20px" id="ejercicio'+contador+'">\n\
                                                        <div class="col-xs-1 col-sm-1 col-md-1" style="float: left;font-size: 24px">'+contadorSerie+'.-</div>\n\
                                                        <div class="col-xs-4 col-sm-4 col-md-4" style="">\n\
                                                            <input type="text"class="contenidoNombre form-control"  required="" id="nombre'+contador+'" name="nombre'+contador+'" placeholder=""/>\n\
                                                        </div>\n\
                                                        <div class="col-xs-1 col-sm-1 col-md-1"></div>\n\
                                                        <div class="col-xs-2 col-sm-2 col-md-2" style="">\n\
                                                            <input type="number" min="00" class="contenidoRepes form-control" required="" id="repeticiones'+contador+'" name="repeticiones'+contador+'" placeholder=""/>\n\
                                                        </div>\n\
                                                        <div class="col-xs-4 col-sm-4 col-md-4"></div>\n\
                                                        <div class="row" style="clear: both">\n\
                                                            <div style="margin-right: 13px;" class="col-xs-1 col-sm-1 col-md-1"></div>\n\
                                                            <div class="col-xs-4 col-sm-4 col-md-4" style="margin-top: 3px;" >\n\
                                                                <input type="file" id="foto'+contador+'" name="foto'+contador+'"/>\n\
                                                            </div>\n\
                                                        </div>\n\
                                                    </div>' );
        $('#formularioSeries').attr('action', 'seriePersonalizada.php?contador='+contador);break;
    
 
    
    
    
    
   
            case 'OtroEjerciciot' : 
        contadorTiempo++
                                $('#cuerpoTiempo').html($('#cuerpoTiempo').html() + '<div class="row" style="margin-top: 20px" id="ejerciciot'+contador+'">\n\
                                    <div class="col-xs-1 col-sm-1 col-md-1" style="clear: both;font-size: 24px">'+contadorTiempo+'.-</div>\n\
                                    <div class="col-xs-4 col-sm-4 col-md-4 text-center" style="" >\n\
                                        <input type="text" class="contenidoNombre form-control" required="" name="nombret'+contador+'" id="nombret'+contador+'" placeholder=""/>\n\
                                    </div>\n\
                                    <div class="col-xs-2 col-sm-2 col-md-2 text-center" style="margin-left: 23px;" >\n\
                                        <input type="number" min="00" class="contenidoMinutos form-control" required="" name="minutost'+contador+'" id="minutost'+contador+'" placeholder=""/>\n\
                                    </div>\n\
                                    <div class="col-xs-1 col-sm-1 col-md-1"></div>\n\
                                    <div class="col-xs-2 col-sm-2 col-md-2 text-center" style="" >\n\
                                        <input type="number" min="00" max="59" class="contenidoSegundos form-control" required="" name="segundost'+contador+'" id="segundost'+contador+'" placeholder=""/>\n\
                                    </div>\n\
                                <div class="row" style="clear: both">\n\
                                    <div style="margin-right: 13px;" class="col-xs-1 col-sm-1 col-md-1"></div>\n\
                                    <div class="col-xs-4 col-sm-4 col-md-4" style="margin-top: 3px;">\n\
                                        <input type="file" id="fotot'+contador+'" name="fotot'+contador+'"/>\n\
                                    </div>\n\
                                </div>\n\
                            </div>' );
        $('#formularioTiempo').attr('action', 'seriePersonalizada.php?tiempo=tiempo&contador='+contador);break;
        





}   
    }
    function restaEjercicio(id){//por si quieren poner un ejercicio menos en el formulario personalizado
       
        if(contador >1){
            
            switch(id){                
                case 'EjercicioMenos':
                        $('#ejercicio'+contador).remove();
                         contador--;
                         contadorSerie--;
                        $('#formularioSeries').attr('action', 'seriePersonalizada.php?contador='+contador);break;
                case 'EjercicioMenost':
                        $('#ejerciciot'+contador).remove();
                        contador--; 
                        contadorTiempo--;
                        $('#formularioTiempo').attr('action', 'seriePersonalizada.php?tiempo=tiempo&contador='+contador);break;
               
                    default : alert('Problema al restar el ejercicio');break;
           }
           
        }
        
    
    }
    function atrasFormPers(){
    
        $('#atrasFormularioPers').hide();
        $('#formularioSeries').hide();
        $('#formularioTiempo').hide();
        $('#repes').fadeIn();
        $('#tiempo').fadeIn();
    }
</script>



<!--MODAAAAAAAAAL CALENDARIO-->
<!-- Modal -->
<div class="modal fade" id="modalEvento1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="modal-title text-center" id="titutloEvento">Agregar titulo</h2>
      </div>
      <div class="modal-body">
          <h4><div id="descripcionEvento" class="text-center"></div></h4>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
  </div> 
</div>

<!--MODAAAAAAAAL PARA BORRAR SERIE-->
<!-- Modal -->
<div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title text-center" id="exampleModalLabel">Borrado de serie</h3>
      </div>
        <h5><div id="cuerpoSerieBorrar" class="modal-body text-center">
        ¿Deseas borrar esta serie?
            </div></h5>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="no" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary webon" id="si" onclick="borraSerie(this.id)">Si</button>
      </div>
    </div>
  </div>
</div>
    </body>
</html>

