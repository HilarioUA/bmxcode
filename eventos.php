<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="css/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <?php include "bd/mostrarNoticias.php"; ?>
</head>

<body style="background-color: #F8F8F8;">
    <?php include 'partes/cabecera.php'; ?>

    <?php
    $resultado = mysqli_query($conexion, $sqlTodo);

    while ($mostrar = mysqli_fetch_array($resultado)) { ?>
        <div class="mt-5">
            <div class="mt-5">
                <div class="carousel-inner">
                    <img src="<?php echo $mostrar['imagen']; ?>" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $mostrar['nombre_noticia']; ?></h5>
                        <p><?php echo $mostrar['descripcion']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</body>
<?php include 'partes/pie.php'; ?>

</html>