<?php

session_start();
//require 'db_connect.php';

class Login {

    public function __construct() {
        $db_connect = new Db_Connect();
        $this->conn=$db_connect->conn;
    }

    
    public function login_check($data)
    {
//        echo '<pre>';
//        print_r($data);
        $email_address=$data['email'];
        $password=$data['password'];


        $query="SELECT * FROM tbl_login  WHERE email='$email_address'  AND password='$password'  ";
        if(mysqli_query($this->conn,$query))
        {
            if(mysqli_query($this->conn,$query))
            {
                $resouece_id=  mysqli_query($this->conn,$query);
                $result=  mysqli_fetch_assoc($resouece_id);
                if($result)
                {
                    $_SESSION['login_id']=$result['login_id'];
                    $_SESSION['name']=$result['name'];
                    header('Location:dmain.php');
                }
                else{
                    $message1="Please Enter Valid email And Password";
                    return $message1;
                }
            }
        }
        else
        {
            die('Query Problem'.mysql_error());
        }

    }


}

?>
