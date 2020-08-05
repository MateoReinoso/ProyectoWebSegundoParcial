<?php
include '../services/alumnoService.php';

session_start();
if (!isset($_SESSION['EST'])) {
  header('Location: ../Login/login.php');
}

$alumnoService = new AlumnoService();
$result2 = $alumnoService->findSubjet($_SESSION['EST']['COD_PERSONA']);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Horario</title>
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
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Alumno</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Inicio</span></a>
        </li>

        <!-- Divider -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fa fa-book" aria-hidden="true"></i>
                <span>Asignaturas</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Asignaturas:</h6>
                    <?php
                        if ($result2->num_rows > 0) {
                            while ($row = $result2->fetch_assoc()) {
                        ?>
                            <a class="collapse-item" href="./gestAula1.php?codigoAsignatura=<?php echo $row['COD_ASIGNATURA']?>"><i class="fas fa-fw fa-book"></i>
                            <span><?php echo $row["NOMBRE"]; ?></span></a>
                        <?php
                                }
                            } 
                            else { ?>
                                <a class="collapse-item" href="#"><i class="fas fa-fw fa-book"></i>
                                <span>NINGUNA</span></a>
                        <?php } ?>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider">

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="./Calificaciones.php" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-check-circle"></i>
                <span>Calificaciones</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="./Asistencia.php" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-child"></i>
                <span>Asistencia</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="./detalleHorario.php" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Horario</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="./cambioContraseña.php" aria-expanded="true"
                aria-controls="collapseUtilities">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                <span>Cambio de contraseña</span>
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

                <div class="container-fluid">

                    <div class="container-fluid">

                    </div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-0 text-primary">Detalle Horario</h1> <br>
                    <!-- Begin Page Content -->
                    <div></div>
                    <div class="row ">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <a href="./gestAula1.html" class="btn btn-fix ">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="col-auto">
                                                    <i class="fas fa-book fa-3x text-gray-300"></i>
                                                </div><br>
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Matemática</div>
                                                <div class="text-gray-800 text-xs  ">Aula: A002</div>
                                                <div class="text-gray-800 text-xs  ">LUN|VIE</div>
                                                <div class="text-gray-800 text-xs  ">10:00-12:00</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <?php
                    include '../views/partials/footer.php';
                ?>
            </div>
        </div>
    </div>
</body>
</html>