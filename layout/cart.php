<!DOCTYPE html>
<html>
<?php
require_once "../assets/vendor/Mobile_Detect.php";

$detect = new Mobile_Detect;
?>
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sauce.</title>
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <meta name="author" content="Thibault Walterspieler">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- Google-Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <!-- fullPageJs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.min.css">
    <!-- Android color -->
    <meta name="theme-color" content="#000">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php
    if ($detect->isMobile()) {
        echo "<link rel='stylesheet' href='../assets/css/header_mobile_tablet.css'>";
    } else {
        echo "<link rel='stylesheet' href='../assets/css/header.css'>";
    };
    ?>
</head>
<body id="cart_page">
  <?php

  if ($detect->isMobile()) {
      require_once "../layout/header_mobile_tablet.php";
  } else {
      require_once "../layout/header.php";
  };
  ?>

  <main>
    <div class="container-fluid">
     <div class="row justify-content-center align-items-center h-100 mt-5">
      <div class="col-lg-8">
      <h2 class="text-center mt-3 bold_white">My cart</h2>
    <table class="table cart_table borderless">
<tbody>
    <tr>
      <td class="cart_image_td"><img class="cart_image rounded-circle" src="../assets/images/cart_products/cart_krokos.jpg"></td>
      <td class="cart_quantity_td bold_black">2x</td>
      <td class="cart_name_td bold_black">Krókos<br>#122304</td>
      <td class="cart_price_td bold_black">16$</td>
    </tr>
    <tr>
      <td class="cart_image_td bold_black"><img class="cart_image rounded-circle" src="../assets/images/cart_products/cart_seigaha.jpg"></td>
      <td class="cart_quantity_td bold_black">1x</td>
      <td class="cart_name_td bold_black">Seigaha<br>#122S23</td>
      <td class="cart_price_td bold_black">8$</td>
    </tr>
</table>
<table class="table cart_table borderless">
    <tr class="cart_subtotal_tr">
      <td class="bold_black">Subtotal :</td>
      <td></td>
      <td></td>
      <td class="cart_price_td bold_black">24$</td>
    </tr>
    <tr class="cart_delivery_tr">

      <td class="bold_black">Delivery fee :</td>
      <td></td>
      <td></td>
      <td class="cart_price_td bold_black">3$</td>
    </tr>
    <tr class="cart_total_tr">
      <td class="bold_black">Order total :</td>
      <td></td>
      <td></td>
      <td class="cart_price_td bold_black"><strong>27$</strong></td>
    </tr>
  </tbody>
</table>
<div class="button">
  <p class="button_hover bold_white">
    Proceed to checkout
  </p>
</button>
      </div>
     </div>
    </div>


  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
  <?php
  if ($detect->isMobile()) {
      echo "<script src='../assets/js/index_mobile.js'></script>";
  } else {
      echo "<script src='../assets/js/index.js'></script>";
  };
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.extensions.min.js"></script>

</body>
</html>
