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
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mx-auto">
          <p class="navbar-brand"><h1>Book A Bus</h1></p>
      </nav>


  <div class="container">
    <div class="py-5 text-center">

      <h2>Ticket Booking</h2>
      <p class="lead">This is the page for ticket booking and data entry.</p>
    </div>

    <div class="row">
      <div class="mx-auto">
        <h4 class="mb-3">Ticket Data Collection</h4>
        <?php $db->Store_Record(); ?>
        <form method="post">
          <div class="row">
            <div class="col-md-8 mb-3">
              <label for="ticketid">Ticket ID</label>
              <input type="text" class="form-control" id="ID" name="ID" placeholder="" value="" required>
            </div>
            <div class="col-md-8 mb-3">
              <label for="passid">Passenger ID</label>
              <input type="text" class="form-control" id="passid" name="passid" placeholder="" value="">
            </div>
            <div class="col-md-8 mb-3">
              <label for="doj">Date of Journey</label>
              <input type="date" class="form-control" id="doj" name="doj" placeholder="" value="" required>
            </div>
            <div class="col-md-8 mb-3">
              <label for="st_time">Start Time</label>
              <input type="time" class="form-control" id="st_time" name="st_time" placeholder="" value="">
            </div>
            <div class="col-md-8 mb-3">
              <label for="end_time">End Time</label>
              <input type="time" class="form-control" id="end_time" name="end_time" placeholder="" value="">
            </div>
            <div class="col-md-8 mb-3">
              <label for="seats">Number of Seats</label>
              <input type="number" class="form-control" id="seats" name="seats" placeholder="" value="">
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
