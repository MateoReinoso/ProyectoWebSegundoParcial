<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/header.php'); ?>
  <title>Adinistrador-Infraestructura</title>
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
            <h1 class="h3 mb-0 text-gray-800">Infraestructura</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
          <div class="row  justify-content-center ">

            <form class="user ">
              <div class="form-group row ">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="number" class="form-control form-control-user form-control form-control-user-user" id="exampleFirstName" placeholder="Ruc">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user form-control form-control-user-user" id="exampleLastName" placeholder="Nombre comercial">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user form-control form-control-user-user" id="exampleInputEmail" placeholder="Razón Social">
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="Text" class="form-control form-control-user form-control form-control-user-user" id="exampleInputPassword" placeholder="Dirección">
                </div>
                <div class="col-sm-6">
                  <input type="number" class="form-control form-control-user form-control form-control-user-user" id="exampleRepeatPassword" placeholder="Teléfono">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user form-control form-control-user-user" id="exampleInputPassword" placeholder="Nombre Contacto">
                </div>
              </div>
              <a href="login.php" class="btn btn-primary btn-user btn-block">
                Registrar Establecimiento
              </a>
              <hr>
            </form>
          </div>


          <!-- Bootstrap core JavaScript-->
          <?php include('includes/footer.php'); ?>