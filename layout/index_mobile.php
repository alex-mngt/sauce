<!DOCTYPE html>

<html lang="en">
  <head>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sauce.</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="author" content="Thibault Walterspieler">
      <meta name="description" content="Sauce web shop">
      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
      <!-- Google-Font -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
          crossorigin="anonymous">
      <!-- fullPageJs -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.min.css">
      <!-- Android color -->
      <meta name="theme-color" content="#000">
      <!-- Style -->
      <link rel="stylesheet" href="./assets/css/style.css">
      <link rel="stylesheet" href="./assets/css/header_mobile_tablet.css">
  </head>

  <body id="home">
    <?php
      require('./layout/header_mobile_tablet.php');
    ?>
    <main id="fullpage">
      <section class="section">
         <!-- Sauce logo -->
        <div class="logo">
          <h1 id="main-logo" class="bold_white">Sauce<strong>.</strong></h1>
        </div>
        <div class="scroll_down">
            <svg class="scrollAnim main_scroll" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 246" style="opacity: 1;">
            <path d="M99.9 207c-23.4 0-42.5-21-42.5-46.6V85.2c0-25.6 19.2-46.6 42.5-46.6 23.4 0 42.5 21 42.5 46.6v75.2c0 25.6-19.1 46.6-42.5 46.6z" fill="none" stroke="white" stroke-width="5" stroke-miterlimit="10"></path>
            <circle fill="white" cx="99.9" cy="89" r="10" stroke="white" stroke-width="5" stroke-miterlimit="10"></circle>
          </svg>
          </div>
        <div id="main_picture">
          <picture>
              <source media="(min-resolution: 192dpi)" srcset="assets/images/home_tomatoes/tomatoes_desktop-@2x.jpg">
              <img class="block_background_images" src="assets/images/home_tomatoes/tomatoes_desktop-@1x.jpg" alt="">
          </picture>
        </div>
      </section>

      <section id="slider1" class="section carousel slide" data-ride="carousel" data-interval="false">
        <div class="wrapper">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#slider1" data-slide-to="0" class="active"></li>
            <li data-target="#slider1" data-slide-to="1"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active seigaha">
              <div class="description">
                <div class="text_container right_aligned_text">
                    <h2 class="home-product-title bold_white">
                      Seigaha
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><style>.st0{fill:#fff}</style><path class="st0" d="M200 0C89.7 0 0 89.7 0 200s89.7 200 200 200 200-89.7 200-200S310.3 0 200 0zm0 373.8c-95.8 0-173.8-78-173.8-173.8S104.2 26.2 200 26.2s173.8 78 173.8 173.8-78 173.8-173.8 173.8z"/><path class="st0" d="M279.5 186.9h-66.4v-66.4c0-7.2-5.9-13.1-13.1-13.1s-13.1 5.9-13.1 13.1v66.4h-66.4c-7.2 0-13.1 5.9-13.1 13.1 0 7.2 5.9 13.1 13.1 13.1h66.4v66.4c0 7.2 5.9 13.1 13.1 13.1 7.2 0 13.1-5.9 13.1-13.1v-66.4h66.4c7.2 0 13.1-5.9 13.1-13.1 0-7.2-5.9-13.1-13.1-13.1z"/>
                      </svg>
                    </h2>
                  <h3 class="home-product-sub">by Seiji Yamamoto</h3>
                  <p class="home-product-info text_white">Our new japanese sauce crafted in collaboration with an extraordinary chief</p>
                </div>
              </div>
              <div class="bg_picture">
                <picture>
                    <source media="(min-resolution: 192dpi)" srcset="assets/images/home_products/sauce_left/seigaha_mobile-@2x.jpg">
                    <img class="block_background_images" src="assets/images/home_products/sauce_left/seigaha_mobile-@1x.jpg" alt="">
                </picture>
              </div>
            </div>
            <div class="carousel-item all_sauces">
              <div class="description">
                <div class="text_container left_aligned_text">
                    <h2 class="home-product-title bold_white" id="all_sauces">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><style>.st0{fill:#fff}</style><path class="st0" d="M200 0C89.7 0 0 89.7 0 200s89.7 200 200 200 200-89.7 200-200S310.3 0 200 0zm0 373.8c-95.8 0-173.8-78-173.8-173.8S104.2 26.2 200 26.2s173.8 78 173.8 173.8-78 173.8-173.8 173.8z"/><path class="st0" d="M279.5 186.9h-66.4v-66.4c0-7.2-5.9-13.1-13.1-13.1s-13.1 5.9-13.1 13.1v66.4h-66.4c-7.2 0-13.1 5.9-13.1 13.1 0 7.2 5.9 13.1 13.1 13.1h66.4v66.4c0 7.2 5.9 13.1 13.1 13.1 7.2 0 13.1-5.9 13.1-13.1v-66.4h66.4c7.2 0 13.1-5.9 13.1-13.1 0-7.2-5.9-13.1-13.1-13.1z"/>
                      </svg>
                      All sauces
                    </h2>
                  <h3 class="home-product-sub  ">Exceptional savours</h3>
                  <p class="home-product-info text_white">A gastronomic trip around the world</p>
                </div>
              </div>
              <div class="bg_picture">
                <picture>
                    <source media="(min-resolution: 192dpi)" srcset="assets/images/home_products/spoon_left/poudre_mobile-@2x.jpg">
                    <img class="block_background_images" src="assets/images/home_products/spoon_left/poudre_mobile-@1x.jpg" alt="">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="slider2" class="section carousel slide" data-ride="carousel" data-interval="false">
        <div class="wrapper">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#slider2" data-slide-to="0" class="active"></li>
            <li data-target="#slider2" data-slide-to="1"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active seigaha">
              <div class="description">
                <div class="text_container right_aligned_text">
                  <h2 class="home-product-title bold_white">Products</h2>
                  <h3 class="home-product-sub">of exception</h3>
                  <p class="home-product-info text_white">The finest chefs have trusted us and use our sauces to
                  titillate the taste buds of their  guests</p>
                </div>
              </div>
              <div class="bg_picture">
                <picture>
                    <source media="(min-resolution: 192dpi)" srcset="assets/images/home_products/chef_left/chef_mobile-@2x.jpg">
                    <img class="block_background_images" src="assets/images/home_products/chef_left/chef_mobile-@1x.jpg" alt="">
                </picture>
              </div>
            </div>
            <div class="carousel-item all_sauces">
              <div class="description">
                <div class="text_container left_aligned_text">
                  <h2 class="home-product-title bold_white">Made in Berlin</h2>
                  <h3 class="home-product-sub">Made for diversity</h3>
                  <p class="home-product-info text_white">A multicultural city for multicultural sauces</p>
                </div>
              </div>
              <div class="bg_picture">
                <picture>
                    <source media="(min-resolution: 192dpi)" srcset="assets/images/home_products/berlin_left/berlin_mobile-@2x.jpg">
                    <img class="block_background_images" src="assets/images/home_products/berlin_left/berlin_mobile-@1x.jpg" alt="">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="wrapper">
          <div class="description">
            <div class="text_container left_aligned_text">
              <h2 class="home-product-title community_text bold_white">Join our community</h2>
              <h3 class="community_text text_white">Find all our best recipes online</h3>
              <div id="community_svg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><style>.st0{fill:#fff}</style><path class="st0" d="M200 0C89.7 0 0 89.7 0 200s89.7 200 200 200 200-89.7 200-200S310.3 0 200 0zm0 373.8c-95.8 0-173.8-78-173.8-173.8S104.2 26.2 200 26.2s173.8 78 173.8 173.8-78 173.8-173.8 173.8z"/><path class="st0" d="M279.5 186.9h-66.4v-66.4c0-7.2-5.9-13.1-13.1-13.1s-13.1 5.9-13.1 13.1v66.4h-66.4c-7.2 0-13.1 5.9-13.1 13.1 0 7.2 5.9 13.1 13.1 13.1h66.4v66.4c0 7.2 5.9 13.1 13.1 13.1 7.2 0 13.1-5.9 13.1-13.1v-66.4h66.4c7.2 0 13.1-5.9 13.1-13.1 0-7.2-5.9-13.1-13.1-13.1z"/>
                </svg>
              </div>
            </div>
          </div>
          <div id="community_picture">
            <picture>
                <source media="(min-resolution: 192dpi)" srcset="assets/images/home_community/community_mobile-@2x.jpg">
                <img class="block_background_images" src="assets/images/home_community/community_mobile-@1x.jpg" alt="">
            </picture>
          </div>
        </div>
      </section>
      <?php
      require_once "./layout/footer.php"
      ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src='./assets/js/index_mobile.js'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.extensions.min.js"></script>
    <script>
        new fullpage('#fullpage', {
            //options here
            licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
            autoScrolling: true,
            verticalCentered: false,
            fixedElements: '#navbar'
        });
    </script>
    <!-- adding swipe suppoprt for Bootstrap 4 carousel -->
    <script>
    // Thanks to Maaaaark - https://github.com/maaaaark/bcSwipe/blob/master/jquery.bcSwipe.min.js
      !function(t){t.fn.bcSwipe=function(e){var n={threshold:50};return e&&t.extend(n,e),this.each(function(){function e(t){1==t.touches.length&&(u=t.touches[0].pageX,c=!0,this.addEventListener("touchmove",o,!1))}function o(e){if(c){var o=e.touches[0].pageX,i=u-o;Math.abs(i)>=n.threshold&&(h(),t(this).carousel(i>0?"next":"prev"))}}function h(){this.removeEventListener("touchmove",o),u=null,c=!1}var u,c=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",e,!1)}),this}}(jQuery);

      // Swipe functions for Bootstrap Carousel
      $('.carousel').bcSwipe({ threshold: 50 });
    </script>
  </body>

</html>
