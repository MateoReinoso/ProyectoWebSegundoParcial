<?php
session_start();
if (!isset($_SESSION['DOC'])) {
  header('Location: ../Login/login.php');
}
include '../services/docenteService.php';
$docenteService=new DocenteService();
        $codNivel=$_POST["codNivel"]; 
        if($codNivel!=null){
            $cadenaAlumnos='<label for="sel1">Alumno</label>
            <select class="form-control" id="codAlumno" name="codAlumno">';
            $alumnos= $docenteService->findAllEstudiantes($codNivel);
                if($alumnos->num_rows>0){
                    while($row = $alumnos->fetch_assoc()) {
                        $cadenaAlumnos=$cadenaAlumnos.'<option value='.$row["COD_ALUMNO"].' >'.($row["APELLIDO"]).' '.($row["NOMBRE"]).'</option>';
                    }
                }
                echo $cadenaAlumnos."</select>";
        }
    


?>