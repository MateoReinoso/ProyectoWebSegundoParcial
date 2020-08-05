<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/header.php'); ?>
    <title>Actualizar Docentes Materias</title>
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
                        <h5 class="h3 mb-4 text-gray-800"><a href="./gestPeriodo.php">Gestión Periodo
                            </a>-Modificar Periodo</h5>
                    </div>

                    <!-- Page Heading -->

                    <div class="row justify-content-center ">
                        <form class="user">
                            <div class="d-sm-flex align-items-center justify-content-center mb-4">
                                <h2 class="h3 mb-6 text-gray-800 Text-center">Modificar Asiganturas-Profesores</h2>
                            </div>
                            <div class="form-group row p-3">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <H4 class="text-center">Asignar Dias Asignatura </H4>
                                    <div class="form-group text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Lunes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Martes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Miércoles</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Jueves</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Viernes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Sábados</label>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="inicioQuimestre" class="text-center">Inicio hora</label><br>
                                            <input type="time" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inicioQuimestre" class="text-center">Fin hora</label><br>

                                            <input type="time" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="inicioQuimestre" class="text-center">Inicio hora</label><br>
                                            <input type="time" class="form-control form-control-user form-control form-control-user-user" id="idAsigntura"
                                                placeholder="Código Asignatura" disabled>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inicioQuimestre" class="text-center">Fin hora</label><br>

                                            <input type="time" class="form-control form-control-user form-control form-control-user-user"
                                                id="campoAsignaturar" placeholder="Campo de Estudio">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control form-control-user ">
                                            <option value="" disabled selected hidden>Curso</option>
                                            <option value="norte">A1123</option>
                                            <option value="norte">A1333</option>
                                            <option value="norte">A1222</option>
                                            <option value="norte">A1232</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control form-control-user ">
                                            <option value="" disabled selected hidden>Seleccionar Docente</option>
                                            <option value="norte">Juan Pérez</option>
                                            <option value="Sur">Carlos Monteros</option>
                                            <option value="Sur">Maria González</option>


                                        </select>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 mb-3 mb-sm-0 ">
                                            <button class="btn btn-success btn-user btn-block">
                                                Agregar Asignatura
                                            </button>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-sm-8 mb-3 mb-sm-0 p-3">
                                    <div class="form-group row">
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                            <table class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">idAsigntura</th>
                                                        <th scope="col">Asignatura</th>
                                                        <th scope="col">Docente</th>
                                                        <th scope="col">Dias</th>
                                                        <th scope="col">Horas</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>AS1222</td>
                                                        <td>Historia1</td>
                                                        <td>Juan Perez</td>
                                                        <td>Lunes</td>
                                                        <td>7am-8am</td>
                                                        <td><button
                                                                class="btn btn-success btn-user btn-block">Modificar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>AS3345</td>
                                                        <td>Literatura1</td>
                                                        <td>Carlos Perez</td>
                                                        <td>Martes</td>
                                                        <td>7am-8am</td>
                                                        <td><button
                                                                class="btn btn-success btn-user btn-block">Modificar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>AS1734</td>
                                                        <td>Matematicas2</td>
                                                        <td>María Corodova</td>
                                                        <td>jueves</td>
                                                        <td>9am-10am</td>
                                                        <td><button
                                                                class="btn btn-success btn-user btn-block">Modificar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>AS5345</td>
                                                        <td>Geometria1</td>
                                                        <td>Carlos Rerez</td>
                                                        <td>Viernes</td>
                                                        <td>8am-9am</td>
                                                        <td><button
                                                                class="btn btn-success btn-user btn-block">Modificar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>AS1145</td>
                                                        <td>Inglés1</td>
                                                        <td>Carlos Montero</td>
                                                        <td>Martes</td>
                                                        <td>12pm-1pm</td>
                                                        <td><button
                                                                class="btn btn-success btn-user btn-block">Modificar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>AS1215</td>
                                                        <td>Matematicas1</td>
                                                        <td>Marta Perez</td>
                                                        <td>Viernes</td>
                                                        <td>711am-12pm</td>
                                                        <td>
                                                            <button
                                                                class="btn btn-success btn-user btn-block">Modificar</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>


                                    </div>

                                </div>
                            </div>


                            <div class="form-group row p-3">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <a href="./gestPeriodo.php" class="btn btn-primary btn-user btn-block">
                                        Modificar Asiganturas
                                    </a>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
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

 <?php include('includes/footer.php'); ?>

                