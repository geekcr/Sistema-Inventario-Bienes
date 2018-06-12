<div class="row text-center" >
  <h3 class="col-sm-12">Bienvenidos al Sistema de Inventario de Bienes</h3>
</div>

<?php
  require_once "../app/controllers/UsuariosController.php";
  $users = new UsuariosController();
?>
<div class="row text-center">
  <h1>Pagina de Ingresar</h1>
</div>
<form class="form-control" method="post">
<div class="row text-center">
  <label for="uname"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="name" class="form-control" required>
</div>

<div class="row text-center">
  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" required>
</div>

<div class="row text-center">
  <input type="submit" name="submit_login" value="Submit" class="btn btn-primary">
</div>
<?php
  $users_consulta = $users->ingreso();
?>
</form>


<div class="row">
  <div class="boxs">
    <div class="col-md-4">
      <a href="index.php?action=consultar_bienes">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
          <div class="align-center">
             <h4>Consultar Bienes</h4>
            <div class="icon">
              <i class="fa fa-search fa-3x"></i>
            </div>
            <p>
             Consulta los Bienes de la Institución
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="index.php?action=registrar_bienes">
      <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
        <div class="align-center">
          <h4>Registrar Bienes</h4>
          <div class="icon">
            <i class="fa fa-save fa-3x"></i>
          </div>
          <p>
           Registrar los Bienes de la Institución
          </p>
          <div class="ficon">
            <a href="" alt=""></a>
          </div>
        </div>
      </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="consultar_bienes_asignados.php">
      <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
        <div class="align-center">
          <h4>Bienes Asignados</h4>
          <div class="icon">
            <i class="fa fa-location-arrow fa-3x"></i>
          </div>
          <p>
           Consultar los Bienes Asignados a los Usuarios
          </p>
          <div class="ficon">
            <a href="" alt=""></a>
          </div>
        </div>
      </div>
      <a href="asignacion.php">
    </div>
  </div>
</div>
