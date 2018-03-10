var pageHeaderBurger = document.getElementById('page--header--burger');
var pageMenu = document.getElementById('page--menu');

pageHeaderBurger.addEventListener('click', handleMenuToggle);

function handleMenuToggle() {
  if (pageMenu.style.display == 'none') {
    pageMenu.style.display = '';
  } else {
    pageMenu.style.display = 'none'; 
  }
}
