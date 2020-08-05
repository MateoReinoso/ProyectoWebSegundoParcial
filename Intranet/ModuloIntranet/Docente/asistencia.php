<?php
session_start();
if (!isset($_SESSION['DOC'])) {
  header('Location: ../Login/login.php');
}
include '../services/docenteService.php';
$docenteService=new DocenteService();
$codperiodo=$_POST['codperiodo'];
    //MUESTRA SELECT CON NIVELES DEL PERIODO
    //if($codperiodo!=null){
    $cadena='';
    $nivel=$docenteService->findAllNivelesDocente($codperiodo,$_SESSION['DOC']['COD_PERSONA']);
        if($nivel->num_rows>0){
            while($row = $nivel->fetch_assoc()) {
                $cadena=$cadena.'<option value='.$row["COD_NIVEL_EDUCATIVO"].' >'.utf8_encode($row["NOMBRE_NIVEL"]).' '.utf8_encode($row["NIVEL"]).'</option>';
            }
        }
        echo $cadena//}
    


?>