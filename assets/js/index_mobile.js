$('#navbar > div > h1').on("click", function() {
  window.location.replace("/sauce/index.php");
});

$('#all_sauces').on("click", function() {
  window.location.replace("/sauce/layout/boutique_mobile.php");
});

$('#cart').on("click", function() {
  window.location.replace("/sauce/layout/cart.php");
});

$('#account').on("click", function() {
  window.location.replace("/sauce/layout/compte.php");
});

$('.product_pres_text').on("click", function() {
  window.location.replace("/sauce/layout/detail.php");
});