<?php
session_start();
if (!isset($_SESSION['DOC'])) {
  header('Location: ../Login/login.php');
}
include '../services/docenteService.php';
$docenteService=new DocenteService();
$periodo=$docenteService->findbyPkPeriodosAct();
$asignaturas=$docenteService->findAllAsigPerDocente($periodo["COD_PERIODO_LECTIVO"],$_SESSION['DOC']['COD_PERSONA']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Docente</title>
    <?php
        include '../views/partials/head.php';
    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php
        include './php/includes/menu.php';
        ?>
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
                    <h1 class="h3 mb-0 text-gray-800">Aulas</h1> <br>

                    <!-- Content Row -->
                    <div class="row ">
                        <?php
                        if($asignaturas->num_rows>0){
                            while($row = $asignaturas->fetch_assoc()) {
                    ?>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <a href="gestAula1.php?codigo='<?php echo $row["COD_ASIG_PERIODO"]?>'"
                                    class="btn btn-fix ">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="col-auto">
                                                    <i class="fas fa-book fa-3x text-gray-300"></i>
                                                </div><br>
                                                <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                    <?php echo $row["NOMBRE"]?></div>
                                                <div
                                                    class="text-xs font-weight-bold text-secundary text-uppercase mb-1">
                                                    <?php echo $row["NOMBRE_NIVEL"].'-'. $row["NIVEL"]?></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Content Row -->
                        <?php }}?>
                    </div>
                    <?php
                include '../views/partials/footer.php';
                ?>
                </div>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
</body>