<?php
include '../services/docenteService.php';
$docenteService=new DocenteService();
        $fecha=$_POST['fecha']; 
        $codNivel=$_POST['selectNivel']; 
        $cadenaAlumnos='<table class="table table-bordered">
        <tr>
            <th scope="col" style="vertical-align: middle;">Código</th>
            <th scope="col" style="vertical-align: middle;">Nombres</th>
            <th scope="col" style="vertical-align: middle;">Estado</th>
        </tr></thead>
        ';
        $alumnos= $docenteService->findAllAlumnosFechaAsist($codNivel,$fecha);
                if($alumnos->num_rows>0){
                    while($row = $alumnos->fetch_assoc()) {
                        if($row["ESTADO"]=='FIN'){
                            $asistencia='Falta Injustificada';
                        }else if($row["ESTADO"]=='FJU'){
                            $asistencia='Falta Justificada';
                        }else if($row["ESTADO"]=='ASI'){
                            $asistencia='Asistencia';
                        }
                        $cadenaAlumnos=$cadenaAlumnos.'
                        <tbody>
                        <tr>
                        <td>POO'.$row["COD_ALUMNO"].'</td>
                        <td> '.($row["APELLIDO"]).' '.$row["NOMBRE"].'</td>
                        <td>'.($asistencia).'</td>
                        ';
                    }
                }
                else{ 
                    $cadenaAlumnos=$cadenaAlumnos.'
                    <tr>
                        <td colspan="3">No hay datos</td>
                    </tr>
                    ';}
        echo $cadenaAlumnos.'</tbody>
        </table>';
       
    


?>