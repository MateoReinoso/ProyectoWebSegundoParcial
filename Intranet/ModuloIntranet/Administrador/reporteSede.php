<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('includes/header.php'); ?>
    <title>Reporte Sede</title>
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
                        <h5 class="h3 mb-4 text-gray-800"><a href="./gestSede.php">Gestión Sedes
                            </a>-Preporte Sede</h5>
                    </div>

                    <!-- Page Heading -->

                    <div class="row justify-content-center ">
                        <form class="user">
                            <div>
                                <h1 class="text-center" id="idSede" placeholder="Selecionar Sede">Sede</h1>
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-user ">
                                    <option value="" disabled selected hidden>Seleccione una Sede</option>
                                    <option value="norte">Sede Norte</option>
                                    <option value="Sur">Sede Sur</option>

                                </select>
                                <div class="p-2">
                                    <button type="button" class="btn btn-primary btn-user btn-sm ">Generar
                                        Reporte</button>

                                </div>
                            </div>


                            <table class="table table-borderless">

                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <h5 class="h3 mb-4 text-gray-800">Unidad Educativa Margaret Hamilton</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Id Sede</th>
                                        <td colspan="2">S1423</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nombre</th>
                                        <td colspan="2">Sede Norte</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dirección</th>
                                        <td colspan="2">Av Mariscal Sucre ,el Condado s004</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Teléfono</th>
                                        <td colspan="2">2637468</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">codigo Postal </th>
                                        <td colspan="2">2678</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total Edificios </th>
                                        <td colspan="2">12</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <a href="./gestSede.php" class="btn btn-success btn-user btn-block">
                                        Descargar
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="./gestSede.php" class="btn btn-secondary btn-user btn-block ">
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