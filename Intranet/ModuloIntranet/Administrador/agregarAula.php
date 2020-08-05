<?php include("db.php"); ?>
<?php
$COD_SEDE = '';
$NOMBRE = '';
$CAPACIDAD = '';
$TIPO ='' ;
$PISO='';
$accion = "Agregar";
$COD_AULA = "";

if (isset($_GET['COD_AULA'])) {
    $result_AULA = $conn->query("SELECT * FROM AULA WHERE COD_AULA=" . $_GET['COD_AULA']);
    if (mysqli_num_rows($result_AULA) == 1) {
        $row = mysqli_fetch_array($result_AULA);
        $COD_SEDE = $row['COD_SEDE'];
        $NOMBRE = $row['NOMBRE'];
        $CAPACIDAD = $row['CAPACIDAD'];
        $TIPO = $row['TIPO'];
        $PISO=$row['PISO'];
        $COD_AULA = $row['COD_AULA'];
        $accion = "Modificar";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('includes/header.php'); ?>

    <title>Registro Aulas</title>

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
                        <h5 class="h3 mb-4 text-gray-800"><a href="./gestEdificio.php">Gestión Aulas
                            </a>-Registrar Aulas</h5>
                    </div>

                    <!-- Page Heading -->
                    <main class="container p-4">
                        <div class="row ">

                            <div class="col-md-12 justify-content-center">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>COD_AULA</th>
                                            <th>NOMBRE</th>
                                            <th>SEDE</th>
                                            <th>EDIFICIO</th>
                                            <th>CAPACIDAD</th>
                                            <th>TIPO</th>
                                            <th>PISO</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $result_AULA = $conn->query("SELECT COD_AULA, AULA.NOMBRE AS AN, SEDE.NOMBRE AS SN, EDIFICIO.NOMBRE AS EN, CAPACIDAD,TIPO, PISO FROM AULA INNER JOIN EDIFICIO ON AULA.COD_EDIFICIO=EDIFICIO.COD_EDIFICIO INNER JOIN SEDE ON SEDE.COD_SEDE=EDIFICIO.COD_SEDE");

                                        while ($row = mysqli_fetch_assoc($result_AULA)) { ?>
                                            <tr>
                                                <td><?php echo $row['COD_AULA']; ?></td>
                                                <td><?php echo $row['AN']; ?></td>
                                                <td><?php echo $row['SN']; ?></td>
                                                <td><?php echo $row['EN']; ?></td>
                                                <td><?php echo $row['CAPACIDAD']; ?></td>
                                                <td><?php echo $row['TIPO']; ?></td>
                                                <td><?php echo $row['PISO']; ?></td>
                                                <td>
                                                    <a href="agregarAula.php?COD_AULA=<?php echo $row['COD_AULA'] ?>" class="btn btn-secondary">
                                                        <i class="fas fa-marker"></i>
                                                    </a>
                                                    <a href="delete_Aula.php?COD_AULA=<?php echo $row['COD_AULA'] ?>" class="btn btn-danger">
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
                            <div class="col-md-4  ">
                                <div class="card card-body">
                                    <form action="actualizarAula.php" method="POST">
                                        <div class="form-group">
                                            <?php
                                            $query = 'SELECT * FROM SEDE';
                                            $result = $conn->query($query);
                                            ?>
                                            <select name="COD_SEDE" class="form-control form-control-user" id="mySelect" onchange="myFunction(this.value)" placeholder="Seleccione una sede" autofocus>
                                                <?php
                                                while ($row = $result->fetch_array()) {
                                                ?>
                                                    <option value=" <?php echo $row['COD_SEDE'] ?> ">
                                                        <?php echo $row['NOMBRE']; ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <?php
                                            ?>
                                        </div>
                                        <script>
                                            function myFunction(x) {
                                                $.ajax({
                                                    type: "POST",
                                                    url: 'consulta.php',
                                                    data: 'idproovedor=' + x,
                                                    success: function(resp) {
                                                        $('#productos').html(resp);
                                                        $('#respuesta').html("");
                                                    }
                                                });
                                            }
                                        </script>
                                        <select name="COD_EDIFICIO" class="form-control form-control-user" id="productos" p-1></select>
                                        <!-- listar edificios-->
                                        <div class="form-group">
                                            <input type="text" name="NOMBRE" class="form-control form-control-user" placeholder="NOMBRE" value="<?php echo $NOMBRE ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="CAPACIDAD" class="form-control form-control-user" placeholder="CAPACIDAD" min="1" max="15" value="<?php echo $CAPACIDAD ?>">
                                        </div>
                                        <div class="form-group">
                                            <select name="ESTADO" class="form-control form-control-user" id="TIPO" p-1>
                                                <option value="GEN">ACT</option>
                                                <option value="LAB">INT</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="PISO" class="form-control form-control-user" placeholder="PISO" min="1" max="15" value="<?php echo $PISO ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="COD_AULA" class="form-control form-control-user" value="<?php echo $COD_AULA; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="accion" class="form-control form-control-user" value="<?php echo $accion; ?>">
                                        </div>
                                        <input type="submit" name="save_Aula" class="btn btn-success btn-block" value="<?php echo $accion; ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>

                <?php include('includes/footer.php'); ?>