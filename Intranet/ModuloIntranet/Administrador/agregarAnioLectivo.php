<?php include("db.php"); ?>
<?php
$FECHA_INICIO= '';
$FECHA_FIN = '';
$accion = "Agregar";
$COD_PERIODO_LECTIVO = "";

if (isset($_GET['COD_PERIODO_LECTIVO'])) {
  $result_sede = $conn->query("SELECT * FROM PERIODO_LECTIVO WHERE COD_PERIODO_LECTIVO=" . $_GET['COD_PERIODO_LECTIVO']);
  if (mysqli_num_rows($result_sede) == 1) {
    $row = mysqli_fetch_array($result_sede);
    $FECHA_INICIO= $row['FECHA_INICIO'];
    $FECHA_FIN = $row['FECHA_FIN'];;
    $COD_PERIODO_LECTIVO = $row['COD_PERIODO_LECTIVO'];
    $accion = "Modificar";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include('includes/header.php'); ?>

  <title>Registro Sede</title>

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
            <h5 class="h3 mb-4 text-gray-800"><a href="./gestAnioLectivo.php">Gestión Periodo
              </a>-Registrar Periodo Lectivo</h5>
          </div>

          <!-- Page Heading -->
          <main class="container p-4">
            <div class="row ">

              <div class="col-md-12 justify-content-center">
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th>COD_PE</th>
                      <th>FECHA_INICIO</th>
                      <th>FECHA_FIN</th>
                      <th>ESTADO</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $result_sede = $conn->query("SELECT * FROM PERIODO_LECTIVO");

                    while ($row = mysqli_fetch_assoc($result_sede)) { ?>
                      <tr>
                        <td><?php echo $row['COD_PERIODO_LECTIVO']; ?></td>
                        <td><?php echo $row['FECHA_INICIO']; ?></td>
                        <td><?php echo $row['FECHA_FIN']; ?></td>
                        <td><?php echo $row['ESTADO']; ?></td>
                        <td>
                          <a href="agregarAnioLectivo.php?COD_PERIODO_LECTIVO=<?php echo $row['COD_PERIODO_LECTIVO'] ?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                          </a>
                          <a href="modificarAnioLectivo.php?COD_PERIODO_LECTIVO=<?php echo $row['COD_PERIODO_LECTIVO'] ?>" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>

              <!-- ADD BOOKS FORM-->
              <div class="col-md-4"></div>
              <div class="col-md-4  ">
                <form class="user" action="modificarAnioLectivo.php" method="POST">
                  <div class="row justify-content-center">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="inicioA" class="text-center">Inicio Año lectivo</label><br>
                        <input type="date" name="FECHA_INICIO" class="form-control form-control-user" placeholder="FECHA_INICIO" value="<?php echo $FECHA_INICIO?>" autofocus>
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="finA"> Fin Año lectivo</label><br>
                        <input type="date" name="FECHA_FIN" class="form-control form-control-user" placeholder="FECHA_FIN" value="<?php echo $FECHA_FIN ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="COD_PERIODO_LECTIVO" class="form-control form-control-user" value="<?php echo $COD_PERIODO_LECTIVO; ?>">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="accion" class="form-control form-control-user" value="<?php echo $accion; ?>">
                  </div>
                  <input type="submit" name="save_AnioLectivo" class="btn btn-success btn-block" value="<?php echo $accion; ?>">
                </form>

              </div>
            </div>
          </main>



        </div>





        <?php include('includes/footer.php'); ?>