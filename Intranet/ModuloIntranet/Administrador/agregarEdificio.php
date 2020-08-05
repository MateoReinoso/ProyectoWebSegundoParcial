<?php include("db.php"); ?>
<?php
$COD_SEDE = '';
$NOMBRE = '';
$CANTIDAD_PISOS = '';
$accion = "Agregar";
$COD_EDIFICIO = "";

if (isset($_GET['COD_EDIFICIO'])) {
    $result_EDIFICIO = $conn->query("SELECT * FROM EDIFICIO WHERE COD_EDIFICIO=" . $_GET['COD_EDIFICIO']);
    if (mysqli_num_rows($result_EDIFICIO) == 1) {
        $row = mysqli_fetch_array($result_EDIFICIO);
        $COD_SEDE = $row['COD_SEDE'];
        $NOMBRE = $row['NOMBRE'];
        $CANTIDAD_PISOS = $row['CANTIDAD_PISOS'];
        $CODIGO_POSTAL = $row['CODIGO_POSTAL'];
        $COD_EDIFICIO = $row['COD_EDIFICIO'];
        $accion = "Modificar";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('includes/header.php'); ?>

    <title>Registro Edificios</title>

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
                        <h5 class="h3 mb-4 text-gray-800"><a href="./gestEdificio.php">Gestión Edificios
                            </a>-Registrar Edificio</h5>
                    </div>

                    <!-- Page Heading -->
                    <main class="container p-4">
                        <div class="row ">

                            <div class="col-md-12 justify-content-center">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>COD_EDIFICIO</th>
                                            <th>SEDE</th>
                                            <th>NOMBRE</th>
                                            <th>CANTIDAD_PISOS</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $result_EDIFICIO = $conn->query("SELECT COD_EDIFICIO, EDIFICIO.NOMBRE AS EN , SEDE.NOMBRE AS SN, CANTIDAD_PISOS FROM EDIFICIO INNER JOIN SEDE ON SEDE.COD_SEDE=EDIFICIO.COD_SEDE");

                                        while ($row = mysqli_fetch_assoc($result_EDIFICIO)) { ?>
                                            <tr>
                                                <td><?php echo $row['COD_EDIFICIO']; ?></td>
                                                <td><?php echo $row['SN']; ?></td>
                                                <td><?php echo $row['EN']; ?></td>
                                                <td><?php echo $row['CANTIDAD_PISOS']; ?></td>
                                                <td>
                                                    <a href="agregarEdificio.php?COD_EDIFICIO=<?php echo $row['COD_EDIFICIO'] ?>" class="btn btn-secondary">
                                                        <i class="fas fa-marker"></i>
                                                    </a>
                                                    <a href="delete_Edificio.php?COD_EDIFICIO=<?php echo $row['COD_EDIFICIO'] ?>" class="btn btn-danger">
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
                            
                                    <form action="actualizarEdificio.php" method="POST">
                                    <div class="form-group">
                                            <?php
                                            $query = 'SELECT * FROM SEDE';
                                            $result = $conn->query($query);
                                            ?>
                                            <select name="COD_SEDE" class="form-control" id="selector">
                                                <?php
                                                while ($row = $result->fetch_array()) {
                                                ?>
                                                    <option  value=" <?php echo $row['COD_SEDE'] ?> ">
                                                        <?php echo $row['NOMBRE']; ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <?php
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="NOMBRE" class="form-control" placeholder="NOMBRE" autofocus value="<?php echo $NOMBRE ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="CANTIDAD_PISOS" class="form-control" placeholder="CANTIDAD_PISOS" min="1" max="15" value="<?php echo $CANTIDAD_PISOS ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="COD_EDIFICIO" class="form-control" value="<?php echo $COD_EDIFICIO; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="accion" class="form-control" value="<?php echo $accion; ?>">
                                        </div>
                                        <input type="submit" name="save_Edificio" class="btn btn-success btn-block" value="<?php echo $accion; ?>">
                                    </form>
                              
                            </div>
                        </div>
                    </main>
                </div>
                <?php include('includes/footer.php'); ?>
