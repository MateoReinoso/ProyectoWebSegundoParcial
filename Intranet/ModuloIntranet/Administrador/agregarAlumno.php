<?php include("db.php"); ?>
<?php
$NOMBRE = '';
$DIRECCION = '';
$TELEFONO = '';
$CEDULA = '';
$CORREO_PERSONAL='';
$APELLIDO ='';
$NOMBRE_R = '';
$DIRECCION_R = '';
$TELEFONO_R = '';
$CEDULA_R = '';
$CORREO_PERSONAL_R='';
$APELLIDO_R ='';
$accion = "Agregar";
$COD_SEDE = "";

if (isset($_GET['COD_SEDE'])) {
    $result_sede = $conn->query("SELECT * FROM SEDE WHERE COD_SEDE=" . $_GET['COD_SEDE']);
    if (mysqli_num_rows($result_sede) == 1) {
        $row = mysqli_fetch_array($result_sede);
        $NOMBRE = $row['NOMBRE'];
        $DIRECCION = $row['DIRECCION'];
        $TELEFONO = $row['TELEFONO'];
        $CEDULA = $row['CODIGO_POSTAL'];
        $COD_SEDE = $row['COD_SEDE'];
        $accion = "Modificar";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('includes/header.php'); ?>

    <title>Registro Alumno</title>

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
                        <h5 class="h3 mb-4 text-gray-800"><a href="./gestAlumno.php">Gestión Alumno
                            </a>-Registrar Alumno</h5>
                    </div>
                    <!-- Page Heading -->
                    <main class="container p-4">
                        <div class="container">
                            <div class="row justify-content-center">
                                <form class="user" action="actualizarAlumno.php" method="POST">
                                    <div class="row">
                                        <div class="col-sm-5 mb-3 mb-sm-0">
                                            <div>
                                                <h1 class="text-center">Alumno</h1>
                                            </div>
                                                <div class="form-group">
                                                    <input type="text" name="CEDULA" class="form-control form-control-user" placeholder="CEDULA" minlength="10" maxlength="10" value="<?php echo $CEDULA ?>" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="APELLIDO" class="form-control form-control-user" placeholder="APELLIDO" value="<?php echo $APELLIDO ?>" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="NOMBRE" class="form-control form-control-user" placeholder="NOMBRE" value="<?php echo $NOMBRE ?>" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="DIRECCION" class="form-control form-control-user" placeholder="DIRECCION" value="<?php echo $DIRECCION ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="TELEFONO" class="form-control form-control-user" placeholder="TELEFONO" min="1" max="15" value="<?php echo $TELEFONO ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" name="FECHA_NACIMIENTO" class="form-control form-control-user" placeholder="FECHA_NACIMIENTO" value="<?php echo $FECHA_NACIMIENTO ?>">
                                                </div>
                                                <div class="form-group">
                                                    <select name="GENERO" class="form-control form-control-user" id="TIPO" p-1 placeholder="GENERO">
                                                        <optgroup label="GENERO">
                                                            <option value="MAS">Masculino</option>
                                                            <option value="FEM">Femenino</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="CORREO_PERSONAL" class="form-control form-control-user" placeholder="CORREO_PERSONAL" value="<?php echo $CORREO_PERSONAL ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="COD_PERSONA" class="form-control form-control-user" value="<?php echo $COD_PERSONA; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="accion" class="form-control form-control-user" value="<?php echo $accion; ?>">
                                                </div>

                                            <hr>
                                        </div>
                                        <div class="col-sm-2 mb-3 mb-sm-0"></div>

                                        <div class="col-sm-5 mb-3 mb-sm-0">
                                            <div>
                                                <h1 class="text-center">Representante</h1>
                                            </div>
                                                <div class="form-group">
                                                    <input type="text" name="CEDULA_R" class="form-control form-control-user" placeholder="CEDULA" minlength="10" maxlength="10" value="<?php echo $CEDULA_R ?>" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="APELLIDO_R" class="form-control form-control-user" placeholder="APELLIDO" value="<?php echo $APELLIDO_R ?>" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="NOMBRE_R" class="form-control form-control-user" placeholder="NOMBRE" value="<?php echo $NOMBRE_R ?>" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="DIRECCION_R" class="form-control form-control-user" placeholder="DIRECCION" value="<?php echo $DIRECCION_R ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="TELEFONO_R" class="form-control form-control-user" placeholder="TELEFONO" min="1" max="15" value="<?php echo $TELEFONO_R ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" name="FECHA_NACIMIENTO_R" class="form-control form-control-user" placeholder="FECHA_NACIMIENTO" value="<?php echo $FECHA_NACIMIENTO_R ?>">
                                                </div>
                                                <div class="form-group">
                                                    <select name="GENERO_R" class="form-control form-control-user" id="TIPO_R" p-1 placeholder="GENERO">
                                                        <optgroup label="GENERO">
                                                            <option value="MAS">Masculino</option>
                                                            <option value="FEM">Femenino</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="CORREO_PERSONAL_R" class="form-control form-control-user" placeholder="CORREO_PERSONAL" value="<?php echo $CORREO_PERSONAL_R ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="COD_PERSONA" class="form-control form-control-user" value="<?php echo $COD_PERSONA; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="accion" class="form-control form-control-user" value="<?php echo $accion; ?>">
                                                </div>    
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="submit" name="save_Alumno" class="btn btn-success btn-block" value="<?php echo $accion; ?>">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <a href="./gestPersonal.php" class="btn btn-secondary btn-user btn-block ">
                                                Cancelar
                                            </a>

                                        </div>
                                    </div>
                                    
 </form>


                                </form>

                            </div>

                        </div>


                    </main>



                </div>





                <?php include('includes/footer.php'); ?>