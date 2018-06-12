<?php
  require_once "../app/controllers/UsuariosController.php";
  $users = new UsuariosController();
?>
<h1>Pagina de Ingresar</h1>
<form class="" method="post">

  <label for="uname"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="name" required>

  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" required>

  <input type="submit" name="submit_login" value="Submit">
  <?php
    $users_consulta = $users->ingreso();
  ?>
</form>
