<?php
         define("host", "localhost");
         define("usuario", "root");
         define("contrasena", "");
         define("bbdd", "proyectofinal");
        
?>

<?php
        $creaConexion = new mysqli(host, usuario, contrasena, bbdd);
        $codificacion = $creaConexion ->query("SET NAMES 'utf8'");
        if($creaConexion->errno >0){
            die("No ha sido posible conectarse a la base de datos [". $creaConexion->connect_error. "]");
        }
?>

<?php
$pdo = new PDO('mysql:dbname=proyectofinal;host=127.0.0.1','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>