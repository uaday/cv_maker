<?php

session_start();
require 'db_connect.php';

class Slogin {

    public function __construct() {
        $db_connect = new Db_Connect();
        $this->conn=$db_connect->conn;
    }

    public function admin_login_check($data) {
        $email_address = $data['email_address'];
        $password = md5($data['password']);
        $query = "SELECT * FROM tbl_slogin WHERE email='$email_address' and password='$password'";
        if (mysqli_query($this->conn,$query)) {
            $resource_id = mysqli_query($this->conn,$query);
            $login_info = mysqli_fetch_assoc($resource_id);
            if ($login_info) {
                $_SESSION['login_id'] = $login_info['login_id'];
                $_SESSION['user_name'] = $login_info['user_name'];
                $_SESSION['type'] = $login_info['type'];
                if( $login_info['type'] == 'O' || $login_info['type'] == 'o'){
                    $query2 = "SELECT * FROM tbl_organization WHERE id='$login_info[tbl_organization_id]'";
                    $organization_result =  mysqli_fetch_assoc(mysqli_query($this->conn,$query2));
                    if($organization_result){
                        $_SESSION['organization'] = $organization_result['name'];
                        $_SESSION['organization_id'] = $organization_result['id'];

                    }
                }

                if ($login_info['type'] == 'A' || $login_info['type'] == 'a'|| $login_info['type'] == 'O' || $login_info['type'] == 'o') {
                    header('Location: dashboard.php');
                }
            } else {
                $message = 'Please use valid information!!';
                return $message;
            }
        } else {
            die('Query Problem' . mysql_error());
        }
    }
    
}

?>
