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

                </div>
                <!-- Page Heading -->
                <h1 class="h3 mb-0 text-gray-800">Búsqueda reunión</h1>
                <div class="btn-group">
                    <div class="form-group"><br>
                        <input type="text" class="form-control form-control-user bg-light border-0 small"
                            placeholder="Codigo reunión">
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
                                <form action="./visualizarReunion.php" class="user">
                                    <table class="table table-bordered" style="width: 90%;">
                                        <thead style="vertical-align: middle;">
                                            <tr>
                                                <th scope="col" style="vertical-align: middle;">Código</th>
                                                <th scope="col" style="vertical-align: middle;">Rpresentante</th>
                                                <th scope="col" style="vertical-align: middle;">Fecha</th>
                                                <th scope="col" style="vertical-align: middle;">Asignatura</th>
                                                <th scope="col" style="vertical-align: middle;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">R001</th>
                                                <td>Maria Valdez</td>
                                                <td>2020-07-24</td>
                                                <td>Matemáticas</td>
                                                <td><input class="btn btn-success" type="submit" value="+"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">R002</th>
                                                <td>Maria Valdez</td>
                                                <td>2020-07-24</td>
                                                <td>Matemáticas</td>
                                                <td><input class="btn btn-success" type="submit" value="+"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">R003</th>
                                                <td>Maria Valdez</td>
                                                <td>2020-07-24</td>
                                                <td>Matemáticas</td>
                                                <td><input class="btn btn-success" type="submit" value="+"></td>
                                            </tr>
                                        </tbody>
                                    </table>
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