<?php

require_once "../app/models/UsuariosModel.php";

class UsuariosController{

  public function consulta(){
    $respuesta = UsuariosModel::consulta();
    return $respuesta;
  }

  public function ingreso(){
    if (isset($_POST["submit_login"])) {
      $datos = array(
        'username'  => $_POST["email"],
        'password'  => $_POST["password"],
      );
      $respuesta = UsuariosModel::login($datos);
      echo $respuesta;
    }else{
      echo "hola funcion ingreso";
    }
  }
}
