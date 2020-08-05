<!DOCTYPE html>
<html lang="en">

<head>

     <?php include('includes/header.php'); ?>

    <title>Modificar Representante</title>

   

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
                        <h5 class="h3 mb-4 text-gray-800"><a href="./gestRepresentante.php">Gestión Representantes
                            </a>-Modificar Representante</h5>
                    </div>
                    <!-- Page Heading -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group ">
                            <input type="text" class="form-control form-control-user bg-light border-0 small" placeholder="Buscar cédula"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Page Heading -->

                    <div class="container">
                        <div class="row justify-content-center">
                            <form class="user">

                                <div>
                                    <h1 class="text-center">Representante</h1>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user form-control form-control-user-user" id="idPer"
                                            placeholder="Código de Representante">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user form-control form-control-user-user" id="cedulaPer"
                                            placeholder="Cédula o Pasaporte">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user form-control form-control-user-user" id="nombrePer"
                                        placeholder="Nombres-Representante">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user form-control form-control-user-user" id="ApellidoPers"
                                        placeholder="Apellidos-Representante">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user form-control form-control-user-user" id="fechaNacPer"
                                            placeholder="Fecha de nacimiento Representante">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user form-control form-control-user-user" id="fechaNacPer"
                                            placeholder="Telefono Representante">
                                    </div>

                                </div>



                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user form-control form-control-user-user" id="direccionPers"
                                        placeholder="Dirección">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user form-control form-control-user-user" id="emailPers"
                                        placeholder="Correo no institucional Representante">
                                </div>


                                <hr>

                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <a href="./gestRepresentante.php" class="btn btn-primary btn-user btn-block">
                                            Modificar Representante
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <a href="./gestRepresentante.php"
                                            class="btn btn-secondary btn-user btn-block ">
                                            Cancelar
                                        </a>

                                    </div>
                                </div>



                            </form>

                        </div>

                    </div>



                </div>






                

        <!-- Bootstrap core JavaScript-->
         <?php include('includes/footer.php'); ?>