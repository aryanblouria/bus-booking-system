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


                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Mobile = $_POST['Mobile'];



                if($this->insert_record($Name, $Email, $Mobile))
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
        function insert_record($a,$b,$c)
        {
            global $db;
            $query = "insert into vendor(Name, Email, Mobile) values('$a','$b','$c')";
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
            $query = "select * from vendor";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        // Get Particular Record
        public function get_record($id)
        {
            global $db;
            $sql = "select * from vendor where ID='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }

        // Update Record
        public function update()
        {
            global $db;

            if(isset($_POST['btn_update']))
            {


                $ID = $_POST['ID'];
                $Name = $db->check($_POST['Name']);
                $Email = $db->check($_POST['Email']);
                $Mobile = $db->check($_POST['Mobile']);

                if($this->update_record($ID,$Name,$Email,$Mobile))
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
        public function update_record($ID,$Name,$Email,$Mobile)
        {
            global $db;
            $sql = "update vendor set Name='$Name', Email='$Email', Mobile='$Mobile' where ID='$ID'";
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
            $query = "delete from vendor where ID='$id'";
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
