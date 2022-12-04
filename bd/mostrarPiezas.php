<?php
    include "conexion.php";

    $sql = "SELECT * FROM pieza WHERE oferta=0";
    $resultado = mysqli_query($conexion, $sql);
?>
