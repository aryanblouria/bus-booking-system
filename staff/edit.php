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

      <h2>Staff Updation</h2>
      <p class="lead">This is the page for the staff data updation.</p>
    </div>

    <div class="row">
      <div class="mx-auto">
        <h4 class="mb-3">Staff Data Updation</h4>
        <?php $db->Store_Record(); ?>
        <form method="post">
          <div class="row">
            <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
            <div class="col-md-8 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" required value="<?php echo $data['firstName']; ?>">
            </div>

            <div class="col-md-8 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" required value="<?php echo $data['lastName']; ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="" required value="<?php echo $data['age']; ?>">
          </div>

          <div class="mb-3">
            <label for="mobile">Mobile Number</label>
            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="" required value="<?php echo $data['mobile']; ?>">
          </div>
          
            <div class="mb-3">
              <label for="designation">Designation</label>
              <input type="text" class="form-control" id="designation" name="designation" placeholder="Driver/Conductor" required value="<?php echo $data['designation']; ?>">
            </div>

            <br>
            <hr class="mb-4"><br>

            <!-- <input class="btn btn-primary btn-lg btn-block" type="submit" /> -->
            <button class="btn btn-success btn-lg btn-block" name="btn_update" type="submit"> Update </button>
        </form>
      </div>
    </div>
  </div>


</body>

</html>
