<?php
include './metodos.php';
$niveles = new metodos();

print_r('<div id="niveles1">'. ejecutaConsulta($creaConexion, 1).'</div>'
       . '<div id="niveles2">'.ejecutaConsulta($creaConexion, 2).'</div>'
       . '<div id="niveles3">'.ejecutaConsulta($creaConexion, 3).'</div>'
        );

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