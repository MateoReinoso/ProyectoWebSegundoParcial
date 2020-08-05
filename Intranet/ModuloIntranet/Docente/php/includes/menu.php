<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Docente</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Aulas</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span>Gestión Calificaciones Alumnos</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Calificaciones:</h6>
                <a class="collapse-item" href="./ingresoCalificacion.php">Ingreso calificaciones</a>
                <a class="collapse-item" href="./modificarCalificacion.php">Modificación calificaciones</a>
                <a class="collapse-item" href="./reporteCalificacion.php">Reporte calificaciones</a>

            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitie"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <span>Gestión Asistencia <br> Alumnos</span>
        </a>
        <div id="collapseUtilitie" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Asistencia</h6>
                <a class="collapse-item" href="./registroAsistencia.php">Registro asistencia</a>
                <a class="collapse-item" href="./modificarAsistencia.php">Modificación asistencia</a>
                <a class="collapse-item" href="./reporteAsistencia.php">Reporte asistencia</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilit" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fa fa-indent" aria-hidden="true"></i>
            <span>Gestión reuniones con representantes</span>
        </a>
        <div id="collapseUtilit" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Reuniones</h6>
                <a class="collapse-item" href="./estudiantesReunion.php">Añadir reunión</a>
                <a class="collapse-item" href="./modificarReunion.php">Modificar reunión</a>
                <a class="collapse-item" href="./busquedaReunion.php">Visualizar reuniones</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtili" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span>Horario</span>
        </a>
        <div id="collapseUtili" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="./detalleHorario.php">Detalle horario</a>
            </div>
        </div>
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