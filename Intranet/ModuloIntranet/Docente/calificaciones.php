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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />



    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="icon" href="../img/logo.ico" />
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
                    <div class="container-fluid"></div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-0 text-gray-800">Ingreso calificaciones</h1>
                    <br />
                    <!-- Begin Page Content -->
                    <div></div>
                    <div style="
                display: flex;
                align-items: center;
                justify-content: center;
              ">
                        <div class="abs-center">
                            <form action="#" class="user">
                                <div class="border p-3 form">
                                    <div>
                                        <h1 class="text-center">Registro Calificación</h1>
                                    </div>
                                    <br />
                                    <div class="form-group row">
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">CI</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" disabled id="idPer"
                                                placeholder="1799657787" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Nombre</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" disabled class="form-control" id="cedulaPer"
                                                placeholder="Juan Perez" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Asignatura</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" disabled class="form-control" id="cedulaPer"
                                                placeholder="Matemáticas" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Quimestre</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" disabled class="form-control" id="cedulaPer"
                                                placeholder="Primero" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Periodo</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" disabled class="form-control" id="cedulaPer"
                                                placeholder="2020-2021" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Parcial</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" disabled class="form-control" id="cedulaPer"
                                                placeholder="Segundo" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Deberes</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" min="0" max="20" class="form-control" id="deber" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Talleres</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" min="0" max="20" class="form-control" id="deber" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Prueba N°1</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" min="0" max="20" class="form-control" id="deber" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Prueba N°2</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" min="0" max="20" class="form-control" id="deber" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Examen</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" min="0" max="20" class="form-control" id="deber" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Examen Recuperación</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" min="0" max="20" class="form-control" id="deber" />
                                        </div>
                                    </div>
                                    <div class="form-group row" style="justify-content: center;">
                                        <div class="col-sm-4 mb-sm-0">
                                            <input class="btn btn-primary btn-user btn-block" type="submit"
                                                value="Registrar" />
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="btn btn-secondary btn-user btn-block" type="submit"
                                                value="Cancelar" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Footer -->
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

    <!-- Bootstrap core JavaScript-->

</body>

</html>