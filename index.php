<?php
$url = "https://olimpojerseysbackend.onrender.com/api/productos";
$response = file_get_contents($url);
$data = json_decode($response, true);
$productos = $data['productos'];
include("includes/header.php");
include("includes/footer.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Olimpo Jerseys - Catálogo</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/catalogo.js"></script>
    <script src="./js/contadorCarrito.js"></script>
</head>
<body>
    <section id="catalogo">
        <header class="text-white text-center py-4">
            <h1>Catálogo de Productos</h1>
        </header>
        <div class="container mt-5">
            <div class="row">
                <?php foreach ($productos as $producto): ?>
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body">                
                                <h5 class="card-title"><?php echo $producto["descripcion"]; ?></h5>
                                <p class="card-text"><strong>Marca:</strong> <?php echo $producto["marca"]; ?></p>
                                <p class="card-text"><strong>Precio:</strong> $<?php echo $producto["precio"]; ?></p>
                                <p class="card-text">
                                    <strong>Disponibilidad:</strong>
                                    <?php echo ($producto["existencia"] > 0) ? $producto["existencia"] . " disponibles" : "Agotado"; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>
    

<footer class="bg-dark text-white text-center py-3">
    <p><strong>Telefono: </strong> +52 56 4450 2128</p>
    <div>
        <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white mx-2"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-white mx-2"><i class="bi bi-twitter"></i></a>
    </div>
    <p class="my-3"><a href="./contact.html"> Contáctanos</a></p>
          <div id="test" class="row align-items-center">
            <div class="container-fluid">
                <h2>Quienes Somos</h2>
                <p>Olimpo Jerseys se creo con la idea de ofrecer ropa deportiva de buena calidad a precios accesibles. Lamentablemente en el mercado de hoy en dia esto es algo muy dificil de encontrar. Nos esforzamos por ofrecer las mejores marcas a nuestros clientes fanaticos del deporte.</p>
                <p>Nos pone felices ser una tienda confiable y accesible con productos originales y una atención al cliente excelente.</p>
            </div>
        </div>
            <h2 class="mb-4">¿Por qué Olimpo Jerseys?</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Calidad Excelente</h4>
                    <p>Nos aseguramos que los materiales sean de buena calidad y que los productos sean oficiales.</p>
                </div>
                <div class="col-md-4">
                    <h4>Envío Rápido</h4>
                    <p>Aseguramos que las entregas serán rápidas y seguras.</p>
                </div>
                <div class="col-md-4">
                    <h4>Atención Personalizada</h4>
                    <p>Siempre estamos disponibles para resolver dudas y ofrecer la mejor experiencia al cliente.</p>
                </div>
            </div>
        </div>
    <p class="mt-3">&copy; 2025 Olimpo Jerseys. Todos los derechos reservados.</p>
</footer>
</body>
</html>





