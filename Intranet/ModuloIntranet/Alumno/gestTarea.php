<?php
include '../services/alumnoService.php';

session_start();
if (!isset($_SESSION['EST'])) {
  header('Location: ../Login/login.php');
}
$alumnoService = new AlumnoService();
isset($_GET['codigoAsignatura']);
$result=$alumnoService->findHomework(($_GET['codigoAsignatura']));
$result2=$alumnoService->findSubjetByCode(($_GET['codigoAsignatura']));
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tareas</title>
  <?php
    include '../views/partials/head.php';
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" style="color: white">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <?php
          $row = $result2->fetch_assoc();
      ?>
      <div class="sidebar-brand-text mx-3"><?php echo $row['NOMBRE']?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="./index.php">
        <i class="fas fa-fw fa-university"></i>
        <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="./gestTarea.php?codigoAsignatura=<?php echo $_GET['codigoAsignatura']?>"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-edit"></i>
        <span>Tareas</span>
      </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
      <a class="nav-link collapsed" href="./Comunicado.php?codigoAsignatura=<?php echo $_GET['codigoAsignatura']?>" 
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-bullhorn"></i>
        <span>Comunicados</span>
      </a>
    </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
          include '../views/partials/header.php';
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-0 text-primary">Tareas</h1> <br>
          <!-- Content Row -->
          <div class="row ">
            <!-- Earnings (Monthly) Card Example -->
            <?php
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    $i=1;
            ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
              <a class="btn btn-fix ">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div class="col-auto">
                      <i class="fas fa-edit fa-3x text-gray-300"></i><br>
                      </div>
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">---TAREA---</div><br>
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $row['TEMA_TAREA']; ?> </div><br>
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $row['DETALLE_TAREA']; ?> </div><br>
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Fecha de entrega: <?php echo $row['FECHA_ENTREGA']; ?> </div><br>
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Hora de entrega: <?php echo $row['HORA_ENTREGA']; ?> </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">::::::::::::</div>
                          <div class="row no-gutters align-items-center"></div>
                          <div class="col">
                          </div>
                      </div>
                      </div>                               
                  </div>
                  
              </div>
              </div>
              </a>
            <!-- Earnings (Monthly) Card Example -->
            <?php
                  }
              } 
              else { ?>
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
              <a class="btn btn-fix ">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div class="col-auto">
                      <i class="fas fa-child fa-3x text-gray-300"></i><br>
                      </div>
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">---YUJU !!---</div><br>
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">NO HAY TAREAS</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">::::::::::::</div>
                          <div class="row no-gutters align-items-center"></div>
                          <div class="col">
                          </div>
                      </div>
                      </div>                               
                  </div>
                  
              </div>
              </div>
              </a>
            <?php } ?>
            </a>
          </div>
          </a>
        </div>
      </div>
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
      <?php
        include '../views/partials/footer.php';
      ?>
    </div>
  </div>
  </div>
  </div>
</body>
</html>