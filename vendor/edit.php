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

      <h2>Vendor Registration</h2>
      <p class="lead">This is the page for the vendor data updation.</p>
    </div>

    <div class="row">
      <div class="mx-auto">
        <h4 class="mb-3">Vendor Data Updation</h4>
        <?php $db->Store_Record(); ?>
        <form method="post">
          <div class="row">
            <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
            <div class="col-md-8 mb-3">
              <label for="Name">Name</label>
              <input type="text" class="form-control" id="Name" name="Name" placeholder="" required value="<?php echo $data['Name']; ?>">
            </div>

            <div class="mb-3">
              <label for="Email">Email</label>
              <input type="Email" class="form-control" id="Email" name="Email" placeholder="you@example.com" required value="<?php echo $data['Email']; ?>">
            </div>

            <div class="mb-3">
              <label for="Mobile">Mobile Number</label>
              <input type="number" class="form-control" id="Mobile" name="Mobile" placeholder="" required value="<?php echo $data['Mobile']; ?>">
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
