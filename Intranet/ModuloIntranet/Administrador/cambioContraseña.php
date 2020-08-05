<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('includes/header.php'); ?>
    <title>Docente</title>
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
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->
                    <!-- Page Heading -->
                   <div class="container">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="p-4">
                                    <br>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Cambio de contraseña</h1>
                                        <p>Una vez cambiada la contraseña debes iniciar sesión con tu nueva contraseña</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user form-control form-control-user-user"
                                                id="exampleInputEmail" placeholder="Contraseña actual">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user form-control form-control-user-user"
                                                id="exampleInputPassword" placeholder="Contraseña nueva">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user form-control form-control-user-user"
                                                id="exampleInputPassword" placeholder="Confirmar contraseña nueva">
                                        </div>
                                        <div class="form-group">
                                            <!-- <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recuerdame</label>
                                            </div> -->
                                        </div>
                                        <div class="form-group row" style="justify-content: center;">
                                            <div class="col-sm-6  mb-sm-0">
                                                <a style="text-decoration:none;" href="../LogIn/login.php"><input class="btn btn-primary btn-user btn-block" type="button"
                                                    value="Cambiar"></a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a style="text-decoration:none;" href="./index.php"><input class="btn btn-secondary btn-user btn-block" type="button"
                                                    value="Cancelar"></a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
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
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
     <?php include('includes/footer.php'); ?>