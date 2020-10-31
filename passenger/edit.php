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

      <h2>Passenger Registration</h2>
      <p class="lead">This is the page for the passenger data updation.</p>
    </div>

    <div class="row">
      <div class="mx-auto">
        <h4 class="mb-3">Passenger Data Updation</h4>
        <?php $db->Store_Record(); ?>
        <form method="post">
          <div class="row">
            <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
            <div class="col-md-8 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" required value="<?php echo $data['firstName']; ?>">
            </div>
            <div class="col-md-8 mb-3">
              <label for="middleName">Middle name</label>
              <input type="text" class="form-control" id="middleName" name="middleName" placeholder=""  value="<?php echo $data['middleName']; ?>">
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

          <div class="form-group mb-3">
            <label for="gender">Gender</label>
            <div>
              <label for="male" class="radio-inline">
                <input type="radio" name="gender" value="M" id="male" required value="<?php echo $data['gender']; ?>"/>
                Male
              </label>
              <br />
              <label for="female" class="radio-inline">
                <input type="radio" name="gender" value="F" id="female" required value="<?php echo $data['gender']; ?>"/>
                Female
              </label>
              <br />
              <label for="others" class="radio-inline">
                <input type="radio" name="gender" value="o" id="others" required value="<?php echo $data['gender']; ?>"/>
                Others
              </label>
            </div>
          </div>

            <br>
            <hr class="mb-4"><br>

            <div class="mb-3">
              <label for="mobile">Mobile Number</label>
              <input type="number" class="form-control" id="mobile" name="mobile" placeholder="" required value="<?php echo $data['mobile']; ?>">
            </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required value="<?php echo $data['email']; ?>">
            </div>

            <br>
            <hr class="mb-4"><br>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required value="<?php echo $data['address']; ?>">
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
