<?php
setlocale(LC_TIME, 'es_EC.UTF-8');
session_start();
$message='false';
$codperiodo='';
$quimestre='';
if (!isset($_SESSION['DOC'])) {
  header('Location: ../Login/login.php');
}
    include '../services/docenteService.php';
    $docenteService=new DocenteService();
    $result= $docenteService->findAllPeriodosAct();
    $nameBtn='aceptar';
    if(isset($_POST["buscar"])||isset($_POST["agregar"])){
        $quimestreUpdate=$_POST["quimestre"];
        $alumno=$docenteService->findAllAsigPerDocAlumno($_POST["asig"]);
        $asigPer=$docenteService->findByPKAsigPer($_POST["asig"]);
        if($asigPer!=null){
              $asignatura=$asigPer["NOMBRE"];
              $nombre=$asigPer["NOMBRE_NIVEL"];
              $nivel=$asigPer["NIVEL"];
          }
    }
    if(isset($_POST["agregar"])){
        //$promPrimerQuimestre=0;
        //$promSegundoQuimestre=0;
        $alumnoRegistrado=$docenteService->findByPKAlumAsigPeriodo($_POST["codalumno"]);
        if($alumnoRegistrado!=null){
              $nota1=$alumnoRegistrado["NOTA1"];
              $nota2=$alumnoRegistrado["NOTA2"];
              $nota3=$alumnoRegistrado["NOTA3"];
              $nota4=$alumnoRegistrado["NOTA4"];
              $nota5=$alumnoRegistrado["NOTA5"];
              $nota6=$alumnoRegistrado["NOTA6"];
              $nota7=$alumnoRegistrado["NOTA7"];
              $nota8=$alumnoRegistrado["NOTA8"];
              $nota9=$alumnoRegistrado["NOTA9"];
              $nota10=$alumnoRegistrado["NOTA10"];
          }
        $quimestreAgregar=$_POST["quimestreAgregar"];
        $cantNotasQuimestre=4;
        if($nota1==null||$nota2==null||$nota3==null||$nota4==null||$nota6==null||$nota7==null||$nota8==null||$nota9==null){
            if($quimestreAgregar=='Primer'){
                if(($_POST["nota1"]!=null && $_POST["nota2"]!=null&&$_POST["nota3"]!=null&&$_POST["nota4"]!=null)){
                    $promPrimerQuimestre=($_POST["nota1"] + $_POST["nota2"] + $_POST["nota3"] + $_POST["nota4"])/$cantNotasQuimestre;
                    $docenteService->updateNotasAlumnoPrimer($_POST["nota1"], $_POST["nota2"], $_POST["nota3"], $_POST["nota4"], $promPrimerQuimestre,$_POST["codalumno"]);
                    $docenteService->updatePromedioAlumno1Q($promPrimerQuimestre,$_POST["codalumno"]); 
                    $message='false';
                }else{
                    $message='true';
                }
            }else{
                if(($_POST["nota6"]!=null&&$_POST["nota7"]!=null&&$_POST["nota8"]!=null&&$_POST["nota9"]!=null)){
                    $promSegundoQuimestre=($_POST["nota6"] + $_POST["nota7"] + $_POST["nota8"] + $_POST["nota9"])/$cantNotasQuimestre;
                    $docenteService->updateNotasAlumnoSegundo($_POST["nota6"], $_POST["nota7"], $_POST["nota8"], $_POST["nota9"], $promSegundoQuimestre,$_POST["codalumno"]);
                    $docenteService->updatePromedioAlumno2Q($promSegundoQuimestre,$_POST["codalumno"]); 
                    $message='false';    
                }else{
                        $message='true';
                }
            }
        }else{
            $message='register';
        }
        $alumnoRegist=$docenteService->findByPKAlumAsigPeriodo($_POST["codalumno"]);
        if($alumnoRegist!=null){
            $nota5I=$alumnoRegist["NOTA5"];
            $nota10I=$alumnoRegist["NOTA10"];
        }
        if($nota5I!=null&&$nota10I!=null){
            $promedio=($nota10I+$nota5I)/2;
        } 
        $docenteService->updatePromedioAlumnoPF($promedio,$_POST["codalumno"]);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
                    <h1 class="h3 mb-0 text-gray-800">Ingreso calificaciones</h1> <br>

                    <!-- Page Heading -->
                    <div class="container-fluid">
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <div class="abs-center">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <form action="ingresoCalificacion.php" class=" form" method="POST">
                                        <div class="justify-content-center">
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
                                                        <?php if(isset($_POST["aceptar"])){?>
                                                        <option value="<?php echo $row["COD_PERIODO_LECTIVO"]?>" hidden
                                                            selected>
                                                            <?php echo "$inicio - $fin"?></option><?php }?>
                                                        <?php }} ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php
                                                if(isset($_POST["aceptar"])||isset($_POST["buscar"])||isset($_POST["agregar"])){
                                                    $nameBtn='buscar';
                                                    $res=$docenteService->findAllAsigPerDocente($_POST['codperiodo'],$_SESSION['DOC']['COD_PERSONA']);
                                                    
                                                ?>
                                            <div class="btn-group">
                                                <div class="form-group">
                                                    <label for="sel1">Asignatura</label>
                                                    <select class="form-control" id="asig" name="asig">
                                                        <?php
                                                        if($res->num_rows>0){
                                                            while($row1 = $res->fetch_assoc()) {
                                                        ?>
                                                        <option value="<?php echo $row1["COD_ASIG_PERIODO"]?>">
                                                            <?php echo $row1["NIVEL"].'-'. $row1["NOMBRE_NIVEL"].'-'.$row1["NOMBRE"]?>
                                                        </option>
                                                        <?php } }?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="btn-group">
                                                <div class="form-group">
                                                    <label for="sel1">Quimestre</label>
                                                    <select class="form-control" id="quimestre" name="quimestre">
                                                        <option value="Primer">Primero</option>
                                                        <option value="Segundo">Segundo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="btn-group">
                                                <div class="form-group"><br><br>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary" type="submit"
                                                            name=<?php echo $nameBtn?>>
                                                            <i class="fas fa-search fa-sm"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="justify-content-center">
                                            <table class="table table-bordered" style=" vertical-align: middle;">
                                                <div class="container">
                                                    <?php
                                                    if(isset($_POST["buscar"])||isset($_POST["agregar"])){
                                                        $nameBt='agregar';
                                                    ?>
                                                    <div class="form-group">
                                                    </div>
                                                    <h4 ALIGN=center><strong>
                                                            <?php echo $asigPer["NOMBRE"]?>
                                                            -
                                                            <?php echo $asigPer["NOMBRE_NIVEL"].' '.'('.$asigPer["NIVEL"].')'?></strong>
                                                    </h4>
                                                    <?php if(isset($_POST["buscar"])||isset($_POST["agregar"])){?>
                                                    <h5 ALIGN=center><?php echo $quimestreUpdate?>&nbsp;Quimestre</h5>
                                                    <?php }?>
                                                </div><br>
                                                <div class="btn-group">
                                                    <div class="form-group">
                                                        <label for="sel1">Nombres: </label>
                                                    </div>
                                                </div>&nbsp;&nbsp;
                                                <div class="btn-group">
                                                    <div class="form-group">
                                                        <select class="form-control" id="codalumno" name="codalumno">
                                                            <?php
                                                                    $alumnos=$docenteService->findAllAsigPerDocAlumno($_POST["asig"]);
                                                                    if($alumnos->num_rows>0){
                                                                        while($row5 = $alumnos->fetch_assoc()) {
                                                                    ?>
                                                            <option value="<?php echo $row5["COD_ALUMNO"]?>">
                                                                <?php echo $row5["APELLIDO"].' '. $row5["NOMBRE"]?>
                                                            </option>
                                                            <?php } }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <?php
                                                if($message=='true'){?>
                                                <p style="color:red;">* Primero ingrese las calificaciones</p>
                                                <?php }else if($message=='register'){?>
                                                <p style="color:red;">* Alumno seleccionado se encuentra registrado</p>
                                                <?php }?>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Deberes</th>
                                                            <th scope="col">Talleres</th>
                                                            <th scope="col">Pruebas</th>
                                                            <th scope="col">Examenes</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if($_POST["quimestre"]=='Primer'){ ?>
                                                        <td width="10px"><input type="number" min="0" max="10"
                                                                step="any" class="form-control" value=""
                                                                placeholder="10" id="nota1" name="nota1">
                                                        </td>
                                                        <td width="10px"><input type="number" min="0" max="10"
                                                                step="any" class="form-control" value=""
                                                                placeholder="10" id="nota2" name="nota2"></td>
                                                        <td width="10px"><input type="number" min="0" max="10"
                                                                step="any" class="form-control" value=""
                                                                placeholder="10" id="nota3" name="nota3"></td>
                                                        <td width="10px"><input type="number" min="0" max="10"
                                                                step="any" class="form-control" value=""
                                                                placeholder="10" id="nota4" name="nota4"><input
                                                                type="hidden" value="Primer" placeholder="10"
                                                                id="quimestreAgregar" name="quimestreAgregar"></td>
                                                        <?php }else if($_POST["quimestre"]=='Segundo'){?>
                                                        <td width="10px"><input type="number" min="0" max="10"
                                                                step="any" class="form-control" value=""
                                                                placeholder="10" id="nota6" name="nota6"></td>
                                                        <td width="10px"><input type="number" min="0" max="10"
                                                                step="any" class="form-control" value=""
                                                                placeholder="10" id="nota7" name="nota7"></td>
                                                        <td width="10px"><input type="number" min="0" max="10"
                                                                step="any" class="form-control" value=""
                                                                placeholder="10" id="nota8" name="nota8"></td>
                                                        <td width="10px"><input type="number" min="0" max="10"
                                                                step="any" class="form-control" value=""
                                                                placeholder="10" id="nota9" name="nota9"><input
                                                                type="hidden" value="Segundo" placeholder="10"
                                                                id="quimestreAgregar" name="quimestreAgregar"></td>
                                                        <?php }?>
                                                        <td style="width: 2%;">
                                                            <button class="btn btn-default" type="submit"
                                                                name=<?php echo $nameBt?>>
                                                                <i class="fas fa-plus-circle"
                                                                    style="color:#4e73df;"></i>
                                                            </button>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php }?>
                                            </table>

                                        </div>
                                </div>

                            </div>
                            <!-- Footer -->
                        </div>
                    </div>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="../js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="../vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="../js/demo/chart-area-demo.js"></script>
            <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>