<?php
require_once(__DIR__ ."/../controller/conexion.php");
class createRol extends conexion{
    public function createrole($nombre){
        $conect=$this->connect();
        $checkRole= "SELECT * FROM Role WHERE nombre='{$nombre}'";
        $checkrolresult=mysqli_query($conect,$checkRole);
        if($checkrolresult->num_rows> 0){
            $rolinsert= "INSERT INTO Role(nombre) VALUES'{$nombre}'";
            if (!$conect->query($rolinsert)){
                echo"Error a la hora de insertar rol".$conect->error;
            }
        }
        $conect->close();

    }
}
$controlRol = new createRol();
$controlRol->createrole('user');
?>