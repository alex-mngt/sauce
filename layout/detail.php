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

  <body id="details">
    <?php
    if ($detect->isMobile()) {
        require_once "../layout/header_mobile_tablet.php";
    } else {
        require_once "../layout/header.php";
    };
    ?>
    <main id="fullpage">
      <section id="seigaha_presentation" class="section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12"   id="trick"style="background-color:purple">
              <div class="bg_picture">
                <picture>
                    <source media="(min-width: 1280px) and (min-resolution: 192dpi)" srcset="../assets/images/home_products/sauce_left/seigaha_desktop-@2x.jpg">
                    <source media="(min-width: 1280px)" srcset="../assets/images/home_products/sauce_left/seigaha_desktop-@1x.jpg">
                    <source media="(min-width: 971px) and (min-resolution: 192dpi)" srcset="../assets/images/home_products/sauce_left/seigaha_desktop-@2x.jpg">
                    <source media="(min-width: 971px)" srcset="../assets/images/home_products/sauce_left/seigaha_desktop-@1x.jpg">
                    <source media="(min-width: 768px) and (min-resolution: 192dpi)" srcset="../assets/images/home_products/sauce_left/seigaha_desktop-@2x.jpg">
                    <source media="(min-width: 768px)" srcset="../assets/images/home_products/sauce_left/seigaha_dektop-@1x.jpg">
                    <img class="block_background_images" src="../assets/images/home_products/sauce_left/seigaha_desktop-@1x.jpg" alt="">
                </picture>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 product_info">
              <h1 class="bold_white">Seigaha</h1>
              <p class="bold_white">Our brand new sauce Seigaha was crreated by the famous chef Seiji Yamamoto. This sauce that we keep the recipe secret has some caramelized and smoky flavours. It's ideal for seasoning fish, pastas or even raw meat.</p>
              <div class="button">
                <p class="button_hover bold_white">Add to cart</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="review_section" class="section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="review">
                <img class="profile_picture" src="../assets/images/profile_picture/girl.png" alt="">
                  <h1 class="bold_white">As sexy as me</h1>
                  <p class="bold_white">As a novice cooker, I wanted to impress some guests with an easy meal. I looked on the internet for a sauce which could be a huge hint and I found this sauce, the seigaha sauce, which looked pretty good. And guess what! It perfectly did the job. This sauce was perfect ! I made some pasta and it did excatly what I was looking for : It enhance the taste without any effort. All my guests were amazed so I only can recommend you this sauce.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="review">
                <img class="profile_picture" src="../assets/images/profile_picture/chef.png" alt="">
                  <h1 class="bold_white">An essential</h1>
                  <p class="bold_white">On my profesion, I have to always be aware of what's new. This times I was looking for a special Japanese sauce to do my next creation. I found the Seigaha sauce on this website and I was not disappointed. This sauce just give the exotic flavour I was looking for to my dish. This is even more wonderful as it can be mix with any meal you want.Trust me, you'll be amazed by what this sauce can do, it's like a big wave of emotion right in your throat</p>
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
                <source media="(min-width: 1280px) and (min-resolution: 192dpi)" srcset="../assets/images/home_community/community_desktop-@2x.jpg">
                <source media="(min-width: 1280px)" srcset="../assets/images/home_community/community_desktop-@1x.jpg">
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
    <?php
    if ($detect->isMobile()) {
        echo "<script src='../assets/js/index_mobile.js'>";
    } elseif ($detect->isTablet()) {
        echo "<script src='../assets/js/index_tablet.js'>";
    } else {
        echo "<script src='../assets/js/index.js'>";
    };
    ?>

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
