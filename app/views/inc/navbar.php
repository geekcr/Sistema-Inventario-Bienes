<header>
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #f2f2f2 !important">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php"><img class="img-responsive" style="max-weight: 15%; max-width: 15%;" src="" alt="CONAPDIS"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php?action=usuarios/create">ingresar</a></li>
          <li><a href="index.php?action=bienes/incorporacion">Incorporación de Bienes</a></li>
          <li><a href="index.php?action=bienes/asignacion">Asignar Bienes</a></li>          
          <li><a href="index.php?action=salir">salir</a></li>
          <li><a href="./app/vista/inicio.php">Inicio</a></li>
          <li><a href="./app/controlador/cerrar_session.php">Cerrar sesion</a></li>
          <li><a href="./app/vista/inicio.php">Administrador</a></li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?action=reportes/consulta_cedula">Consulta Cédula</a></li>
                  <li><a href="index.php?action=reportes/consulta_num_bien">Consulta Num. Bien</a></li>
                  <li><a href="index.php?action=reportes/consulta_tipo_bien">Consulta Tipo Bien</a></li>
                  <li><a href="index.php?action=reportes/consulta_inventario">Consulta Inventario</a></li>
                </ul>
              </li>          
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</header>
