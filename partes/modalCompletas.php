<link rel="stylesheet" href="css/estilos.css?a=4">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="css/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <?php
            include '../bd/mostrarBicicleta.php';

            $resultado = mysqli_query($conexion, $sqlTodo);

            while ($mostrar = mysqli_fetch_array($resultado)) { ?>

                <div class="contenido_piezas mt-4 col-md-4">
                    <a href="partes/modalCompletas.php"><img src="<?php echo $mostrar['imagen']; ?>" width="160" height="160"></a>
                    
                    <div class="nombre_costo">
                        <p><?php echo $mostrar['nombre']; ?> <br> $<?php echo $mostrar['precio']; ?></p>
                    </div>
                </div>
            <?php

            }
            mysqli_free_result($resultado);
            ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>