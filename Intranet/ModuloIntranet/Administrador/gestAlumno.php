<!DOCTYPE html>
<html lang="en">

<head>

  <?php include('includes/header.php'); ?>

  <title>Gestión Alumnos</title>

 
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
            <h1 class="h3 mb-0 text-gray-800">Gestión Alumnos</h1>
          </div>
              <!-- Content Row -->
              <div class="row justify-content-center ">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <a href="./agregarAlumno.php" class="btn btn-fix ">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gestión Alumno</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">::::</div>
                          </div>
                          <div class="col-auto">
                            <i class="fa fa-user-plus fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <a href="./modificarDatosAlumno.php" class="btn btn-fix ">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Actualizar Información de
                              Alumnos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">:::::</div>
                          </div>
                          <div class="col-auto">
                            <i class="fa fa-address-card fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
    
                <!-- Earnings (Monthly) Card Example -->
               
                </a>
              </div>
            </div>
          

      <!-- Bootstrap core JavaScript-->
      <?php include('includes/footer.php'); ?>