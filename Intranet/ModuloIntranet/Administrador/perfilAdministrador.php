<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/header.php'); ?>
    <title>Perfil Administrador</title>
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
                        <h5 class="h3 mb-4 text-gray-800"><a href="./index.php">Inicio
                            </a>-Perfil</h5>
                    </div>

                    <!-- Page Heading -->

                    <div class="row justify-content-center ">
                        <form class="user">
                            <div>
                                <h1 class="text-center" id="idSede" placeholder="Selecionar Sede">Perfil Administrador</h1>
                            </div>



                            <table class="table table-borderless">

                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <h5 class="h3 mb-4 text-gray-800">Unidad Educativa Margaret Hamilton</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Id</th>
                                        <td colspan="2">P1423</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">cédula</th>
                                        <td colspan="2">1726869999</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nombres </th>
                                        <td colspan="2">Lucía Fernada</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Apellido</th>
                                        <td colspan="2">González Navas</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Fecha de Naciemiento </th>
                                        <td colspan="2">12/09/1994</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Teléfono </th>
                                        <td colspan="2">0993454738</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Correo </th>
                                        <td colspan="2">LuciaGN12@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group row ">

                                <div class="col-sm-6 ">
                                    <a href="./gestSede.php" class="btn btn-success btn-user btn-block ">
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