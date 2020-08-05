<?php include("db.php"); ?>
<?php
$NOMBRE = '';
$DIRECCION = '';
$TELEFONO = '';
$FECHA_NACIMIENTO = '';
$accion = "Modificar";
$COD_PERSONA = "";
$CEDULA = "";
$APELLIDO = "";
$CORREO = "";
$CORREO_PERSONAL = "";

if (isset($_GET['COD_PERSONA'])) {
  $result_sede = $conn->query("SELECT * FROM PERSONA WHERE COD_PERSONA=" . $_GET['COD_PERSONA']);
  if (mysqli_num_rows($result_sede) == 1) {
    $row = mysqli_fetch_array($result_sede);
    $COD_PERSONA = $row['COD_PERSONA'];
    $CEDULA = $row['CEDULA'];
    $APELLIDO = $row['APELLIDO'];
    $NOMBRE = $row['NOMBRE'];
    $DIRECCION = $row['DIRECCION'];
    $TELEFONO = $row['TELEFONO'];
    $FECHA_NACIMIENTO = $row['FECHA_NACIMIENTO'];
    $GENERO = $row['GENERO'];
    $CORREO_PERSONAL = $row['CORREO_PERSONAL'];
    $accion = "Modificar";
  }
}
if (isset($_GET['buscar'])) {
  $resp = '"%' . $_GET['CEDULA'] . '%"';
  $result_sede = $conn->query("SELECT * FROM PERSONA WHERE CEDULA LIKE" . $resp);
  if (mysqli_num_rows($result_sede) == 1) {
    $row = mysqli_fetch_array($result_sede);
    $COD_PERSONA = $row['COD_PERSONA'];
    $CEDULA = $row['CEDULA'];
    $APELLIDO = $row['APELLIDO'];
    $NOMBRE = $row['NOMBRE'];
    $DIRECCION = $row['DIRECCION'];
    $TELEFONO = $row['TELEFONO'];
    $FECHA_NACIMIENTO = $row['FECHA_NACIMIENTO'];
    $GENERO = $row['GENERO'];
    $CORREO_PERSONAL = $row['CORREO_PERSONAL'];
    $accion = "Modificar";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include('includes/header.php'); ?>

  <title>Registro Personal</title>

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
            <h5 class="h3 mb-4 text-gray-800"><a href="./gestPersonal.php">Gestión Personal
              </a>-Registrar Personal</h5>
          </div>

          <!-- Page Heading -->
          <main class="container p-4">
            <form action="modificarDatosAlumno.php" method="GET">
              <p>
                Búsqueda Cédula: <input type="search" name="CEDULA" placeholder="CEDULA">
                <input type="submit" name="buscar" value="Buscar">
              </p>
            </form>

            <div class="col-md_8 table-responsive " ">
                  <table class=" table table-hover" id="dtVerticalScrollExample">
              <thead>
                <tr>
                  <th scope="col">CP</th>
                  <th scope="col">CI</th>
                  <th scope="col">APELLIDO</th>
                  <th scope="col">NOMBRE</th>
                  <th scope="col">DIRECCION</th>
                  <th scope="col">TEL</th>
                  <th scope="col">FECHA_NAC</th>
                  <th scope="col">ESTADO</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $result_sede = $conn->query("SELECT * FROM (SELECT PERSONA.COD_PERSONA, PERSONA.CEDULA, PERSONA.NOMBRE, PERSONA.APELLIDO,PERSONA.DIRECCION,PERSONA.CORREO_PERSONAL, PERSONA.TELEFONO, PERSONA.FECHA_NACIMIENTO, TIPO_PERSONA_PERSONA.ESTADO FROM PERSONA INNER JOIN TIPO_PERSONA_PERSONA ON PERSONA.COD_PERSONA= TIPO_PERSONA_PERSONA.COD_PERSONA WHERE TIPO_PERSONA_PERSONA.COD_TIPO_PERSONA=4 OR TIPO_PERSONA_PERSONA.COD_TIPO_PERSONA=5 ORDER BY PERSONA.COD_PERSONA DESC LIMIT 0, 10) t ORDER BY COD_PERSONA ASC");
                //table-wrapper-scroll-y my-custom-scrollbar-> agregar scroll a tabla
                while ($row = mysqli_fetch_assoc($result_sede)) { ?>
                  <tr>
                    <td><?php echo $row['COD_PERSONA']; ?></td>
                    <td><?php echo $row['CEDULA']; ?></td>
                    <td><?php echo $row['APELLIDO']; ?></td>
                    <td><?php echo $row['NOMBRE']; ?></td>
                    <td><?php echo $row['DIRECCION']; ?></td>
                    <td><?php echo $row['TELEFONO']; ?></td>
                    <td><?php echo $row['FECHA_NACIMIENTO']; ?></td>
                    <td><?php echo $row['ESTADO']; ?></td>
                    <td>
                      <a href="modificarDatosAlumno.php?COD_PERSONA=<?php echo $row['COD_PERSONA'] ?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                      </a>
                      <a href="delete_Personal.php?COD_ALUMNO=<?php echo $row['COD_PERSONA'] ?>" class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
              </table>

            </div>
        </div>
        <div class="row">
          <!-- ADD BOOKS FORM-->
          <div class="col-md-4"></div>
          <div class="col-md-4  ">
            <div class="card card-body">
              <form action="actualizarPersonal.php" method="POST">
                <div class="form-group">
                  <input type="text" name="CEDULA" class="form-control form-control-user" placeholder="CEDULA" minlength="10" maxlength="10" value="<?php echo $CEDULA ?>">
                </div>
                <div class="form-group">
                  <input type="text" name="APELLIDO" class="form-control form-control-user" placeholder="APELLIDO" value="<?php echo $APELLIDO ?>" autofocus>
                </div>
                <div class="form-group">
                  <input type="text" name="NOMBRE" class="form-control form-control-user" placeholder="NOMBRE" value="<?php echo $NOMBRE?>" >
                </div>
                <div class="form-group">
                  <input type="text" name="DIRECCION" class="form-control form-control-user" placeholder="DIRECCION" value="<?php echo $DIRECCION ?>">
                </div>
                <div class="form-group">
                  <input type="text" name="TELEFONO" class="form-control form-control-user" placeholder="TELEFONO" min="1" max="15" value="<?php echo $TELEFONO ?>">
                </div>
                <div class="form-group">
                  <input type="date" name="FECHA_NACIMIENTO" class="form-control form-control-user" placeholder="FECHA_NACIMIENTO" value="<?php echo $FECHA_NACIMIENTO ?>">
                </div>
                <div class="form-group">
                  <input type="email" name="CORREO_PERSONAL" class="form-control form-control-user" placeholder="CORREO_PERSONAL" value="<?php echo $CORREO_PERSONAL ?>">
                </div>
                <div class="form-group">
                  <input type="hidden" name="COD_PERSONA" class="form-control form-control-user" value="<?php echo $COD_PERSONA; ?>">
                </div>

                <div class="form-group">
                  <input type="hidden" name="accion" class="form-control form-control-user" value="<?php echo $accion; ?>">
                </div>
                <input type="submit" name="save_Alumno" class="btn btn-success btn-block" value="<?php echo $accion; ?>">
              </form>
            </div>
          </div>
        </div>
        </main>
      </div>
      <script>
        $(document).ready(function() {
          $('#dtVerticalScrollExample').DataTable({
            "scrollY": "200px",
            "scrollCollapse": true,
          });
          $('.dataTables_length').addClass('bs-select');
        });
      </script>


      <?php include('includes/footer.php'); ?>