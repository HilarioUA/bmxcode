<?php
include "bd/conexion.php";
$id = $_GET['id'];
?>

<?php
$sql = "SELECT * FROM bicicleta WHERE idbicicleta = '$id'";

$resultado = mysqli_query($conexion, $sql);
$mostrarBicicleta = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicicleta <?php echo $mostrarBicicleta['nombre']; ?></title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="css/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #F8F8F8;">
    <nav style="background-color: #FF5757; padding: 10px;">
        <a href="javascript: history.go(-1)" style="text-decoration: none; color: white;">
            <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
                </svg>
            </button>
        </a>
    </nav>
    <div class="container contenedor">
        <img src="<?php echo $mostrarBicicleta['imagen']; ?>" width="500">
        <div class="container informacion">
            <span id="nombre"><?php echo $mostrarBicicleta['nombre']; ?> <span id="precio"> $<?php echo $mostrarBicicleta['precio']; ?></span></span>
        </div>
    </div>

</body>

</html>



<style>
    .contenedor {
        display: flex;
        align-items: center;
        margin-top: 3%;
    }

    #nombre {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 4vmax;
        background-color: black;
        color: white;
        padding: 10px;
    }

    #precio {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 4vmax;
        color: green;
        font-weight: 800;
    }

    #descripcion {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>