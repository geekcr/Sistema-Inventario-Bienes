<?php
class ConexionModel{

  public function conexion(){

    $host     = "192.168.2.111";
    $database = "Inventariobienes";
    $user     = "root";
    $password = "";

    $mysqli = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno($mysqli)) {
      return "Fallo al conectar a MySQL: " . mysqli_connect_error();
    }else{
      return $mysqli;
    }
  }

}

$object = new ConexionModel();
echo $object->conexion();
