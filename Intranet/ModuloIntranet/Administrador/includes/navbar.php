<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Administrador</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Inicio</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fa fa-users" aria-hidden="true"></i>
    <span>Gestión Usuarios</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Usuarios:</h6>
      <a class="collapse-item" href="./gestPersonal.php">Personal</a>
      <a class="collapse-item" href="./gestAlumno.php">Alumnos</a>
      <!--<a class="collapse-item" href="./gestRepresentante.php">Representantes</a>-->
      <a class="collapse-item" href="./gestAspirantes.php">Aspirantes</a>

    </div>
  </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitie"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fa fa-university" aria-hidden="true"></i>
    <span>Gestión Infraestructura</span>
  </a>
  <div id="collapseUtilitie" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Infraestructura</h6>
      <a class="collapse-item" href="./gestSede.php">Sede</a>
      <a class="collapse-item" href="./gestEdificio.php">Edificios</a>
      <a class="collapse-item" href="./gestAula.php">Aulas</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilit" aria-expanded="true"
    aria-controls="collapseUtilities">
    <i class="fa fa-calendar"aria-hidden="true"></i>
    <span>Organización Académica</span>
  </a>
  <div id="collapseUtilit" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Organización Académica</h6>
      <a class="collapse-item" href="./gestAnioLectivo.php">Gestión de años lectivos</a>
    </div>
  </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtili" aria-expanded="true"
    aria-controls="collapseUtilities">
    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
    <span>Periodos</span>
  </a>
  <div id="collapseUtili" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="./gestPeriodo.php">Gestión de Periodos</a>
    </div>
  </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link collapsed" href="./cambioContraseña.php"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
    <span>Cambio de contraseña</span>
  </a>
</li>
</ul>