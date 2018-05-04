<?php

class Conexion{

    static public function conectar(){

        $db_host = "Localhost"; 
        $usuario ="root";
        $pass = "";
        $db_nombre = "wampshop";

        $conexion = mysqli_connect($db_host,$usuario,$pass,$db_nombre);

        if($conexion->connect_errno){

            echo $conexion->connect_errno . "error en la conexion";

         
        }else{
            echo "Excelente conexion";
        }
        $conexion->set_charset('utf8');
        return $conexion;

    }
}
Conexion::conectar();

?>