<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piezas de bicicleta</title>
    <link rel="stylesheet" href="css/estilos.css?a=1">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="css/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <?php include 'partes/cabecera.php'; ?>
</head>

<body style="background-color: #F8F8F8;">
    <center>
        <div class="contenido_todo_piezas mt-4"><br><br><br>
        
        <?php
        include 'bd/mostrarOfertaBicicleta.php';
            
        $resultado = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($resultado)) { ?>
        
                <div class="contenido_piezas mt-4 col-md-4">
                    <div><a href="especifico_bicicleta.php?id=<?php echo $mostrar['idbicicleta']; ?>"><img src="img/oferta.png" style="position: absolute;" height="60">
                    <img src="<?php echo $mostrar['imagen']; ?>" width="160" height="160"></div></a>
                    <div class="nombre_costo">
                        <p><?php echo $mostrar['nombre']; ?> <br> $<?php echo $mostrar['precio']; ?></p>
                    </div>
                </div>
                <?php

            }
            mysqli_free_result($resultado);
            ?>
        </div>
    </center>
</body><br>
<?php include 'partes/pie.php'; ?>

</html>