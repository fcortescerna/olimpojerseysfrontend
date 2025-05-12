document.addEventListener("DOMContentLoaded", () => {
  const botonesAgregar = document.querySelectorAll(".agregar-carrito");

  botonesAgregar.forEach(boton => {
    boton.addEventListener("click", () => {
      const producto = {
        id: boton.dataset.id,
        descripcion: boton.dataset.descripcion,
        precio: boton.dataset.precio,
        imagen: boton.dataset.imagen,
        cantidad: 1
      };

      let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

      const existente = carrito.find(p => p.id === producto.id);
      if (existente) {
        existente.cantidad++;
      } else {
        carrito.push(producto);
      }

      localStorage.setItem("carrito", JSON.stringify(carrito));

      const contador = document.getElementById("carrito-contador");
      if (contador) contador.textContent = carrito.length;
    });
  });
});

