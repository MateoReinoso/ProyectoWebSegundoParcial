<?php
class Connection{
    function getConnection(){
        $enlace = mysqli_connect("database-school-instance.cdphngtxjlc6.us-east-1.rds.amazonaws.com", "admin", "12345678", "dbSchool");   
        if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        echo "<p/>";
        exit;
    }
    return $enlace;
    }
}
?>