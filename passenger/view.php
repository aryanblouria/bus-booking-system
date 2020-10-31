<?php

    require_once('dbconfig.php');
    $db = new operations();
    $result=$db->view_record();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Viewing the Passenger Records</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> Passenger Records </h2>
                    </div>
                    <div class="card-body">
                        <?php
                              $db->display_message();
                              $db->display_message();
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 5%"> ID </td>
                                <td style="width: 10%"> First Name </td>
                                <td style="width: 10%"> Middle Name </td>
                                <td style="width: 10%"> Last Name </td>
                                <td style="width: 7%"> Age </td>
                                <td style="width: 8%"> Gender </td>
                                <td style="width: 10%"> Mobile Number </td>
                                <td style="width: 10%"> Email </td>
                                <td style="width: 30%"> Address </td>
                                <td style="width: 20" colspan="2">Operations</td>
                            </tr>
                            <tr>
                                <?php
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <!-- <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['FirstName'] ?></td>
                                    <td><?php echo $data['LastName'] ?></td>
                                    <td><?php echo $data['UserName'] ?></td>
                                    <td><?php echo $data['Email'] ?></td> -->

                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['firstName'] ?></td>
                                    <td><?php echo $data['middleName'] ?></td>
                                    <td><?php echo $data['lastName'] ?></td>
                                    <td><?php echo $data['age'] ?></td>
                                    <td><?php echo $data['gender'] ?></td>
                                    <td><?php echo $data['mobile'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['address'] ?></td>


                                    <td><a href="edit.php?U_ID=<?php echo $data['ID'] ?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="del.php?D_ID=<?php echo $data['ID'] ?>" class="btn btn-danger">Del</a></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <a href="../admin.php"><button class="btn btn-success btn-lg btn-block">Return To Admin</button></a>
    </div>
</body>
</html>
