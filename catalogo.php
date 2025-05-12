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
  <title>Catálogo</title>
  <link rel="stylesheet" href="./css/stylesheet.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="./js/catalogo.js"></script>
  <script src="./js/contadorCarrito.js"></script>
</head>
<body>
<section id="catalogo" class="container-fluid mt-4">
  <h2 class="text-center mt-5">Productos</h2>
  <div class="row">
    <?php foreach ($productos as $producto): ?>
      <div class="col-md-4 mt-4">
        <div class="card h-100">
          <img 
            src="./assets/<?php echo htmlspecialchars($producto['imagen']); ?>" 
            class="card-img-top" 
            alt="<?php echo htmlspecialchars($producto['descripcion']); ?>"
          >
          <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($producto['descripcion']); ?></h5>
            <p class="card-text">$<?php echo htmlspecialchars($producto['precio']); ?> MXN</p>
            <?php if ($producto['existencia'] > 0): ?>
              <p>Stock: <?php echo $producto['existencia']; ?> disponibles</p>
            <?php else: ?>
              <p class="text-danger">Agotado</p>
            <?php endif; ?>
            <button 
            class="btn btn-primary agregar-carrito" 
            data-id="<?php echo $producto['_id']; ?>"
            data-descripcion="<?php echo htmlspecialchars($producto['descripcion']); ?>"
            data-precio="<?php echo $producto['precio']; ?>"
            data-imagen="<?php echo $producto['imagen']; ?>"
            >
            Agregar al carrito
          </button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<footer class="bg-dark text-white text-center py-3 mt-3">
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

