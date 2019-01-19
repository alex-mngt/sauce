<!DOCTYPE html>
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
    <link href="../assets/vendor/bootstrap-formhelpers.min.css" rel="stylesheet">
    <?php
    if ($detect->isMobile()) {
        echo "<link rel='stylesheet' href='../assets/css/header_mobile_tablet.css'>";
    } else {
        echo "<link rel='stylesheet' href='../assets/css/header.css'>";
    };
    ?>
</head>
<body>
  <?php

  if ($detect->isMobile()) {
      require_once "../layout/header_mobile_tablet.php";
  } else {
      require_once "../layout/header.php";
  };
  ?>
  <main>
    <div class="container-fluid" id="account_container">
     <div class="row justify-content-center align-items-center h-100 m-5">
      <div class="col-lg-8">
      <h2 class="text-center bold_white h2 mt-5 mb-4">My account</h2>

<div id="accordion">
  <div class="card card_account">

  <div class="card card_account" id="headingOne">
      <h5 class="mb-0 bold_white account_panel_h5">
        <button class="btn btn-link account_link" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
        My details
        </button>
      </h5>
    </div>

    <div id="collapse" class="collapse" aria-labelledby="heading" data-parent="#accordion">
      <div class="card-body account_section mt-2 mb-2">
      <form>
  <div class="form-group">
    <label for="InputPassword1">First name :</label>
    <input type="text" class="form-control" id="FirstName" placeholder="Romain">
  </div>
  <div class="form-group">
    <label for="InputPassword1">Last name :</label>
    <input type="text" class="form-control" id="LastName" placeholder="Braccini">
  </div>
 <div class="form-group">
    <label for="InputPassword1">Email address :</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rombraco@studio99.com">
</div>

 <div class="form-group">
    <label for="InputPassword1">Date of birth :</label>
    <div class="bfh-datepicker" data-min="11/07/1999" data-max="today" data-close="false">
</div>
</div>



 <div class="form-group">
    <label for="InputPassword1">Gender :</label>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Girl</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
  <label class="form-check-label" for="inlineRadio2">Guy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
</div>
</div>


</form>
      </div>
    </div>

  <div class="card card_account mt-2" id="headingOne">
      <h5 class="mb-0 mb-0 bold_white account_panel_h5">
        <button class="btn btn-link account_link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Change password
        </button>
      </h5>
    


    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body account_sectio mt-2 mb-2">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Current password :</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

  </div>
  <div class="form-group">
    <label for="InputPassword1">Change password :</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New password">
    <small id="passwordHelp" class="form-text text-muted">Must be 8 or more characters</small>
  </div>
  <button type="submit" class="btn btn-primary">Update password</button>
</form>
      </div>
    </div>
    </div>


  

    <div class="card card_account mt-2" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed account_link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Address book
        </button>
      </h5>
   
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body account_section mt-2 mb-2">
      <form>
  <div class="form-group">
    <label for="InputPassword1">First name :</label>
    <input type="text" class="form-control" id="FirstName" placeholder="Romain">
  </div>
  <div class="form-group">
    <label for="InputPassword1">Last name :</label>
    <input type="text" class="form-control" id="LastName" placeholder="Braccini">
  </div>
 <div class="form-group">
    <label for="InputPassword1">Mobile :</label>
    <input type="text" class="form-control bfh-phone" value="6 58 59 10 03" data-country="FR">
</div>

<div class="form-group">
    <label for="InputPassword1">Country :</label>
    <div class="bfh-selectbox bfh-countries" data-country="FR" data-flags="true">
</div>

<div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="23 rue Ada de Lovelace">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" placeholder="Paris" id="inputCity">
    </div>

 <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control"  placeholder="71000" id="inputZip">
    </div>
    



</div>
</div>

<div class="form-group">
<small id="adressHelp" class="form-text text-muted">This is your default delivery address</small>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      Set as default billing address
      </label>
    </div>
  </div>


  
  <button type="submit" class="btn btn-primary">Update adress</button>
</form>
</div>
      </div>
    </div>
  </div>

</div>
  
    <div class="button">
  <p class="button_hover bold_white">
    Disconnect
  </p>

      </div>

      </div>
</div>

    


    <?php
    require_once "../layout/footer.php"
    ?>

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
  <script src="../assets/vendor/bootstrap-formhelpers.min.js"></script>
</body>
</html>
