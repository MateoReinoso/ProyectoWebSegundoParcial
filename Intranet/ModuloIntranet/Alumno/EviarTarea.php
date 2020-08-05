<?php
session_start();
if (!isset($_SESSION['EST'])) {
  header('Location: ../Login/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Enviar Tarea</title>
  <?php
    include '../views/partials/head.php';
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      include './php/includes/menuClases.php';
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

          <!-- Page Heading -->
          <div class="containe ">
            <h5 class="h1 mb-4 text-primary-800 text-primary text-center">Descripción de la tarea</h5>
            <textarea name="descripcion" rows="7" cols="55" readonly class="form-control ">Realizar y enviar la tarea teniendo en consideración los siguientes detalles: .......</textarea>
          </div>

          <!-- Page Heading -->

          <div class="row justify-content-center ">
            <form class="user" action="" method="post" enctype="multipart/form-data">
              <div>
                <h1 class="text-center">Enviar Tarea</h1>
              </div>
              <div class="form-group row">
                <textarea name="mensaje" rows="5" cols="55" class="form-control " placeholder="Mensaje...">
                 </textarea>
                <div class="col-sm-6">
                  <input type="file" name="archivo" class="btn-user btn-block ">
                  <!-- <a href="./gestTarea.html" class="btn btn-secondary btn-user btn-block ">
                      Adjuntar
                     </a> -->
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <a href="./gestTarea.php" class="btn btn-primary btn-user btn-block">
                    Enviar
                  </a>
                </div>
                <div class="col-sm-6">
                  <a href="./gestTarea.php" class="btn btn-secondary btn-user btn-block ">
                    Cancelar
                  </a>
                </div>
              </div>
              <hr>
            </form>
          </div>
        </div>
        <!-- Footer -->
        <?php
          include '../views/partials/footer.php';
        ?>
      </div>
    </div>
</body>

</html>