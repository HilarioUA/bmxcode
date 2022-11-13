<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="../css/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
<center>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" style="width: 80%; margin-left: 5px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/street.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Concurso de Street</h5>
        <p>Sé el mejor en la calle.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/dirt.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rampas de tierra.</h5>
        <p>Ven y experimenta el terreno.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/rampa.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: black;">Street en rampas del skatepark.</h5>
        <p style="color: black;">Concurso de los X Games.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</center>
</body>
</html>