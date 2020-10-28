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
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Staff<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Ticket</a>
                  </li>
              </ul>
      </nav>


  <div class="container">
    <div class="py-5 text-center">

      <h2>Staff Registration</h2>
      <p class="lead">This is the page for the staff registration and data entry.</p>
    </div>

    <div class="row">
      <div class="mx-auto">
        <h4 class="mb-3">Staff Data Collection</h4>
        <?php $db->Store_Record(); ?>
        <form method="post">
          <div class="row">
            <div class="col-md-8 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
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

          <div class="mb-3">
            <label for="mobile">Mobile Number</label>
            <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="" required>
          </div>

            <div class="mb-3">
              <label for="designation">Designation</label>
              <input type="text" class="form-control" id="designation" name="designation" placeholder="Driver/Conductor" required>
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
