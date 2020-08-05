<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/header.php'); ?>
  <title>Index</title>
</head>

<body id="page-top">
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
            <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
          </div>
          <div class="container-fluid">

            <!-- Content Row -->
            <div class="row justify-content-center">

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <a href="./perfilAdministrador.php" class="btn btn-fix ">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Perfil</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">::::</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <a href="" class="btn btn-fix ">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Correo Institucional</div>
                          <div class="row no-gutters align-items-center"></div>
                          <div class="col">

                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-mail-bulk fa-2x text-gray-300"></i>
                      </div>
                    </div>
                </div>
              </div>
              <?php include("db.php"); ?>

              <?php

              $result_sede = $conn->query("SELECT a.NOMBRE a.COD_ASIGANTURA FROM ASIGNATURA a, ALUMNO_ASIGNATURA_PERIODO c
                      WHERE a.COD_ASIGNATURA = c.COD_ASIGNATURA 
                      AND c.COD_ALUMNO = 19");

              while ($row = mysqli_fetch_assoc($result_sede)) { ?>

                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <a href="delete_Sede.php?COD_ASIGNATURA=<?php echo $row['COD_ASIGANTURA'] ?>" class="btn btn-fix ">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><?php echo $row['NOMBRE']; ?> </div>
                            <div class="row no-gutters align-items-center"></div>
                            <div class="col">

                            </div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-mail-bulk fa-2x text-gray-300"></i>
                        </div>
                      </div>
                  </div>
                </div>


              <?php } ?>
              </a>
            </div>
          </div>

          <?php include('includes/footer.php'); ?>