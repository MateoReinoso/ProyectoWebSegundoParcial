<?php
session_start();
if (!isset($_SESSION['DOC'])) {
  header('Location: ../Login/login.php');
}
include '../services/docenteService.php';
$docenteService=new DocenteService();

    if(isset($_GET["codigo"])){
        $codAsig=trim($_GET["codigo"],"'");//trim para que no coja los ''' ejemplo'9' que vienen con el codigo
        $asignaturaPeriodo=$docenteService->findByPKAsigPer($codAsig);
    }
    if(isset($_POST["agregar"])){
        $codAsig=$_POST["codAsignaturaPer"];
        $asignaturaPeriodo=$docenteService->findByPKAsigPer($codAsig);
        if($asignaturaPeriodo!=null){
            $codAsignatura=$asignaturaPeriodo["COD_ASIGNATURA"];
            $codNivel=$asignaturaPeriodo["COD_NIVEL_EDUCATIVO"];
            $codPeriodo=$asignaturaPeriodo["COD_PERIODO_LECTIVO"];
            $codDocente=$asignaturaPeriodo["COD_DOCENTE"];
            $codParalelo=$asignaturaPeriodo["COD_PARALELO"];
          }
        //$fecha=getdate();
        $fecha= new DateTime();
        $fechacadena = $fecha->format("Y/m/d");
        $docenteService->insertComunicado($codAsignatura,$codNivel, $codPeriodo, $codDocente, $codParalelo,$_POST["asunto"],$_POST["detalle"], $fechacadena);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Comunicados</title>
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
                <a class="nav-link collapsed" href="./asignarTarea.php?codigo='<?php echo $codAsig?>'"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>Tareas</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="./agregarComunicado.php?codigo='<?php echo $codAsig?>'"
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
                    <h1 class="h3 mb-0 text-gray-800">Agregar comunicado</h1><br>
                    <div style="display: flex;align-items: center;justify-content: center;">
                        <div class="abs-center">
                            <form action="agregarComunicado.php" method="POST" class="user">
                                <div class="border p-5 form ">
                                    <div class="form-group row">
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Asunto</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="asunto" name="asunto" rows="2" required
                                                cols=50></textarea>
                                        </div>
                                        <input type="hidden" class="form-control " id="codAsignaturaPer"
                                            name="codAsignaturaPer" value="<?php echo $codAsig?>">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Detalle</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="detalle" name="detalle" rows="6" required
                                                cols=50></textarea>
                                        </div>
                                    </div><br>
                                    <div class="form-group row" style="justify-content: center;">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input class="btn btn-primary btn-user btn-block" name="agregar"
                                                type="submit" value="Registrar">
                                        </div>
                                        <div class="col-sm-4">
                                            <a style="text-decoration:none;" href="./gestionAula1.html"><input
                                                    class="btn btn-secondary btn-user btn-block" type="button"
                                                    value="Cancelar"></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <?php
                include '../views/partials/footer.php';
                ?>
                </div>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>

</body>

</html>