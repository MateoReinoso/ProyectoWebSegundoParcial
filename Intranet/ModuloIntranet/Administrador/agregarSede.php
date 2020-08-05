<?php include("db.php"); ?>
<?php
$NOMBRE = '';
$DIRECCION = '';
$TELEFONO = '';
$CODIGO_POSTAL = '';
$accion = "Agregar";
$COD_SEDE = "";

if (isset($_GET['COD_SEDE'])) {
  $result_sede = $conn->query("SELECT * FROM SEDE WHERE COD_SEDE=" . $_GET['COD_SEDE']);
  if (mysqli_num_rows($result_sede) == 1) {
    $row = mysqli_fetch_array($result_sede);
    $NOMBRE = $row['NOMBRE'];
    $DIRECCION = $row['DIRECCION'];
    $TELEFONO = $row['TELEFONO'];
    $CODIGO_POSTAL = $row['CODIGO_POSTAL'];
    $COD_SEDE = $row['COD_SEDE'];
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
            <h5 class="h3 mb-4 text-gray-800"><a href="./gestSede.php">Gestión Sedes
              </a>-Registrar Sede</h5>
          </div>

          <!-- Page Heading -->
          <main class="container p-4">
            <div class="row ">
              
                <div class="col-md-12 justify-content-center">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>COD_SEDE</th>
                        <th>NOMBRE</th>
                        <th>DIRECCION</th>
                        <th>TELEFONO</th>
                        <th>CODIGO_POSTAL</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $result_sede = $conn->query("SELECT * FROM SEDE");

                      while ($row = mysqli_fetch_assoc($result_sede)) { ?>
                        <tr>
                          <td><?php echo $row['COD_SEDE']; ?></td>
                          <td><?php echo $row['NOMBRE']; ?></td>
                          <td><?php echo $row['DIRECCION']; ?></td>
                          <td><?php echo $row['TELEFONO']; ?></td>
                          <td><?php echo $row['CODIGO_POSTAL']; ?></td>
                          <td>
                            <a href="agregarSede.php?COD_SEDE=<?php echo $row['COD_SEDE'] ?>" class="btn btn-secondary">
                              <i class="fas fa-marker"></i>
                            </a>
                            <a href="delete_Sede.php?COD_SEDE=<?php echo $row['COD_SEDE'] ?>" class="btn btn-danger">
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
                  <form class="user" action="actualizarAlumno.php" method="POST">
                    <div class="form-group">
                      <input type="text" name="NOMBRE" class="form-control form-control-user" placeholder="NOMBRE" value="<?php echo $NOMBRE ?>" autofocus>
                    </div>
                    <div class="form-group">
                      <input type="text" name="DIRECCION" class="form-control form-control-user" placeholder="DIRECCION" value="<?php echo $DIRECCION ?>">
                    </div>
                    <div class="form-group">
                      <input type="text" name="TELEFONO" class="form-control form-control-user" placeholder="TELEFONO" min="1" max="15" value="<?php echo $TELEFONO ?>">
                    </div>
                    <div class="form-group">
                      <input type="text" name="CODIGO_POSTAL" class="form-control form-control-user" placeholder="CODIGO_POSTAL" value="<?php echo $CODIGO_POSTAL ?>">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="COD_SEDE" class="form-control form-control-user" value="<?php echo $COD_SEDE; ?>">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="accion" class="form-control form-control-user" value="<?php echo $accion; ?>">
                    </div>
                    <input type="submit" name="save_sede" class="btn btn-success btn-block" value="<?php echo $accion; ?>">
                  </form>
              
              </div>
            </div>
          </main>



        </div>





        <?php include('includes/footer.php'); ?>