$('#navbar > div > div.logo > p').on("click", function() {
  window.location.replace("/sauce/index.php");
});

$('#all_sauces').on("click", function() {
  window.location.replace("/sauce/layout/boutique.php");
});

$('#cart').on("click", function() {
  window.location.replace("/sauce/layout/cart.php");
});

$('#account').on("click", function() {
  window.location.replace("/sauce/layout/compte.php");
});

$('.product_pres_text, #home_seigaha').on("click", function() {
  window.location.replace("/sauce/layout/detail.php");
});