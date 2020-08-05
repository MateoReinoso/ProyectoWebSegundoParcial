<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('includes/header.php'); ?>
    <title>Calendario Académico</title>
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
                        <h5 class="h3 mb-4 text-gray-800"><a href="./gestPeriodo.php">Periodo
                            </a>-Crear Calendario Académico</h5>
                    </div>

                    <!-- Page Heading -->

                    <div class="row justify-content-center ">
                        <form class="user">
                            <div>
                                <h1 class="text-center">Periodo</h1>
                            </div>

                            <div class="form-group row p-3">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div>
                                        <h2 class="text-center">Primer Quimestre</h2>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="inicioQuimestre" class="text-center">Inicio
                                                Quimestre</label><br>

                                            <input type="date" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="finQuimestre" class="text-center">Fin Quimestre</label><br>
                                            <input type="date" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="inicioQuimestre" class="text-center">Inicio Pruebas</label><br>

                                            <input type="date" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="finQuimestre" class="text-center">Fin Pruebas</label><br>
                                            <input type="date" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="inicioQuimestre" class="text-center">Inicio Exámenes</label><br>

                                            <input type="date" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="finQuimestre" class="text-center">Fin Exámenes</label><br>
                                            <input type="date" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="inicioQuimestre" class="text-center">Inicio Ingreso de
                                                notas</label><br>

                                            <input type="date" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="finQuimestre" class="text-center">Fin Ingreso de
                                                notas</label><br>
                                            <input type="date" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>



                                </div>


                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div>
                                        <h2 class="text-center">Segundo Quimestre</h2>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="inicioQuimestre" class="text-center">Inicio
                                                Quimestre</label><br>

                                            <input type="date" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="finQuimestre" class="text-center">Fin Quimestre</label><br>
                                            <input type="date" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="inicioQuimestre" class="text-center">Inicio Pruebas</label><br>

                                            <input type="date" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="finQuimestre" class="text-center">Fin Pruebas</label><br>
                                            <input type="date" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="inicioQuimestre" class="text-center">Inicio Exámenes</label><br>

                                            <input type="date" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="finQuimestre" class="text-center">Fin Exámenes</label><br>
                                            <input type="date" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="inicioQuimestre" class="text-center">Inicio Ingreso de
                                                notas</label><br>

                                            <input type="date" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0 text-center">
                                            <label for="finQuimestre" class="text-center">Fin Ingreso de
                                                notas</label><br>
                                            <input type="date" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div>
                                <h4 class="text-center p-3">Agregar Fechas Civicas y feriados</h4>
                            </div>

                            <div class="form-group row p-3">
                                <div class="col-sm-6 mb-3 mb-sm-0">

                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control form-control-user form-control form-control-user-user "
                                            placeholder="Buscar Fecha">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3 mb-sm-0 text-center p-2">
                                        <input type="text" class="form-control form-control-user form-control form-control-user-user" id="campoAsignaturar"
                                            placeholder="Nombre de Fecha Civica">
                                    </div>
                                    <div class="row justify-content-center p-2">
                                        <div class="col-sm-6 mb-3 mb-sm-0 ">
                                            <button class="btn btn-success btn-user btn-block">
                                                Agregar a Cronograma
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="form-group row">
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                            <table class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Fecha</th>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>12/25/2020</td>
                                                        <td>Navidad</td>
                                                        <td><button
                                                                class="btn btn-danger btn-user btn-block">Eliminar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>06/25/2020</td>
                                                        <td>Juramento Bandera</td>
                                                        <td><button
                                                                class="btn btn-danger btn-user btn-block">Eliminar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>09/25/2020</td>
                                                        <td>Matriculas</td>
                                                        <td><button
                                                                class="btn btn-danger btn-user btn-block">Eliminar</button>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>


                                    </div>

                                </div>
                            </div>

                            <div class="form-group row p-5">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <a href="./gestPeriodo.php" class="btn btn-primary btn-user btn-block">
                                        Registrar Cronograma
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="./gestPeriodo.php" class="btn btn-secondary btn-user btn-block ">
                                        Cancelar
                                    </a>

                                </div>
                            </div>
                            <hr>
                            <hr>
                        </form>



                    </div>



                </div>









                

        <!-- Bootstrap core JavaScript-->
        <?php include('includes/footer.php'); ?>