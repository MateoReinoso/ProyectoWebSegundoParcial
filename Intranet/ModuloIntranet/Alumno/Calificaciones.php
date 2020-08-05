<?php
include '../services/alumnoService.php';
session_start();
if (!isset($_SESSION['EST'])) {
  header('Location: ../Login/login.php');
}
$alumnoService = new AlumnoService();
$result = $alumnoService->findGrades($_SESSION['EST']['COD_PERSONA']);
$result2 = $alumnoService->findSubjet($_SESSION['EST']['COD_PERSONA']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="../css/ayc.css" rel="stylesheet">
  <title>Calificaciones</title>
  <?php
    include '../views/partials/head.php';
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Alumno</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>Asignaturas</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Asignaturas:</h6>
                <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                    ?>
                        <a class="collapse-item" href="./gestAula1.php?codigoAsignatura=<?php echo $row['COD_ASIGNATURA']?>"><i class="fas fa-fw fa-book"></i>
                        <span><?php echo $row["NOMBRE"]; ?></span></a>
                    <?php
                            }
                        } 
                        else { ?>
                            <a class="collapse-item" href="#"><i class="fas fa-fw fa-book"></i>
                            <span>NINGUNA</span></a>
                    <?php } ?>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="./Calificaciones.php" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-check-circle"></i>
            <span>Calificaciones</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="./Asistencia.php" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-child"></i>
            <span>Asistencia</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="./detalleHorario.php" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Horario</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="./cambioContraseña.php" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <span>Cambio de contraseña</span>
        </a>
    </li>
    </ul>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h3 mb-4 text-primary">Calificaciones</h5>
          </div>
          <div class="card-body">
                <div class="table-responsive">
                  <table id="t01" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th class="text-center">Asignatura</th>
                        <th class="text-center">Tareas</th>
                        <th class="text-center">Talleres</th>
                        <th class="text-center">Pruebas</th>
                        <th class="text-center">Exámen</th>
                        <th class="text-center">Promedio 1er Quimestre</th>
                        <th class="text-center">Tareas</th>
                        <th class="text-center">Talleres</th>
                        <th class="text-center">Pruebas</th>
                        <th class="text-center">Exámen</th>
                        <th class="text-center">Promedio 2do Quimestre</th>
                      </tr>
                    </thead>
<!--                     <tfoot>
                      <tr>
                        <th class="text-center">Asignatura</th>
                        <th class="text-center">Tareas</th>
                        <th class="text-center">Talleres</th>
                        <th class="text-center">Pruebas</th>
                        <th class="text-center">Exámen</th>
                        <th class="text-center">Promedio 1er Quimestre</th>
                        <th class="text-center">Tareas</th>
                        <th class="text-center">Talleres</th>
                        <th class="text-center">Pruebas</th>
                        <th class="text-center">Exámen</th>
                        <th class="text-center">Promedio 2do Quimestre</th>
                      </tr>
                    </tfoot> -->
                    <tbody>
                    <?php
                       if ($result->num_rows > 0) {
                           while ($row = $result->fetch_assoc()) {
                    ?>
                      <tr>
                        <td class="text-center"><?php echo $row["NOMBRE"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA1"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA2"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA3"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA4"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA5"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA6"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA7"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA8"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA9"]; ?></td>
                        <td class="text-center"><?php echo $row["NOTA10"]; ?></td>
                      </tr>
                      <?php
                             }
                         } 
                         else { ?>
                             <tr>
                                 <td colspan="11" class="text-center">NO HAY DATOS</td>
                             </tr>
                      <?php } ?>
                      </tbody>
                  </table>
                </div>
              </div>
          <!-- Page Heading -->
        <!-- Footer -->
        <?php
          include '../views/partials/footer.php';
        ?>
        <!-- End of Footer -->
        </div>
      </div>
    </div>
</body>
</html>