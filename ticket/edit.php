<?php
    require_once('dbconfig.php');
    $db = new operations();
    $db->update();
    $id = $_GET['U_ID'];
    $result = $db->get_record($id);
    $data = mysqli_fetch_assoc($result);
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

  <div class="container">
    <div class="py-5 text-center">

      <h2>Ticket Registration</h2>
      <p class="lead">This is the page for the ticket data updation.</p>
    </div>

    <div class="row">
      <div class="mx-auto">
        <h4 class="mb-3">Ticket Data Updation</h4>
        <?php $db->Store_Record(); ?>
        <form method="post">
          <div class="row">
            <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
            <input type="hidden" name="passid" value="<?php echo $data['passid']; ?>">

            <div class="col-md-8 mb-3">
              <label for="doj">Date of Journey</label>
              <input type="date" class="form-control" id="doj" name="doj" placeholder="" required value="<?php echo $data['doj']; ?>">
            </div>

            <div class="col-md-8 mb-3">
              <label for="st_time">Start Time</label>
              <input type="time" class="form-control" id="st_time" name="st_time" placeholder="" required value="<?php echo $data['st_time']; ?>">
            </div>

            <div class="col-md-8 mb-3">
              <label for="end_time">End Time</label>
              <input type="time" class="form-control" id="end_time" name="end_time" placeholder="" required value="<?php echo $data['end_time']; ?>">
            </div>

            <div class="col-md-8 mb-3">
              <label for="seats">Number of Seats</label>
              <input type="number" class="form-control" id="seats" name="seats" placeholder="" required value="<?php echo $data['seats']; ?>">
            </div>

            <br>
            <div class="col-md-8 mb-3">

            <!-- <input class="btn btn-primary btn-lg btn-block" type="submit" /> -->
            <button class="btn btn-success btn-lg btn-block" name="btn_update" type="submit"> Update </button>
        </form>
      </div>
    </div>
  </div>


</body>

</html>
