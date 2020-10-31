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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Viewing the Ticket Records</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> Ticket Records </h2>
                    </div>
                    <div class="card-body">
                        <?php
                              $db->display_message();
                              $db->display_message();
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 5%"> Ticket ID </td>
                                <td style="width: 10%"> Passenger ID </td>
                                <td style="width: 10%"> Date Of Journey </td>
                                <td style="width: 10%"> Start Time </td>
                                <td style="width: 10%"> End Time </td>
                                <td style="width: 10%"> No Of Seats </td>
                                <td style="width: 10%"> Cost </td>
                                <td style="width: 20" colspan="2">Operations</td>
                            </tr>
                            <tr>
                                <?php
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>

                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['doj'] ?></td>
                                    <td><?php echo $data['st_time'] ?></td>
                                    <td><?php echo $data['end_time'] ?></td>
                                    <td><?php echo $data['seats'] ?></td>
                                    <td><?php echo $data['cost'] ?></td>
                                    <td><?php echo $data['passid'] ?></td>


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
    </div>
</body>
</html>
