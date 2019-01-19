<!DOCTYPE html>

<html lang="en">
  <?php
  require_once "../assets/vendor/Mobile_Detect.php";

  $detect = new Mobile_Detect;
  ?>

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
      <link rel="stylesheet" href="../assets/css/style.css">
      <?php
      if ($detect->isMobile()) {
          echo "<link rel='stylesheet' href='../assets/css/header_mobile_tablet.css'>";
      } else {
          echo "<link rel='stylesheet' href='../assets/css/header.css'>";
      };
      ?>
  </head>

  <body id="product_page">
    <?php
      if ($detect->isMobile()) {
          require_once "../layout/header_mobile_tablet.php";
      } else {
          require_once "../layout/header.php";
      };
    ?>
    <main id="fullpage">
      <section class="section">
        <div id="product_first">
          <div class="product_pres">
            <h1 class="bold_white">Products</h1>
            <h2>Discover our four delicious hand-crafted sauces</h2>
          </div>
          <div class="scroll_down">
            <svg class="scrollAnim" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 246" style="opacity: 1;">
            <path d="M99.9 207c-23.4 0-42.5-21-42.5-46.6V85.2c0-25.6 19.2-46.6 42.5-46.6 23.4 0 42.5 21 42.5 46.6v75.2c0 25.6-19.1 46.6-42.5 46.6z" fill="none" stroke="white" stroke-width="5" stroke-miterlimit="10"></path>
            <circle fill="white" cx="99.9" cy="89" r="10" stroke="white" stroke-width="5" stroke-miterlimit="10"></circle>
          </svg>
          </div>
        </div>
      </section>

      <section id="home_first" class="section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6" style="background-color:blue">
              <div class="product_text">
                <h1 class="bold_white">Seigaha</h1>
                <p class="bold_white">by Seiji Yamamoto</p>
              </div>
              <div class="bg_picture">
                <picture>
                    <source media="(min-width: 1024px) and (min-resolution: 192dpi)" srcset="../assets/images/home_products/sauce_left/seigaha_desktop-@2x.jpg">
                    <source media="(min-width: 1024px)" srcset="../assets/images/home_products/sauce_left/seigaha_desktop-@1x.jpg">
                    <source media="(min-width: 971px) and (min-resolution: 192dpi)" srcset="../assets/images/home_products/sauce_left/seigaha_desktop-@2x.jpg">
                    <source media="(min-width: 971px)" srcset="../assets/images/home_products/sauce_left/seigaha_desktop-@1x.jpg">
                    <source media="(min-width: 768px) and (min-resolution: 192dpi)" srcset="../assets/images/home_products/sauce_left/seigaha_tablet-@2x.jpg">
                    <source media="(min-width: 768px)" srcset="../assets/images/home_products/sauce_left/seigaha_tablet-@1x.jpg">
                    <img class="block_background_images" src="../assets/images/home_products/sauce_left/seigaha_desktop-@1x.jpg" alt="">
                </picture>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" style="background-color:purple">
              <div class="product_text">
                <h1 class="bold_white">Secret Sauce</h1>
                <p class="bold_white">Fesh & Creamy Sauce</p>
              </div>
              <div class="bg_picture">
                <picture>
                    <source media="(min-width: 1024px) and (min-resolution: 192dpi)" srcset="../assets/images/product_secret/secret_desktop-@2x.jpg">
                    <source media="(min-width: 1024px)" srcset="../assets/images/product_secret/secret_desktop-@1x.jpg">
                    <source media="(min-width: 971px) and (min-resolution: 192dpi)" srcset="../assets/images/product_secret/secret_tablet-@2x.jpg">
                    <source media="(min-width: 971px)" srcset="../assets/images/product_secret/secret_tablet-@1x.jpg">
                    <source media="(min-width: 768px) and (min-resolution: 192dpi)" srcset="../assets/images/product_secret/secret_tablet-@2x.jpg">
                    <source media="(min-width: 768px)" srcset="../assets/images/product_secret/secret_tablet-@1x.jpg">
                    <img class="block_background_images" src="../assets/images/hproduct_secret/secret_desktop-@1x.jpg" alt="">
                </picture>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6" style="background-color:pink">
              <div class="product_text">
                <h1 class="bold_white">Chambord Sauce</h1>
                <p class="bold_white">La touche Francaise</p>
              </div>
              <div class="bg_picture">
                <picture>
                    <source media="(min-width: 1024px) and (min-resolution: 192dpi)" srcset="../assets/images/product_chambord/chambord_desktop-@2x.jpg">
                    <source media="(min-width: 1024px)" srcset="../assets/images/product_chambord/chambord_desktop-@1x.jpg">
                    <source media="(min-width: 971px) and (min-resolution: 192dpi)" srcset="../assets/images/product_chambord/chambord_tablet-@2x.jpg">
                    <source media="(min-width: 971px)" srcset="../assets/images/product_chambord/chambord_tablet-@1x.jpg">
                    <source media="(min-width: 768px) and (min-resolution: 192dpi)" srcset="../assets/images/product_chambord/chambord_tablet-@2x.jpg">
                    <source media="(min-width: 768px)" srcset="../assets/images/product_chambord/chambord_tablet-@1x.jpg">
                <source media="(max-width: 767px)" srcset="../assets/images/home_products/spoon_left/poudre_mobile-@1x.jpg">
                    <img class="block_background_images" src="../assets/images/product_chambord/chambord_desktop-@1x.jpg" alt="">
                </picture>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" style="background-color:red">
              <div class="product_text">
                <h1 class="bold_white">Krókos</h1>
                <p class="bold_white">Tomatoes & Saffron Sauce</p>
              </div>
              <div class="bg_picture">
                <picture>
                    <source media="(min-width: 1024px) and (min-resolution: 192dpi)" srcset="../assets/images/home_tomatoes/tomatoes_desktop-@2x.jpg">
                    <source media="(min-width: 1024px)" srcset="../assets/images/home_tomatoes/tomatoes_desktop-@1x.jpg">
                    <source media="(min-width: 971px) and (min-resolution: 192dpi)" srcset="../assets/images/home_tomatoes/tomatoes_desktop-@2x.jpg">
                    <source media="(min-width: 971px)" srcset="../assets/images/home_tomatoes/tomatoes_desktop-@1x.jpg">
                    <source media="(min-width: 768px) and (min-resolution: 192dpi)" srcset="../assets/images/home_tomatoes/tomatoes_tablet-@2x.jpg">
                    <source media="(min-width: 768px)" srcset="../assets/images/home_tomatoes/tomatoes_tablet-@1x.jpg">
                    <img id="tomatoes" class="block_background_images" src="../assets/images/home_tomatoes/tomatoes_desktop-@1x.jpg" alt="">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="home_third" class="section">
        <div class="wrapper">
          <div class="description">
            <div class="text_container left_aligned_text">
              <h2 class="home-product-title community_text bold_white">Join us on social medias</h2>
              <h3 class="home-product-info community_text text_white">Find all our best recipes online</h3>
              <div id="community_svg">
                <svg class="svg_cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><style>.st0{fill:#fff}</style><path class="st0" d="M200 0C89.7 0 0 89.7 0 200s89.7 200 200 200 200-89.7 200-200S310.3 0 200 0zm0 373.8c-95.8 0-173.8-78-173.8-173.8S104.2 26.2 200 26.2s173.8 78 173.8 173.8-78 173.8-173.8 173.8z"/><path id="community_path" class="st0" d="M279.5 186.9h-66.4v-66.4c0-7.2-5.9-13.1-13.1-13.1s-13.1 5.9-13.1 13.1v66.4h-66.4c-7.2 0-13.1 5.9-13.1 13.1 0 7.2 5.9 13.1 13.1 13.1h66.4v66.4c0 7.2 5.9 13.1 13.1 13.1 7.2 0 13.1-5.9 13.1-13.1v-66.4h66.4c7.2 0 13.1-5.9 13.1-13.1 0-7.2-5.9-13.1-13.1-13.1z"/>
                </svg>
              </div>
            </div>
          </div>
          <div id="community_picture">
            <picture>
                <source media="(min-width: 1024px) and (min-resolution: 192dpi)" srcset="../assets/images/home_community/community_desktop-@2x.jpg">
                <source media="(min-width: 1024px)" srcset="../assets/images/home_community/community_desktop-@1x.jpg">
                <source media="(min-width: 971px) and (min-resolution: 192dpi)" srcset="../assets/images/home_community/community_desktop-@2x.jpg">
                <source media="(min-width: 971px)" srcset="../assets/images/home_community/community_desktop-@1x.jpg">
                <source media="(min-width: 768px) and (min-resolution: 192dpi)" srcset="../assets/images/home_community/community_tablet-@2x.jpg">
                <source media="(min-width: 768px)" srcset="../assets/images/home_community/community_tablet-@1x.jpg">
                <img class="block_background_images" src="../assets/images/home_products/party_right/party_desktop-@1x.jpg" alt="">
            </picture>
          </div>
        </div>
      </section>
      <?php
      require_once "../layout/footer.php"
      ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="../assets/js/index.js"></script>
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

  </body>

</html>
