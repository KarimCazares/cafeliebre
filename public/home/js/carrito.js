// Intenta cargar los elementos del carrito desde localStorage
const storedCartItems = localStorage.getItem("cartItems");
const cartItems = storedCartItems ? JSON.parse(storedCartItems) : [];

// Agrega un producto al carrito
function addToCart(productName, price) {
  cartItems.push({ name: productName, price: price });
  updateCart();
  alert(`${productName} ha sido añadido al carrito.`);
  
  // Guarda los elementos del carrito en localStorage
  localStorage.setItem("cartItems", JSON.stringify(cartItems));
}

// Actualiza el contador y muestra los detalles del carrito
function updateCart() {
  const cartCountElement = document.getElementById("cartCount");
  const cartDetailsElement = document.getElementById("cartDetails");
  const cartItemListElement = document.getElementById("cartItemList");
  const cartTotalElement = document.getElementById("cartTotal");

  // Actualiza el contador
  cartCountElement.textContent = `(${cartItems.length})`;

  // Muestra los detalles del carrito
  cartItemListElement.innerHTML = "";
  let total = 0;
  cartItems.forEach((item) => {
    const listItem = document.createElement("li");
    listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
    cartItemListElement.appendChild(listItem);
    total += item.price;
  });

  // Actualiza el total
  cartTotalElement.textContent = total.toFixed(2);

  // Muestra el contenedor del carrito
  cartDetailsElement.style.display = "block";
}

// Muestra los detalles del carrito al hacer clic en el icono del carrito
function showCartDetails() {
  updateCart();
}

// Redirecciona a la página de carrito.html
function openCartPage() {
  window.location.href = 'carrito.html';
}

// Función para vaciar el carrito
function clearCart() {
  cartItems.length = 0; // Limpia el array
  updateCart();
  // Limpia también los elementos guardados en localStorage
  localStorage.removeItem("cartItems");
}