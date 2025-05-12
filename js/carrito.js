document.addEventListener("DOMContentLoaded", () => {
  let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
  const contenedor = document.getElementById("productos-carrito");

  if (!contenedor) return;

  if (carrito.length === 0) {
    contenedor.innerHTML = "<p>No hay productos en el carrito.</p>";
    return;
  }

  carrito.forEach((producto, index) => {
    const div = document.createElement("div");
    div.className = "card mb-3";
    div.innerHTML = `
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./assets/${producto.imagen}" class="img-fluid rounded-start" alt="${producto.descripcion}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">${producto.descripcion}</h5>
            <p class="card-text">Precio: $${producto.precio}</p>
            <p class="card-text">Cantidad: ${producto.cantidad}</p>
            <button class="btn btn-danger btn-sm eliminar-producto" data-index="${index}">Eliminar</button>
          </div>
        </div>
      </div>
    `;
    contenedor.appendChild(div);
  });

  // Manejador para eliminar productos
  contenedor.addEventListener("click", (e) => {
    if (e.target.classList.contains("eliminar-producto")) {
      const index = e.target.getAttribute("data-index");
      carrito.splice(index, 1);
      localStorage.setItem("carrito", JSON.stringify(carrito));
      location.reload(); // recarga la página para reflejar el cambio
    }
  });
});

