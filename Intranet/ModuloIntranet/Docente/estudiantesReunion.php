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
                    <div class="container-fluid">

                    </div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-0 text-gray-800">Registrar reunión</h1> <br>

                    <!-- Page Heading -->
                    <div class="container-fluid">
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <div class="abs-center">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <form action="./registroReunion.php" class=" form">
                                        <div class="container text-content-center">
                                            <div class="btn-group">
                                                <div class="form-group">
                                                    <label for="sel1">Periodo</label>
                                                    <select class="form-control" id="sel1">
                                                        <option>2019-2020</option>
                                                        <option>2021-2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <div class="form-group">
                                                    <label for="sel1">Asignatura</label>
                                                    <select class="form-control" id="sel1">
                                                        <option>Matemáticas</option>
                                                        <option>Inglés</option>
                                                        <option>Música</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <div class="form-group">
                                                    <label for="sel1">&nbsp;</label><br>
                                                    <button class="btn btn-primary" type="submit">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="">
                                    <div class="justify-content-center">
                                        <div>
                                            <table class="table table-bordered" style=" vertical-align: middle;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">CI</th>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Apellido</th>
                                                        <th scope="col" style="width: 2%;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td><input class="btn btn-success" type="submit" value="+"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td><input class="btn btn-success" type="submit" value="+"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry the Bird</td>
                                                        <td>Larry the Bird</td>
                                                        <td><input class="btn btn-success" type="submit" value="+"></td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- Footer -->
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