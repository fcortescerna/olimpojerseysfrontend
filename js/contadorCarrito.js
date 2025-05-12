document.addEventListener("DOMContentLoaded", () => {
  const carrito = JSON.parse(localStorage.getItem("carrito")) || [];
  const totalItems = carrito.reduce((total, item) => total + item.cantidad, 0);
  const contador = document.getElementById("carrito-contador");

  if (contador) {
    contador.textContent = totalItems;
  }
});
