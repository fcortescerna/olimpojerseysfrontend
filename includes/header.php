<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/Olimpo.jpg" type="image/x-icon">
    <title>Olimpo Jerseys</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav>
        <style>
        .sticky-navbar { position: sticky; top: 0; z-index: 1000; }
        .marquee { white-space: nowrap; overflow: hidden; display: block; }
        .marquee span { display: inline-block; animation: marquee 10s linear infinite; }
        @keyframes marquee { from { transform: translateX(100%); } to { transform: translateX(-100%); } }
        .centrado { display: flex; justify-content: center; }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-navbar">
        <div class="container-fluid mx-2">
            <img src="./assets/Olimpo.jpg" alt="Olimpo" height="55">
            <a class="navbar-brand mx-4" href="./index.php"> <h2>Olimpo Jerseys</h2> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="./catalogo.php">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contact.html">Contacto</a></li>
                    <a href="carrito.php" class="nav-link"> 🛒 Carrito (<span id="carrito-contador">0</span>)</a>

                </ul>
            </div>
        </div>
    </nav>

    <header class="hero bg-secondary text-white text-center py-5" class="header">
        <h1>Olimpo Jerseys</h1>
        <div class="marquee mt-4"><span> ¡Ropa deportiva a un precio accesible!¡Nueva coleccion proximamente! ¡Ofertas exclusivas! ¡Compra ahora! ¡Envío gratis Nacional!  </span></div>
        <img src="./assets/marcas.png" class="d-block w-100 mt-3" class="img-fluid rounded" alt="Marcas" height="600">
    </header>
</nav>
