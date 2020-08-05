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
        $alumno=$docenteService->findAllAsigPerDocAlumno($_POST["asig"]);
        $asigPer=$docenteService->findByPKAsigPer($_POST["asig"]);
        if($asigPer!=null){
              $asignatura=$asigPer["NOMBRE"];
              $nombre=$asigPer["NOMBRE_NIVEL"];
              $nivel=$asigPer["NIVEL"];
          }
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
                    <h1 class="h3 mb-0 text-gray-800">Reporte calificaciones</h1> <br>

                    <!-- Page Heading -->
                    <div class="container-fluid">
                        <div style="display: flex;align-items: center;justify-content: center;">
                            <div class="abs-center">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <form action="reporteCalificacion.php" class=" form" method="POST">
                                        <div class="container justify-content-center">
                                            <div ALIGN=center>
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
                                                            <option value="<?php echo $row["COD_PERIODO_LECTIVO"]?>"
                                                                hidden selected>
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
                                        </div>
                                        <div class="container-fluid" style="width: auto; margin: auto auto">
                                            <!-- DataTales Example -->
                                            <div class="card shadow mb-3">
                                                <div class="card-header" style="text-align: center;">
                                                    <?php
                                                    if(isset($_POST["buscar"])){
                                                        $nameBt='agregar';
                                                    ?>
                                                    <h4 class="m-0 font-weight-bold text-primary">
                                                        <?php echo $asigPer["NOMBRE"]?></h4>
                                                    <h5><?php echo $asigPer["NOMBRE_NIVEL"].' '.'('.$asigPer["NIVEL"].')'?>
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-bordered" id="dataTable" width="100%"
                                                        cellspacing="0">
                                                        <thead>
                                                            <tr class="tablerow">
                                                                <th scope="col" colspan="2"></th>
                                                                <th scope="col" colspan="5">Primer Quimestre
                                                                </th>
                                                                <th scope="col" colspan="5">Segundo
                                                                    Quimestre</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Código
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Nombres
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Deberes
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Talleres
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Pruebas
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Ex.
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Prom.
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Deberes
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Talleres
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Pruebas
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Ex.
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Prom.
                                                                </th>
                                                                <th scope="col" style="vertical-align: middle;">
                                                                    Prom
                                                                    Final
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                                if($alumno->num_rows>0){
                                                                    while($row2 = $alumno->fetch_assoc()) {
                                                            ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo 'PA00'.$row2["COD_PERSONA"]?>
                                                                </td>
                                                                <td><?php echo $row2["APELLIDO"].' '.$row2["NOMBRE"];?>
                                                                </td>
                                                                <td><?php echo $row2["NOTA1"];?></td>
                                                                <td><?php echo $row2["NOTA2"];?></td>
                                                                <td><?php echo $row2["NOTA3"];?></td>
                                                                <td><?php echo $row2["NOTA4"];?></td>
                                                                <td><?php echo $row2["NOTA5"];?></td>
                                                                <td><?php echo $row2["NOTA6"];?></td>
                                                                <td><?php echo $row2["NOTA7"];?></td>
                                                                <td><?php echo $row2["NOTA8"];?></td>
                                                                <td><?php echo $row2["NOTA9"];?></td>
                                                                <td><?php echo $row2["NOTA10"];?></td>
                                                                <td><?php $promedio=($row2["NOTA5"]+$row2["NOTA10"])/2; echo round($promedio,2)?>
                                                                </td>
                                                            </tr>
                                                            <?php }
                                                                } else{ ?>
                                                            <tr>
                                                                <td colspan="13">No hay datos</td>
                                                            </tr>
                                                            <?php }}?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>

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

</body>

</html>