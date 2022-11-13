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

</head>

<body style="background-color: #F8F8F8;">

    <div class="container mt-4"><br><br><br><br>
        <h1>Eventos recientes</h1><br>
        <div>
            <img class="imagen" src="img/dirt.jpg" height="350" width="350">
            <h3>Red Bull Roof Ride</h3>
            <p id="parrafoIndex">Si hay algo en lo que puedes esperar de un evento nuevo de Red Bull, es
                que es poco probable que lo hayas visto en otro lugar.
                Los eventos son únicos, innovadores y, en ocasiones, incluso llevan la
                acción más importante directamente al centro de las ciudades, convirtiendo
                las mundanas calles en un patio de recreo de concreto para una gran cantidad
                de talentos deportivos del máximo nivel.
                <br><b>El próximo 3 de junio celebramos el día Internacional de la Bicicleta</b>
                y para conmemorar la ocasión, hemos recopilado una lista de las obras
                maestras de dos ruedas más empapadas de adrenalina que suceden en el medio
                de las principales ciudades, tanto del pasado como del presente.
                Además para llevar la celebración a lo grande, ese día tendremos un
                lanzamiento exclusivo en nuestro canal de TikTok del más reciente proyecto
                de las Gemelas del BMX Colombiano, Lizsurley y Queensaray Villegas.
                ¡No te lo pierdas!
            </p>
            <div>
            </div>
        </div>
        <br><br><br>
        <div>
            <center>
            <h3>Red Bull Empire of Dirt</h3>
            <img src="img/tubo.jpg" height="50%" width="80%">
            <p id="parrafoIndex"><b>Empire of Dirt</b>, desarrollado por la leyenda del BMX Kye Forte, fue un concurso de slopestyle 
                BMX que se llevó a cabo en 2008 y 2012, con el objetivo de encontrar al rider más completo en 
                las diversas disciplinas de BMX.
                En 2012, se acercaron 20.000 espectadores al Alexandra Palace de Londres para ver a los 32 mejores 
                riders internacionales, incluidos Ryan Nyquist, Mike Clark y un joven Kriss Kyle; afrontar el curso 
                más exigente del evento hasta la fecha.
                Se necesitaron aproximadamente 25.200 toneladas de tierra y un total de 23.192 horas-hombre combinadas 
                para crear el recorrido de 435 m de largo con saltos de estilo motocross y características de gran tamaño, 
                lo que resultó en una pista rápida y desafiante que llevó la progresión del BMX freestyle al siguiente nivel.
                El campeón del 2012 fue el rider británico Ben Wallace, quien lanzó un 360 double downside whip para 
                llevarse el oro por delante de Ryan Nyquist en el segundo lugar y Drew Bezanson en el tercero. Mira los mejores 
                momentos en el video de arriba y revive algunos de los nombres más importantes realizar front-flips, backflips y 
                720s contra el icónico horizonte de Londres en los terrenos de un palacio del siglo XIX.</p>
            </center>
        </div>
        
        <hr>
        
        <br>
        <div>
            <center><h4>Concursos recientes</h4></center>
        </div>
        <?php include('partes/carrusel.php'); ?>
    </div><br>

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