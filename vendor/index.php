<?php

  require_once('dbconfig.php');
  $db = new operations();

 ?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Bus Reservation System</title>

  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="navbar-top-fixed.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>
    hr {
      background-color: #fff;
      border-top: 2px dashed #8c8b8b;
    }
  </style>


</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mx-auto">
          <p class="navbar-brand" >Book A Bus</p>
              <ul class="navbar-nav ml-auto mr-5">
                  <li class="nav-item">
                      <a class="nav-link" href="../passenger/index.php">Passenger</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../staff/index.php">Staff</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Vendor<span class="sr-only">(current)</span></a>
                  </li>
              </ul>
      </nav>


  <div class="container">
    <div class="py-5 text-center">

      <h2>Vendor Registration</h2>
      <p class="lead">This is the page for vendor registration and data entry.</p>
    </div>

    <div class="row">
      <div class="mx-auto">
        <h4 class="mb-3">Vendor Data Collection</h4>
        <?php $db->Store_Record(); ?>
        <form method="post">
          <div class="row">
            <div class="col-md-8 mb-3">
              <label for="Name">Vendor Name</label>
              <input type="text" class="form-control" id="Name" name="Name" placeholder="" value="" required>
            </div>
            <div class="col-md-8 mb-3">
              <label for="Email">Vendor Email</label>
              <input type="Email" class="form-control" id="Email" name="Email" placeholder="you@example.com" value="" required>
            </div>
            <div class="col-md-8 mb-3">
              <label for="Mobile">Phone Number</label>
              <input type="tel" class="form-control" id="Mobile" name="Mobile" placeholder="" value="">
            </div>
          </div>

          <br>
          <hr class="mb-4"><br>


            <!-- <input class="btn btn-primary btn-lg btn-block" type="submit" /> -->
            <button class="btn btn-primary btn-lg btn-block" name="btn_save" type="submit"> Submit </button>
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">Bus Reservation System</p>
      <p class="mb-1">Done By </p>
      <ul class="list-inline">
        <li class="list-inline-item">Praneel Jimmy</li>
        <li class="list-inline-item">Aryan Blouria</li>
        <li class="list-inline-item">Samarth Arora</li>
      </ul>
    </footer>
  </div>


</body>

</html>
