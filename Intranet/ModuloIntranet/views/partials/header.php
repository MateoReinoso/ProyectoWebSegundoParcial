<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    </h2><img src="../img/logo.png" style="width: 6%;" alt="">&nbsp;Unidad Educativa Margaret Hamilton</h2>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Notificaciones
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">Junio 23, 2020</div>
                        <span class="font-weight-bold">Nueva tarea de Informática Forense</span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">Junio 22, 2020</div>
                        Debe cancelar los créditos
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">Junio 20, 2020</div>
                        Tienes tareas pendientes
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar Todas las
                    Notificaciones</a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Mensajes
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">Hola chicos, no olvidar que el jueves presentan sus
                            proyectos.
                            Saludos
                        </div>
                        <div class="small text-gray-500">Henry Coral · 58m</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Leer más mensajes</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php
                    if(isset($_SESSION['EST'])){
                        echo $_SESSION['EST']['NOMBRE_ROL'] ?> <br>
                    <?php  echo $_SESSION['EST']['NOMBRE_USUARIO'];
                    }else if(isset($_SESSION['DOC'])){
                        echo $_SESSION['DOC']['NOMBRE_ROL'] ?> <br>
                    <?php  echo $_SESSION['DOC']['NOMBRE_USUARIO'];
                    }else if(isset($_SESSION['ADM'])){
                        echo $_SESSION['ADM']['NOMBRE_ROL'] ?> <br>
                    <?php  echo $_SESSION['ADM']['NOMBRE_USUARIO'];
                    }else if(isset($_SESSION['DIR'])){
                        echo $_SESSION['DIR']['NOMBRE_ROL'] ?> <br>
                    <?php  echo $_SESSION['DIR']['NOMBRE_USUARIO'];
                    }else if(isset($_SESSION['REP'])){
                        echo $_SESSION['REP']['NOMBRE_ROL'] ?> <br>
                    <?php  echo $_SESSION['REP']['NOMBRE_USUARIO'];
                    }else if(isset($_SESSION['SUP'])){
                        echo $_SESSION['SUP']['NOMBRE_ROL'] ?> <br>
                    <?php  echo $_SESSION['SUP']['NOMBRE_USUARIO'];
                    }?>
                </span>
                <img class="img-profile rounded-circle" src="../img/usuario.png">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Mi perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../LogIn/php/logout.php"> Salir</a>
            </div>
        </li>
    </ul>
</nav>