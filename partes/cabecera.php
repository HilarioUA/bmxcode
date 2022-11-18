<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="./css/estilos.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="./index.php"><img src="./img/BMXCODE.png" height="100" width="100"></a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name">BMXCODE</span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links">
                    <li>
                        <a href="#">Tienda</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="./tienda_piezas.php">Piezas</a></li>
                            <li><a href="./tienda_completas.php">Completas</a></li>
                                <ul class="more-sub-menu sub-menu">
                                    <li><a href="#">Neumorphism</a></li>
                                    <li><a href="#">Pre-loader</a></li>
                                    <li><a href="#">Glassmorphism</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Ofertas</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="./oferta_por_piezas.php">Por piezas</a></li>
                            <li><a href="./oferta_completas.php">Completas</a></li>
                        </ul>
                    </li>
                    <li><a href="./eventos.php">Eventos</a></li>
                    <li><a href="./quienes_somos.php">¿Quiénes somos?</a></li>
                </ul>
            </div>
            <div class="search-box">
                <i class='bx bx-search'></i>
                <div class="input-box">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
        </div>
    </nav>
    <script src="componentes/script.js"></script>
</body>

</html>