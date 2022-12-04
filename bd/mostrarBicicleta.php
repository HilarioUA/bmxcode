<?php
    include "conexion.php";

    $sql = "SELECT * FROM bicicleta WHERE oferta=0";
    $resultado = mysqli_query($conexion, $sql);
    
?>  