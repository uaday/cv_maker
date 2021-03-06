<?php
require 'db_connect.php';

class Super_Admin
{
    public function __construct()
    {
        $db_connect = new Db_Connect();
        $this->conn=$db_connect->conn;
    }
    

    public function logout()
    {
        unset($_SESSION['login_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['type']);
        unset($_SESSION['organization']);
        header('Location: index.php');
    }



    public function select_request_contact()
    {
        $query = "SELECT * FROM tbl_contact_request";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_all_organization()
    {
        $query = "SELECT * FROM tbl_organization";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result = mysqli_query($this->conn,$query);
        return $result;
    }
        public function select_request_contact_count()
    {
        $query = "SELECT * FROM tbl_contact_request";
        mysqli_query($this->conn,"set character_set_results='utf8'");
      //  $result = mysqli_query($this->conn,$query);
         $result = mysqli_query($this->conn,$query);
         $num_rows = mysql_num_rows($result);
            return $num_rows;
    }


    public function find_message_by_request_id($request_id)
    {
        $query = "SELECT * FROM tbl_contact_request WHERE request_id='$request_id'";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function delete_request_contact($request_id)
    {
        $query2 = "DELETE FROM tbl_contact_request WHERE request_id='$request_id'";
        if (mysqli_query($this->conn,$query2)) {
            return 'Contact Request Deleted Successful!!';
        } else {
            die('query problem' . mysql_error());
        }
    }
    public function delete_organization($id)
    {
        $query2 = "DELETE FROM tbl_organization WHERE id='$id'";
        if (mysqli_query($this->conn,$query2)) {
            return 'Organization Successfully Deleted';
        } else {
            die('query problem' . mysql_error());
        }
    }

    public function select_contact()
    {
        $query="SELECT * FROM tbl_contact LIMIT 0,1";
        $result=mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_contact_by_contact_id($contact_id)
    {
        $query="SELECT * FROM tbl_contact WHERE contact_id='$contact_id'";
        $result=mysqli_query($this->conn,$query);
        return $result;
    }
    public function update_contact($data)
    {
        $query="UPDATE tbl_contact SET address='$data[address]',phone='$data[phone]',email='$data[email]',map_link='$data[map_link]' WHERE contact_id='$data[contact_id]'";
        mysqli_query($this->conn,$query);
        $message='Contact Update Successful!!';
        return $message;
    }
    public function count_user()
    {
        $query="SELECT count(*) cu FROM tbl_login";
        return $result=mysqli_query($this->conn,$query);
    }
    public function count_cv()
    {
        $query="SELECT count(*) cu FROM tbl_basic";
        return $result=mysqli_query($this->conn,$query);
    }
    public function count_contact_request()
    {
        $query="SELECT count(*) cu FROM tbl_contact_request";
        return $result=mysqli_query($this->conn,$query);
    }
    public function count_all_jobs()
    {
        $query="SELECT count(*) j FROM tbl_job_circular";
        return $result=mysqli_query($this->conn,$query);
    }
    public function count_all_jobs_applicant()
    {
        $query="SELECT count(*) ja FROM tbl_job_application";
        return $result=mysqli_query($this->conn,$query);
    }

    public function insert_job_circular($data){
        $skills = implode(",", $data['skills']);
        $job_description = $this->conn->real_escape_string($data['job_details']);
        $sql="INSERT INTO tbl_job_circular(job_name,tbl_organization_id,job_description,skill_tag) VALUES ('$data[job_name]','$data[organization_id]' ,  '$job_description'  , '$skills' )";
        if(mysqli_query($this->conn,$sql)) {
            $_SESSION['message'] = 'Job Circular successfully added';

        }
//        header('Location: http://localhost:8080/CvMaker/super_admin/job_circular.php');
    }

    public function select_all_job_circular()
    {
        $query = "SELECT * FROM tbl_job_circular where tbl_organization_id='$_SESSION[organization_id]'";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_all_job_circular_by_organization($organization_id)
    {
        $query = "SELECT * FROM tbl_job_circular where tbl_organization_id='$organization_id'";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result = mysqli_query($this->conn,$query);
        return $result;
    }
    public function find_organization_info($organization_id)
    {
        $query = "SELECT * FROM tbl_organization where id='$organization_id'";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function find_job_info($job_id)
    {
        $query = "SELECT * FROM tbl_job_circular where id='$job_id'";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    /**
     * @return false|mysqli
     */
    public function select_all_job_applicant_list($job_id)
    {
        $query = "SELECT * FROM tbl_job_application ja, tbl_login l where ja.tbl_login_id = l.login_id and ja.tbl_job_circular_id = '$job_id' order by ja.rating desc ";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

} 
?>
