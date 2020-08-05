<?php include("db.php"); ?>
<?php
$COD_ASIGNATURA = '';
$COD_NIVEL_EDUCATIVO = '';
$COD_DOCENTE = '';
$COD_PARALELO = '';
$COD_AULA = '';
$COD_ASIG_PERIODO = '';
$FECHAI = '';
$FECHAF = '';
$accion = "Agregar";
$query = "SELECT * FROM PERIODO_LECTIVO WHERE ESTADO='ACT'";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
$COD_PERIODO_LECTIVO = $row['COD_PERIODO_LECTIVO'];
$FECHAI = $row['FECHA_INICIO'];
$FECHAF = $row['FECHA_FIN'];

if (isset($_GET['COD_ASIG_PERIODO'])) {
    echo $COD_ASIG_PERIODO = $_GET['COD_ASIG_PERIODO'];
    $accion = "Modificar";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include('includes/header.php'); ?>

  <title>Registro Materias-Docentes</title>

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
            <h5 class="h3 mb-4 text-gray-800"><a href="./gestAnioLectivo.php">Gestión Materias
              </a>-Registrar Materias profesores</h5>
          </div>

          <!-- Page Heading -->
          <main class="container p-4">
            <div class="row ">

              <div class="col-md-12 justify-content-center text-center my-custom-scrollbar">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>COD_ASIG</th>
                      <th>ASIGNATURA</th>
                      <th>AULA</th>
                      <th>PARALELO</th>
                      <th>NOMBRE</th>
                      <th>APELLIDO</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $result_sede = $conn->query("SELECT ASIGNATURA_PERIODO.COD_ASIG_PERIODO ,ASIGNATURA.NOMBRE AS ASIGNATURA, AULA.NOMBRE AS AULA,  PARALELO.NOMBRE AS PARALELO, PERSONA.NOMBRE AS NOM_PROF, PERSONA.APELLIDO AS APE_PROF FROM ASIGNATURA_PERIODO INNER JOIN ASIGNATURA ON ASIGNATURA_PERIODO.COD_ASIGNATURA=ASIGNATURA.COD_ASIGNATURA INNER JOIN PERIODO_LECTIVO ON ASIGNATURA_PERIODO.COD_PERIODO_LECTIVO=PERIODO_LECTIVO.COD_PERIODO_LECTIVO INNER JOIN PARALELO ON PARALELO.COD_PARALELO=ASIGNATURA_PERIODO.COD_PARALELO INNER JOIN  AULA ON ASIGNATURA_PERIODO.COD_AULA=AULA.COD_AULA INNER JOIN PERSONA ON PERSONA.COD_PERSONA=ASIGNATURA_PERIODO.COD_DOCENTE");

                    while ($row = mysqli_fetch_assoc($result_sede)) { ?>
                      <tr>
                        <td><?php echo $row['COD_ASIG_PERIODO']; ?></td>
                        <td><?php echo $row['ASIGNATURA']; ?></td>
                        <td><?php echo $row['AULA']; ?></td>
                        <td><?php echo $row['PARALELO']; ?></td>
                        <td><?php echo $row['NOM_PROF']; ?></td>
                        <td><?php echo $row['APE_PROF']; ?></td>
                        <td>
                          <a href="asigDocenteMateria.php?COD_ASIG_PERIODO=<?php echo $row['COD_ASIG_PERIODO'] ?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                          </a>
                          <a href="delete_AsigDocenteMateria.php?COD_ASIG_PERIODO=<?php echo $row['COD_ASIG_PERIODO'] ?>" class="btn btn-danger">
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
              <div class="col-md-4 py-3 ">
                <form class="user" action="modificarDocenteMateria.php" method="POST">

                  <div class="form-group">
                    <?php
                    $query = 'SELECT * FROM ASIGNATURA';
                    $result = $conn->query($query);
                    ?>
                    <select name="COD_ASIGNATURA" class="form-control" id="selector" >
                      <?php
                      while ($row = $result->fetch_array()) {
                      ?>
                        <option value=" <?php echo $row['COD_ASIGNATURA'] ?> ">
                          <?php echo $row['NOMBRE'] . '-' . $row['CREDITOS']; ?>
                        </option>
                      <?php
                      }
                      ?>
                    </select>
                    <?php
                    ?>
                  </div>

                  <div class="form-group">
                    <?php
                    $query = 'SELECT PERSONA.COD_PERSONA, PERSONA.CEDULA, PERSONA.NOMBRE, PERSONA.APELLIDO,PERSONA.DIRECCION,PERSONA.CORREO_PERSONAL, PERSONA.TELEFONO, PERSONA.FECHA_NACIMIENTO, TIPO_PERSONA_PERSONA.ESTADO FROM PERSONA INNER JOIN TIPO_PERSONA_PERSONA ON PERSONA.COD_PERSONA= TIPO_PERSONA_PERSONA.COD_PERSONA WHERE TIPO_PERSONA_PERSONA.COD_TIPO_PERSONA=3';
                    $result = $conn->query($query);
                    ?>
                    <select name="COD_PERSONA" class="form-control" id="selector">
                      <?php
                      while ($row = $result->fetch_array()) {
                      ?>
                        <option value=" <?php echo $row['COD_PERSONA'] ?> ">
                          <?php echo $row['NOMBRE'] . '-' . $row['APELLIDO']; ?>
                        </option>
                      <?php
                      }
                      ?>
                    </select>
                    <?php
                    ?>
                  </div>
                  <div class="form-group">
                    <?php
                    $query = 'SELECT * FROM AULA';
                    $result = $conn->query($query);
                    ?>
                    <select name="COD_AULA" class="form-control" id="selector">
                      <?php
                      while ($row = $result->fetch_array()) {
                      ?>
                        <option value=" <?php echo $row['COD_AULA'] ?> ">
                          <?php echo $row['NOMBRE'] ?>
                        </option>
                      <?php
                      }
                      ?>
                    </select>
                    <?php
                    ?>
                  </div>
                  <div class="form-group">
                    <?php
                    $query = 'SELECT PARALELO.COD_PARALELO, PARALELO.NOMBRE, NIVEL_EDUCATIVO.NOMBRE_NIVEL FROM PARALELO INNER JOIN NIVEL_EDUCATIVO ON PARALELO.COD_NIVEL_EDUCATIVO=NIVEL_EDUCATIVO.COD_NIVEL_EDUCATIVO ';
                    $result = $conn->query($query);
                    ?>
                    <select name="COD_PARALELO" class="form-control" id="selector">
                      <?php
                      while ($row = $result->fetch_array()) {
                      ?>
                        <option value=" <?php echo $row['COD_PARALELO'] ?> ">
                          <?php $NIVEL = $row['COD_PARALELO'] ?>
                          <?php echo $row['NOMBRE'] . '-' . $row['NOMBRE_NIVEL'] ?>
                        </option>
                      <?php
                      }
                      ?>
                    </select>
                    <?php
                    ?>
                  </div>

                  <div class="form-group text-center">
                    <input type="hidden" name="COD_PERIODO_LECTIVO" class="form-control form-control-user" placeholder="PERIODO" value="<?php echo $COD_PERIODO_LECTIVO; ?> ">
                  </div>

                  <div class="form-group">
                    <input type="hidden" name="COD_ASIG_PERIODO" class="form-control form-control-user" value="<?php echo $COD_ASIG_PERIODO ?>">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="accion" class="form-control form-control-user" value="<?php echo $accion; ?>">
                  </div>
                  <input type="submit" name="save_materia_profesor" class="btn btn-success btn-block" value="<?php echo $accion; ?>">
                </form>

              </div>
            </div>
          </main>



        </div>





        <?php include('includes/footer.php'); ?>