<?php
include '../services/alumnoService.php';

session_start();
if (!isset($_SESSION['EST'])) {
  header('Location: ../Login/login.php');
}
$alumnoService = new AlumnoService();
isset($_GET['codigoAsignatura']);
$result=$alumnoService->findRelease(($_GET['codigoAsignatura']));
$result2=$alumnoService->findSubjetByCode(($_GET['codigoAsignatura']));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="../css/ayc.css" rel="stylesheet">
  <title>Comunicados</title>
  <?php
    include '../views/partials/head.php';
  ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>

          </div>

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Comunicados</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="t01" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th class="text-center">Asunto</th>
                        <th class="text-center">Detalle</th>
                        <th class="text-center">Fecha</th>
                      </tr>
                    </thead>
<!--                     <tfoot>
                      <tr>
                        <th class="text-center">Asunto</th>  
                        <th class="text-center">Detalle</th>
                        <th class="text-center">Fecha</th>
                      </tr>
                    </tfoot> -->
                    <tbody>
                    <?php
                       if ($result->num_rows > 0) {
                           while ($row = $result->fetch_assoc()) {
                    ?>
                      <tr>
                        <td class="text-center"><?php echo $row["ASUNTO_COMUNICADO"]; ?></td>
                        <td class="text-center"><?php echo $row["DETALLE_COMUNICADO"]; ?></td>
                        <td class="text-center"><?php echo date('d/m/y') ?></td>
                      </tr>
                      <?php
                             }
                         } 
                         else { ?>
                             <tr>
                                 <td colspan="3" class="text-center">NO HAY COMUNICADOS</td>
                             </tr>
                      <?php } ?>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
  
          </div>
        </div> 
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
          <!-- Footer -->
          <?php
            include '../views/partials/footer.php';
          ?>
        </div>
      </div>
</body>
</html>