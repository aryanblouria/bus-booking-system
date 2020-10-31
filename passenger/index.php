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
    h1{
      color: #fff;
    }
  </style>


</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mx-auto mb-3">
          <p class="navbar-brand"><h1>Book A Bus</h1></p>
              <ul class="navbar-nav ml-auto mr-5">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Passenger <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../staff/index.php">Staff</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../vendor/index.php">Vendor</a>
                  </li>
              </ul>
      </nav>


  <div class="container">
    <div class="py-5 text-center">

      <h2>Passenger Registration</h2>
      <p class="lead">This is the page for the passenger registration and data entry.</p>
    </div>

    <div class="row">
      <div class="mx-auto">
        <h4 class="mb-3">Passenger Data Collection</h4>
        <?php $db->Store_Record(); ?>
        <form method="post">
          <div class="row">
            <div class="col-md-8 mb-3">
              <label for="ID">Passenger ID</label>
              <input type="text" class="form-control" id="ID" name="ID" placeholder="" value="" required>
            </div>
            <div class="col-md-8 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
            </div>
            <div class="col-md-8 mb-3">
              <label for="middleName">Middle name</label>
              <input type="text" class="form-control" id="middleName" name="middleName" placeholder="" value="">
            </div>
            <div class="col-md-8 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="">
          </div>

          <div class="form-group mb-3">
            <label for="gender">Gender</label>
            <div>
              <label for="male" class="radio-inline">
                <input type="radio" name="gender" value="M" id="male" />
                Male
              </label>
              <br />
              <label for="female" class="radio-inline">
                <input type="radio" name="gender" value="F" id="female" />
                Female
              </label>
              <br />
              <label for="others" class="radio-inline">
                <input type="radio" name="gender" value="o" id="others" />
                Others
              </label>
            </div>
          </div>

            <br>
            <hr class="mb-4"><br>

            <div class="mb-3">
              <label for="mobile">Mobile Number</label>
              <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="">
            </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
            </div>

            <br>
            <hr class="mb-4"><br>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
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
