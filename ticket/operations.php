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


                $ID = $_POST['ID'];
                $doj = $_POST['doj'];
                $st_time = $_POST['st_time'];
                $end_time = $_POST['end_time'];
                $seats = $_POST['seats'];
                $passid = $_POST['passid'];



                if($this->insert_record($ID, $doj, $st_time, $end_time, $seats, $passid))
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
        function insert_record($a,$b,$c,$d,$e,$f)
        {
            global $db;
            $query = "insert into ticket(ID, doj, st_time, end_time, seats,passid) values('$a','$b','$c','$d','$e','$f')";
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
            $query = "select * from ticket";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        // Get Particular Record
        public function get_record($id)
        {
            global $db;
            $sql = "select * from ticket where ID='$id'";
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
                $doj = $db->check($_POST['doj']);
                $st_time = $db->check($_POST['st_time']);
                $end_time = $db->check($_POST['end_time']);
                $seats = $db->check($_POST['seats']);
                $passid = $db->check($_POST['passid']);

                if($this->update_record($ID,$doj,$st_time,$end_time,$seats,$passid))
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
        public function update_record($ID,$doj,$st_time,$end_time,$seats,$passid)
        {
            global $db;
            $sql = "update ticket set doj='$doj', st_time='$st_time', end_time='$end_time', seats='$seats' where ID='$ID'";
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
            $query = "delete from ticket where ID='$id'";
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
