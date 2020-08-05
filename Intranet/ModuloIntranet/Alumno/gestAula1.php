<?php
include '../services/alumnoService.php';

session_start();
if (!isset($_SESSION['EST'])) {
  header('Location: ../Login/login.php');
}

$alumnoService = new AlumnoService();
isset($_GET['codigoAsignatura']);
$result=$alumnoService->findSubjetByCode(($_GET['codigoAsignatura']));

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Asignatura</title>
    <?php
    include '../views/partials/head.php';
  ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" style="color: white">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <?php
          $row = $result->fetch_assoc();
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

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="color: white">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Asignatura</div>
            </a>
            <?php
              include './php/includes/menuClases.php';
            ?>
        </ul>
        <!-- Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
          include '../views/partials/header.php';
        ?><?php
        if ($result->num_rows > 0) {
          //$row1 = $result->fetch_assoc();
        ?>
                <div class="containe ">
                    <h5 class="h1 mb-4 text-primary-800 text-primary text-center" style="margin-top: 20%">
                        <?php echo $row["NOMBRE"]; ?></h5>
                </div>
                <?php
                }
            else { ?>
                <div class="containe ">
                    <h5 class="h1 mb-4 text-primary-800 text-primary text-center" style="margin-top: 20%">NO HAY
                        ASIGNATURA</h5>
                </div>
                <?php } ?>

                <!-- End of Topbar -->
                <?php
          include '../views/partials/footer.php';
        ?>
            </div>
        </div>
</body>

</html>