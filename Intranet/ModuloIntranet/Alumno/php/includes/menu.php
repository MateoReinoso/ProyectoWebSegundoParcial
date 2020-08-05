<?php
include '../services/alumnoService.php';

$alumnoService = new AlumnoService();
$result2 = $alumnoService->findSubjet($_SESSION['EST']['COD_PERSONA']);
?>
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
                        <a class="collapse-item" href="./gestAula1.php"><i class="fas fa-fw fa-book"></i>
                        <span><?php echo $row["NOMBRE"]; ?></span></a>
                      <?php
                             }
                         } 
                         else { ?>
                             <tr>
                             <a class="collapse-item" href="#"><i class="fas fa-fw fa-book"></i>
                            <span>NINGUNA</span></a>
                             </tr>
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