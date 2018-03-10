var burger = document.getElementById("header--burger");
var menu = document.getElementById("menu");

burger.addEventListener('click', handleMenuToggle);

function handleMenuToggle() {
  if (menu.style.display == "none") {
    menu.style.display = "";
  } else {
    menu.style.display = "none"; 
  }
}
