<?php
require("db.php");
$prove = mysqli_real_escape_string($conn, $_POST["idproovedor"]);
$query = 'SELECT * FROM EDIFICIO WHERE COD_SEDE = "'.$prove.'"';
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))
{
    echo '<option value="' .$row["COD_EDIFICIO"]. '">' .$row["NOMBRE"]. '</option>';
}
?>
