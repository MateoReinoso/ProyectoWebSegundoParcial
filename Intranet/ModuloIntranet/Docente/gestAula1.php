<?php
session_start();
if (!isset($_SESSION['DOC'])) {
  header('Location: ../Login/login.php');
}
include '../services/docenteService.php';
$docenteService=new DocenteService();
$codigo=trim($_GET["codigo"],"'");
    if(isset($_GET["codigo"])){
        $asignaturaPeriodo=$docenteService->findByPKAsigPer($codigo);
        if($asignaturaPeriodo!=null){
          $nombre=$asignaturaPeriodo["NOMBRE"];
        }
      }

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
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $asignaturaPeriodo["NOMBRE"]?></div>
            </a>
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-university"></i>
                    <span>Aulas</span></a>
            </li>
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>Tareas</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Calificaciones:</h6>
                        <a class="collapse-item" href="./asignarTarea.php?codigo='<?php echo $codigo?>'">Ingreso
                            tareas</a>
                        <a class="collapse-item" href="./modificarCalificacion.php">Modificación tareas</a>
                        <a class="collapse-item" href="./reporteCalificacion.php">Reporte tareas enviadas</a>

                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitie"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    <span>Comunicados</span>
                </a>
                <div id="collapseUtilitie" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Asistencia</h6>
                        <a class="collapse-item" href="./agregarComunicado.php?codigo='<?php echo $codigo?>'">Ingreso
                            comunicado</a>
                        <a class="collapse-item" href="./modificarAsistencia.php">Modificación comunicado</a>
                        <a class="collapse-item" href="./reporteAsistencia.php">Reporte comunicados</a>
                    </div>
                </div>
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
                <div class="containe ">
                    <h5 class="h1 mb-4 text-primary-800 text-primary text-center" style="margin-top:100px;">
                        <?php echo $asignaturaPeriodo["NOMBRE"]?>
                    </h5>
                    <p class="h4 mb-4 text-secundary-800 text-secundary text-center">
                        <strong>Nivel educativo: </strong>
                        <?php echo $asignaturaPeriodo["NOMBRE_NIVEL"].'-'.$asignaturaPeriodo["NIVEL"]?>
                    </p>
                    <p class="h4 mb-4 text-secundary-800 text-secundary text-center">
                        <strong>Créditos:</strong> <?php echo $asignaturaPeriodo["CREDITOS"]?>
                    </p>
                </div>
                <!-- End of Topbar -->

                <?php
                include '../views/partials/footer.php';
                ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>

</body>

</html>