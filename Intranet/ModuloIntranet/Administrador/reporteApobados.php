<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('includes/header.php'); ?>
    <title>Reporte Aspirantes</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
      <?php include('includes/navbar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('includes/notification.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="h3 mb-4 text-gray-800"><a href="./gestAspirantes.php">Gestión Aspirantes
                            </a>-Preporte Aspirantes</h5>
                    </div>

                    <!-- Page Heading -->

                    <div class="row justify-content-center ">
                        <form class="user">
                            <div>
                                <h1 class="text-center" id="idSede" placeholder="Selecionar Sede">Reporte</h1>
                            </div>
                            <div class="form-group">
                                <!-- Search form -->
                                <input class="form-control form-control-user" type="text" placeholder="Buscar por id o cédula"
                                    aria-label="Search">
                            </div>

                            <div class="form-group row">
                                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                    <table class="table table-bordered table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">idAspirante</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Cédula</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>AS1222</td>
                                                <td>Carla Sérez</td>
                                                <td>1128647363</td>
                                                <td>Aprobado</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>AS1532</td>
                                                <td>Juan Suarez</td>
                                                <td>1728642363</td>
                                                <td>Aprobado</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>AS1332</td>
                                                <td>Luis Pérez</td>
                                                <td>1728647362</td>
                                                <td>Aprobado</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>AS1222</td>
                                                <td>Juan Pérez</td>
                                                <td>0228647363</td>
                                                <td>Aprobado</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>AS1222</td>
                                                <td>Maria Cérez</td>
                                                <td>1728337363</td>
                                                <td>Aprobado</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>AS1222</td>
                                                <td>Daniel Carrera</td>
                                                <td>1728647363</td>
                                                <td>Aprobado</td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>


                            </div>



                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <a href="./gestAspirantes.php" class="btn btn-success btn-user btn-block">
                                        Descargar
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="./gestAspirantes.php" class="btn btn-secondary btn-user btn-block ">
                                        Regresar
                                    </a>

                                </div>
                            </div>






                            <hr>

                        </form>



                    </div>

                </div>




                

        <!-- Bootstrap core JavaScript-->
         <?php include('includes/footer.php'); ?>