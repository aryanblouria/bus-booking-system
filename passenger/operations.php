<?php


    require_once('dbconfig.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                // $FirstName = $db->check($_POST['First']);
                // $LastName = $db->check($_POST['Last']);
                // $UserName = $db->check($_POST['UserName']);
                // $UserEmail = $db->check($_POST['UserEmail']);


                $firstName = $_POST['firstName'];
                $middleName = $_POST['middleName'];
                $lastName = $_POST['lastName'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                $address = $_POST['address'];



                if($this->insert_record($firstName, $middleName, $lastName, $age, $gender, $mobile, $email, $address))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                    header("Location:view.php");
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }

        // Insert Record in the Database Using Query
        function insert_record($a,$b,$c,$d,$e,$f,$g,$h)
        {
            global $db;
            $query = "insert into passenger(firstName, middleName, lastName, age, gender, mobile, email, address) values('$a','$b','$c','$d','$e','$f','$g','$h')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        // View Database Record
        public function view_record()
        {
            global $db;
            $query = "select * from passenger";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        // Get Particular Record
        public function get_record($id)
        {
            global $db;
            $sql = "select * from passenger where ID='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }

        // Update Record
        public function update()
        {
            global $db;

            if(isset($_POST['btn_update']))
            {
                // $ID = $_POST['ID'];
                // $FirstName = $db->check($_POST['First']);
                // $LastName = $db->check($_POST['Last']);
                // $UserName = $db->check($_POST['UserName']);
                // $Email = $db->check($_POST['UserEmail']);

                $ID = $_POST['ID'];
                $firstName = $db->check($_POST['firstName']);
                $middleName = $db->check($_POST['middleName']);
                $lastName = $db->check($_POST['lastName']);
                $age = $db->check($_POST['age']);
                $gender = $db->check($_POST['gender']);
                $mobile = $db->check($_POST['mobile']);
                $email = $db->check($_POST['email']);
                $address = $db->check($_POST['address']);

                if($this->update_record($ID,$firstName,$middleName,$lastName,$age,$gender,$mobile,$email,$address ))
                {
                    $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                    header("location:view.php");
                }
                else
                {
                    $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
                }


            }
        }

        // Update Function 2
        public function update_record($ID,$firstName,$middleName,$lastName,$age,$gender,$mobile,$email,$address)
        {
            global $db;
            $sql = "update passenger set firstName='$firstName', lastName='$lastName', middleName='$middleName', age='$age', gender='$gender', mobile='$mobile', email='$email', address='$address' where ID='$ID'";
            $result = mysqli_query($db->connection,$sql);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }



        // Set Session Message
        public function set_messsage($msg)
        {
            if(!empty($msg))
            {
                $_SESSION['Message']=$msg;
            }
            else
            {
                $msg = "";
            }
        }

        // Display Session Message
        public function display_message()
        {
            if(isset($_SESSION['Message']))
            {
                echo $_SESSION['Message'];
                unset($_SESSION['Message']);
            }
        }

        // Delete Record
        public function Delete_Record($id)
        {
            global $db;
            $query = "delete from passenger where ID='$id'";
            $result = mysqli_query($db->connection,$query);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }



    }




?>
