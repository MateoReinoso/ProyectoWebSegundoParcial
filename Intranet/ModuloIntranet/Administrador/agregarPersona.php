<!DOCTYPE html>
<html lang="en">

<head>

  <?php include('includes/header.php'); ?>

  <title>Adinistrador</title>

 
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
            <h5 class="h3 mb-4 text-gray-800"><a href="./gestPersonal.php">Gestión Profesores
              </a>-Personas</h5>
          </div>

          <!-- Page Heading -->

          <div class="row justify-content-center ">
            <form class="user">
              <div>
                <h1 class="text-center">Persona</h1>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user form-control form-control-user-user" id="idPer" placeholder="Código de persona">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user form-control form-control-user-user" id="cedulaPer"
                    placeholder="Cédula o Pasaporte">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user form-control form-control-user-user" id="nombrePer" placeholder="Nombres">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user form-control form-control-user-user" id="ApellidoPers" placeholder="Apellidos">
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="date" class="form-control form-control-user form-control form-control-user-user" id="fechaNacPer"
                    placeholder="Fecha de nacimiento">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user form-control form-control-user-user" id="telefonoPers" placeholder="Teléfono">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user form-control form-control-user-user" id="direccionPers" placeholder="Dirección">
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user form-control form-control-user-user" id="emailPers"
                  placeholder="Correo no institucional">
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <a href="login.php" class="btn btn-primary btn-user btn-block">
                    Registrar Persona
                  </a>
                </div>
                <div class="col-sm-6">
                  <a href="login.php" class="btn btn-secondary btn-user btn-block ">
                    Cancelar
                  </a>

                </div>
              </div>
              <hr>

            </form>



          </div>

        </div>




        
     <?php include('includes/footer.php'); ?>