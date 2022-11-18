<?php include('partes/cabecera.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="css/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <?php include 'bd/mostrarReciente.php'; ?>

</head>

<body style="background-color: #F8F8F8;">

    <div class="container mt-4"><br><br><br><br>
        <h1>Eventos recientes</h1><br>
        <div>
            <?php

            $resultado = mysqli_query($conexion, $sql);

            while ($mostrar = mysqli_fetch_array($resultado)) { ?>
                <img class="imagen" src="<?php echo $mostrar['imagen_reciente']; ?>" height="350" width="350">
                <h3><?php echo $mostrar['nombre']; ?></h3>
                <p id="parrafoIndex">
                    <?php echo $mostrar['descripcion']; ?>
                </p>
                <div>
                </div>

            <?php

            }
            mysqli_free_result($resultado);
            ?>
        </div>
        <br><br><br>
        <div>
            <?php
            $resultado = mysqli_query($conexion, $sql2);

            while ($mostrar = mysqli_fetch_array($resultado)) { ?>
                <center>
                    <h3>Red Bull Empire of Dirt</h3>
                    <img src="<?php echo $mostrar['imagen_reciente'] ?>" height="50%" width="80%">
                    <p id="parrafoIndex">
                        <?php echo $mostrar['descripcion']; ?>
                    </p>
                </center>
        </div>

    <?php

            }
            mysqli_free_result($resultado);
    ?>

    <hr>

    <br>
    <div>
        <center>
            <h4>Concursos recientes</h4><br>
        </center>
    </div>
    <?php include('partes/carrusel.php'); ?>
    </div><br>
    <?php include 'partes/pie.php'; ?>
</body>

</html>


<style>
    .imagen {
        float: left;
        margin: 5px;
    }

    #parrafoIndex {
        color: gray;
        margin-top: 10px;
    }
</style>