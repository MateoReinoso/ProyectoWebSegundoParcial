<?php
session_start();
if (!isset($_SESSION['DOC'])) {
  header('Location: ../Login/login.php');
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
                    <h1 class="h3 mb-0 text-gray-800">Actualizar reunión</h1>
                    <div class="btn-group">
                        <div class="form-group"><br>
                            <input type="text" class="form-control form-control-user bg-light border-0 small"
                                placeholder="Cedula estudiante">
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="form-group"><br>
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->

                        <div style="display: flex;align-items: center;justify-content: center;">
                            <div class="abs-center">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <form action="#" class="user">
                                        <div class="border p-5 form">
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="exampleInputEmail1">Código reunión</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" disabled id="representante"
                                                        placeholder=" 1">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="exampleInputEmail1">Representante</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" disabled id="representante"
                                                        placeholder="Lorena Andrade">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="exampleInputEmail1">Estudiante</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" disabled id="estudianter"
                                                        placeholder="Carlos Espinoza">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="sel1">Fecha</label><br>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" id="fecha" name="fecha"
                                                        value="" min="2020-01-01" max="2022-12-31" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="sel1">Hora</label><br>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="time" class="form-control" id="hora" name="hora"
                                                        value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="sel1">Asignatura</label><br>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="asignatura">
                                                        <option>Matemáticas</option>
                                                        <option>Inglés</option>
                                                        <option>Música</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="exampleInputEmail1">Motivo</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="justify-content: center;">

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input class="btn btn-primary btn-user btn-block" type="submit"
                                                        value="Modificar">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="btn btn-secondary btn-user btn-block" type="submit"
                                                        value="Cancelar">
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Your Website 2019</span>
                                </div>
                            </div>
                        </footer>
                    </div>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="../js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="../vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="../js/demo/chart-area-demo.js"></script>
            <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>