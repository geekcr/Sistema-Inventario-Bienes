<?php
  require_once "../app/controllers/UsuariosController.php";
  $users = new UsuariosController();
?>
<div class="row text-center" >
  <h3 class="col-sm-12">Bienvenidos al Sistema de Inventario de Bienes</h3>
</div>

<div class="text-center">
  <form method="post" class="form-horizontal" role="form">
    <div class="form-group row">
      <div class="col-md-offset-4 col-sm-1">
          <label for="email" class="control-label">Usuario</label>
      </div>
      <div class="col-sm-3">
        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-offset-4 col-sm-1">
          <label for="password" class="control-label">Password</label>
      </div>
      <div class="col-sm-3">
        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="">
        <input class="btn btn-primary" type="submit" name="submit_login" value="Ingresar">
      </div>
    </div>
  </form>
  <?php $users->ingreso(); ?>
</div>

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
