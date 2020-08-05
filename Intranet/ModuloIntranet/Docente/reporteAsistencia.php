<?php
session_start();
if (!isset($_SESSION['DOC'])) {
  header('Location: ../Login/login.php');
}
include '../services/docenteService.php';
$docenteService=new DocenteService();
$result= $docenteService->findAllPeriodosAct();
if(isset($_POST["agregar"])){
    $docenteService->insertAsistencia($_POST["selectStudents"], $_POST["codperiodo"], $_POST["selectNivel"], $_POST["selectState"], $_POST["fecha"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Docente</title>
    <?php
        include '../views/partials/head.php';
    ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include './php/includes/menu.php';
        ?>
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
                    <div class="container-fluid">

                    </div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-0 text-gray-800">Reporte asistencia</h1> <br>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <div class="abs-center">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <form action="reporteAsistencia.php" method="POST" class="user">
                                        <div class="container text-content-center">
                                            <div class="btn-group">
                                                <div class="form-group">
                                                    <label for="sel1">Periodo</label>
                                                    <select class="form-control" id="codperiodo" name="codperiodo">
                                                        <?php
                                                            if($result->num_rows>0){
                                                                while($row = $result->fetch_assoc()) {
                                                        ?>
                                                        <option value="<?php echo $row["COD_PERIODO_LECTIVO"]?>">
                                                            <?php 
                                                            $inicio=$row["FECHA_INICIO"];
                                                            $inicio= date("M Y", strtotime($inicio));
                                                            $fin=$row["FECHA_FIN"];
                                                            $fin=date("M Y", strtotime($fin));
                                                            echo "$inicio - $fin"?>
                                                        </option>
                                                        <?php }} ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <div class="form-group">
                                                    <label for="sel1">Nivel educativo</label>
                                                    <select class="form-control" id="selectNivel" name="selectNivel"
                                                        required style="width: 200px;">
                                                        <option value="">Seleccione</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="btn-group">
                                                <div class="form-group">
                                                    <label for="sel1">Fecha</label><br>
                                                    <input type="date" class="form-control" id="fecha" name="fecha"
                                                        value="" min="2020-01-01" max="2022-12-31" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-2"></div>
                                        <div id="students"></div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Footer -->



                </div>
                <?php
                include '../views/partials/footer.php';
                ?>
            </div>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->


</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
    //$('#codperiodo').val(1);
    //$('#codNivel').val(1);
    //recargarLista();
    $('#codperiodo').click(function() {
        recargarLista();

    });
    $('#fecha').change(function() {
        recargarListaEstudiantes();
    });


})
</script>
<script type="text/javascript">
function recargarLista() {
    $.ajax({
        type: "POST",
        url: "asistencia.php",
        data: "codperiodo=" + $('#codperiodo').val(),
        success: function(r) {
            $('#selectNivel').html(r);
        }
    });
}

function recargarListaEstudiantes() {
    let parametros = {
        "fecha": $('#fecha').val(),
        "selectNivel": $('#selectNivel').val()
    };
    $.ajax({
        type: "POST",
        url: "listaEstudiantesSelect.php",
        data: parametros,
        success: function(r) {
            $('#students').html(r);
        }
    });
}
</script>