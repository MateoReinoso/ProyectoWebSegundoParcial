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
        $docenteService->insertTarea($codAsignatura,$codNivel, $codPeriodo, $codDocente, $codParalelo,$_POST["tema"],$_POST["fecha"], $_POST["detalle"], $_POST["hora"]);
    }
    
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
                        <a class="collapse-item" href="./asignarTarea.php?codigo='<?php echo $codAsig?>'">Ingreso
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
                        <a class="collapse-item" href="./agregarComunicado.php?codigo='<?php echo $codAsig?>'">Ingreso
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-0 text-gray-800">Registro tareas</h1><br>
                    <div style="display: flex;align-items: center;justify-content: center;">
                        <div class="abs-center">
                            <form action="asignarTarea.php" method="POST" class="user">
                                <div class="border p-5 form ">
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Tema: </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control " id="tema" name="tema"
                                                placeholder="Tarea" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="hidden" class="form-control " id="codAsignaturaPer"
                                                name="codAsignaturaPer" value="<?php echo $codAsig?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="sel1">Fecha Entrega</label><br>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="fecha" name="fecha" value=""
                                                min="2020-01-01" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="sel1">Hora</label><br>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="time" class="form-control" id="hora" name="hora" value=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Descripción: </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" id="detalle" name="detalle" rows="5"
                                                cols=50></textarea>
                                        </div>
                                    </div>
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

                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2019</span>
                            </div>
                        </div>
                    </footer>
                    ¿
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
</body>

</html>