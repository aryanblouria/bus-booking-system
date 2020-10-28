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
                $lastName = $_POST['lastName'];
                $age = $_POST['age'];
                $mobile = $_POST['mobile'];
                $designation = $_POST['designation'];

                if($this->insert_record($firstName, $lastName, $age, $mobile, $designation))
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
        function insert_record($a,$b,$c,$d,$e)
        {
            global $db;
            $query = "insert into staff(firstName, lastName, age, mobile, designation) values('$a','$b','$c','$d','$e')";
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
            $query = "select * from staff";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        // Get Particular Record
        public function get_record($id)
        {
            global $db;
            $sql = "select * from staff where ID='$id'";
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
                $lastName = $db->check($_POST['lastName']);
                $age = $db->check($_POST['age']);
                $mobile = $db->check($_POST['mobile']);
                $designation = $db->check($_POST['designation']);

                if($this->update_record($ID,$firstName,$lastName,$age,$mobile,$designation ))
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
        public function update_record($ID,$firstName,$lastName,$age,$mobile,$designation)
        {
            global $db;
            $sql = "update staff set firstName='$firstName', lastName='$lastName', age='$age',mobile='$mobile', designation='$designation' where ID='$ID'";
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
            $query = "delete from staff where ID='$id'";
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
