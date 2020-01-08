<?php
/**
 * Created by PhpStorm.
 * User: Uaday
 * Date: 8/29/2016
 * Time: 4:54 PM
 */
require 'db_connect.php';

class Application
{
    public function __construct()
    {
        $db_connect=new Db_connect();
        $this->conn=$db_connect->conn;
    }

    public function create_cv($data,$files)
    {

        $data10= $_SESSION['login_id'];
        $directory = 'asset/front_end/image/';
        $target_files = $directory . $files['photo']['name'];
        $file_type = pathinfo($target_files, PATHINFO_EXTENSION);
        if ($files['photo']['name'] != "") {
            $image_size = $files['photo']['size'];
            $check = getimagesize($files['photo']['tmp_name']);
            if ($check) {

                if ($image_size > 10000000) {
                    $message = 'Image Size Is to Large';
                    return $message;
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'gif' && $file_type != 'JPG' && $file_type != 'PNG' && $file_type != 'GIF' && $file_type != 'JPEG' && $file_type != 'jpeg') {
                        echo 'File type is not valid';
                        exit();
                    } else {
                        if (file_exists($target_files)) {


                        } else {
                            move_uploaded_file($files['photo']['tmp_name'], $target_files);

                        }
                        $sql = "INSERT INTO tbl_basic(login_id, career_object,first_name,last_name,email,phone,web,gender,dob,address,photo) VALUES ('$data10','$data[career_object]','$data[fname]','$data[lname]','$data[email]','$data[phone]','$data[web]','$data[gender]','$data[dob]','$data[address]','$target_files') ";
                        mysqli_query($this->conn,$sql);
                        $sql2="INSERT INTO tbl_education(name_of_degree,major,instituation,	passing_year,cgpa,achievement,login_id) VALUES ('$data[name_of_degree]','$data[major]','$data[instituation]','$data[passing_year]','$data[cgpa]','$data[achievement]','$data10')";
                        mysqli_query($this->conn,$sql2);
                        if($data['name_of_degree1']!=''&&$data['instituation1']!=''&&$data['passing_year1']&&$data['cgpa1']!='')
                        {
                            $sql3="INSERT INTO tbl_education(name_of_degree,major,instituation,	passing_year,cgpa,achievement,login_id) VALUES ('$data[name_of_degree1]','$data[major1]','$data[instituation1]','$data[passing_year1]','$data[cgpa1]','$data[achievement1]','$data10')";
                            mysqli_query($this->conn,$sql3);
                        }
                        if($data['name_of_degree2']!=''&&$data['instituation2']!=''&&$data['passing_year2']&&$data['cgpa2']!='')
                        {
                            $sql4="INSERT INTO tbl_education(name_of_degree,major,instituation,	passing_year,cgpa,achievement,login_id) VALUES ('$data[name_of_degree2]','$data[major2]','$data[instituation2]','$data[passing_year2]','$data[cgpa2]','$data[achievement2]','$data10')";
                            mysqli_query($this->conn,$sql4);
                        }
                        $sql5="INSERT INTO tbl_experience(job_title,desig,org,sdate,edate,job_des,login_id) VALUES ('$data[job_title]','$data[desig]','$data[org]','$data[sdate]','$data[edate]','$data[job_des]','$data10')";
                        mysqli_query($this->conn,$sql5);
                        if($data['job_title1']!=''&&$data['desig1']!=''&&$data['org1']!=''&&$data['sdate1']!=''&&$data['edate1']!=''&&$data['job_des1']!='')
                        {
                            $sql6="INSERT INTO tbl_experience(job_title,desig,org,sdate,edate,job_des,login_id) VALUES ('$data[job_title1]','$data[desig1]','$data[org1]','$data[sdate1]','$data[edate1]','$data[job_des1]','$data10')";
                            mysqli_query($this->conn,$sql6);
                        }
                        if($data['job_title2']!=''&&$data['desig2']!=''&&$data['org2']!=''&&$data['sdate2']!=''&&$data['edate2']!=''&&$data['job_des2']!='')
                        {
                            $sql7="INSERT INTO tbl_experience(job_title,desig,org,sdate,edate,job_des,login_id) VALUES ('$data[job_title2]','$data[desig2]','$data[org2]','$data[sdate2]','$data[edate2]','$data[job_des2]','$data10')";
                            mysqli_query($this->conn,$sql7);
                        }
                        $sql8="INSERT INTO tbl_qualification(qualification,login_id) VALUES ('$data[qualification]','$data10')";
                        mysqli_query($this->conn,$sql8);
                        if($data['qualification1']!='')
                        {
                            $sql9="INSERT INTO tbl_qualification(qualification,login_id) VALUES ('$data[qualification1]','$data10')";
                            mysqli_query($this->conn,$sql9);
                        }
                        if($data['qualification2']!='')
                        {
                            $sql10="INSERT INTO tbl_qualification(qualification,login_id) VALUES ('$data[qualification2]','$data10')";
                            mysqli_query($this->conn,$sql10);
                        }


                        $sql11="INSERT INTO tbl_reference(namee,org,desig,email,phone,login_id) VALUES ('$data[name]','$data[orga]','$data[des]','$data[em]','$data[mobile]','$data10')";
                        mysqli_query($this->conn,$sql11);
                        $sql12="INSERT INTO tbl_reference(namee,org,desig,email,phone,login_id) VALUES ('$data[name1]','$data[orga1]','$data[des1]','$data[em1]','$data[mobile1]','$data10')";
                        mysqli_query($this->conn,$sql12);
                        $message='Cv Created Successful!!';
                        return $message;
                    }
                }

            }

        }
    }

    public function select_basic_info_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_basic WHERE login_id='$id'";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_education1_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_education WHERE login_id='$id' LIMIT 0,1 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_education2_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_education WHERE login_id='$id' LIMIT 1,2 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_education3_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_education WHERE login_id='$id' LIMIT 2,3 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_experience1_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_experience WHERE login_id='$id' LIMIT 0,1 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_experience2_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_experience WHERE login_id='$id' LIMIT 1,2 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_experience3_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_experience WHERE login_id='$id' LIMIT 2,3 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_qualification1_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_qualification WHERE login_id='$id' LIMIT 0,1 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_qualification2_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_qualification WHERE login_id='$id' LIMIT 1,2 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_qualification3_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_qualification WHERE login_id='$id' LIMIT 2,3 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_reference1_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_reference WHERE login_id='$id' LIMIT 0,1 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function select_reference2_by_login_id($id)
    {
        $query = "SELECT * FROM tbl_reference WHERE login_id='$id' LIMIT 1,2 ";
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    public function update_cv($data, $files)
    {
        $data10=$_SESSION['login_id'];
        if ($files['photo']['name']!="") {
            $directory = 'asset/front_end/image/';
            $target_files = $directory . $files['photo']['name'];
            $file_type = pathinfo($target_files, PATHINFO_EXTENSION);
            if ($files['photo']['name'] != "") {
                $image_size = $files['photo']['size'];
                $check = getimagesize($files['photo']['tmp_name']);
                if ($check) {

                    if ($image_size > 10000000) {
                        $message = 'Image Size Is to Large';
                        return $message;
                        exit();
                    } else {
                        if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'gif' && $file_type != 'JPG' && $file_type != 'PNG' && $file_type != 'GIF' && $file_type != 'JPEG' && $file_type != 'jpeg') {
                            echo 'File type is not valid';
                            exit();
                        } else {
                            if (file_exists($target_files)) {


                            } else {
                                move_uploaded_file($files['photo']['tmp_name'], $target_files);

                            }
                            $sql="UPDATE tbl_basic SET  career_object='$data[career_object]', first_name='$data[fname]',last_name='$data[lname]',email='$data[email]',phone='$data[phone]',web='$data[web]',gender='$data[gender]',dob='$data[dob]',address='$data[address]',photo='$target_files' WHERE user_id='$data[user_id]'";
                            mysqli_query($this->conn,$sql);
                        }
                    }

                }

            }
        }
        else
        {
            $sql="UPDATE tbl_basic SET career_object='$data[career_object]', first_name='$data[fname]',last_name='$data[lname]',email='$data[email]',phone='$data[phone]',web='$data[web]',gender='$data[gender]',dob='$data[dob]',address='$data[address]' WHERE user_id='$data[user_id]'";
            mysqli_query($this->conn,$sql);
        }
        $sql2="UPDATE tbl_education SET name_of_degree='$data[name_of_degree]',major='$data[major]',instituation='$data[instituation]',passing_year='$data[passing_year]',cgpa='$data[cgpa]',achievement='$data[achievement]' WHERE edu_id='$data[edu_id]'";
        mysqli_query($this->conn,$sql2);
        if($data['edu_id1']!=null)
        {
            $sql3="UPDATE tbl_education SET name_of_degree='$data[name_of_degree1]',major='$data[major1]',instituation='$data[instituation1]',passing_year='$data[passing_year1]',cgpa='$data[cgpa1]',achievement='$data[achievement1]' WHERE edu_id='$data[edu_id1]'";
            mysqli_query($this->conn,$sql3);
        }
        else
        {
            if($data['name_of_degree1']!=''&&$data['instituation1']!=''&&$data['passing_year1']&&$data['cgpa1']!='')
            {
                $sql13="INSERT INTO tbl_education(name_of_degree,major,instituation,	passing_year,cgpa,achievement,login_id) VALUES ('$data[name_of_degree1]','$data[major1]','$data[instituation1]','$data[passing_year1]','$data[cgpa1]','$data[achievement1]','$data10')";
                mysqli_query($this->conn,$sql13);
            }
        }
        if($data['edu_id2']!=null)
        {
            $sql4="UPDATE tbl_education SET name_of_degree='$data[name_of_degree2]',major='$data[major2]',instituation='$data[instituation2]',passing_year='$data[passing_year2]',cgpa='$data[cgpa2]',achievement='$data[achievement2]' WHERE edu_id='$data[edu_id2]'";
            mysqli_query($this->conn,$sql4);
        }
        else
        {
            if($data['name_of_degree2']!=''&&$data['instituation2']!=''&&$data['passing_year2']&&$data['cgpa2']!='')
            {
                $sql4="INSERT INTO tbl_education(name_of_degree,major,instituation,	passing_year,cgpa,achievement,login_id) VALUES ('$data[name_of_degree2]','$data[major2]','$data[instituation2]','$data[passing_year2]','$data[cgpa2]','$data[achievement2]','$data10')";
                mysqli_query($this->conn,$sql4);
            }
        }
        $sql5="UPDATE tbl_experience SET job_title='$data[job_title]',desig='$data[desig]',org='$data[org]',sdate='$data[sdate]',edate='$data[edate]',job_des='$data[job_des]' WHERE exp_id='$data[exp_id]'";
        mysqli_query($this->conn,$sql5);
        if($data['exp_id1']!=null)
        {
            $sql6="UPDATE tbl_experience SET job_title='$data[job_title1]',desig='$data[desig1]',org='$data[org1]',sdate='$data[sdate1]',edate='$data[edate1]',job_des='$data[job_des1]' WHERE exp_id='$data[exp_id1]'";
            mysqli_query($this->conn,$sql6);
        }
        else
        {
            if($data['job_title1']!=''&&$data['desig1']!=''&&$data['org1']!=''&&$data['sdate1']!=''&&$data['edate1']!=''&&$data['job_des1']!='')
            {
                $sql6="INSERT INTO tbl_experience(job_title,desig,org,sdate,edate,job_des,login_id) VALUES ('$data[job_title1]','$data[desig1]','$data[org1]','$data[sdate1]','$data[edate1]','$data[job_des1]','$data10')";
                mysqli_query($this->conn,$sql6);
            }
        }
        if($data['exp_id2']!=null)
        {
            $sql7="UPDATE tbl_experience SET job_title='$data[job_title2]',desig='$data[desig2]',org='$data[org2]',sdate='$data[sdate2]',edate='$data[edate2]',job_des='$data[job_des2]' WHERE exp_id='$data[exp_id2]'";
            mysqli_query($this->conn,$sql7);
        }
        else
        {
            if($data['job_title2']!=''&&$data['desig2']!=''&&$data['org2']!=''&&$data['sdate2']!=''&&$data['edate2']!=''&&$data['job_des2']!='')
            {
                $sql7="INSERT INTO tbl_experience(job_title,desig,org,sdate,edate,job_des,login_id) VALUES ('$data[job_title2]','$data[desig2]','$data[org2]','$data[sdate2]','$data[edate2]','$data[job_des2]','$data10')";
                mysqli_query($this->conn,$sql7);
            }
        }
        $sql8="UPDATE tbl_qualification SET qualification='$data[qualification]' WHERE  qua_id='$data[qua_id]'";
        mysqli_query($this->conn,$sql8);
        if($data['qua_id1']!=null)
        {
            $sql9="UPDATE tbl_qualification SET qualification='$data[qualification1]' WHERE  qua_id='$data[qua_id1]'";
            mysqli_query($this->conn,$sql9);
        }
        else
        {
            if($data['qualification1']!='')
            {
                $sql9="INSERT INTO tbl_qualification(qualification,login_id) VALUES ('$data[qualification1]','$data10')";
                mysqli_query($this->conn,$sql9);
            }
        }
        if($data['qua_id2']!=null)
        {
            $sql10="UPDATE tbl_qualification SET qualification='$data[qualification2]' WHERE  qua_id='$data[qua_id2]'";
            mysqli_query($this->conn,$sql10);
        }
        else
        {
            if($data['qualification2']!='')
            {
                $sql10="INSERT INTO tbl_qualification(qualification,login_id) VALUES ('$data[qualification2]','$data10')";
                mysqli_query($this->conn,$sql10);
            }
        }
        $sql11="UPDATE tbl_reference SET namee='$data[name]',org='$data[orga]',desig='$data[des]',email='$data[em]',phone= '$data[mobile]' WHERE ref_id='$data[ref_id]'";
        mysqli_query($this->conn,$sql11);
        $sql12="UPDATE tbl_reference SET namee='$data[name1]',org='$data[orga1]',desig='$data[des1]',email='$data[em1]',phone= '$data[mobile1]' WHERE ref_id='$data[ref_id1]'";
        mysqli_query($this->conn,$sql12);
        $message="CV Update Successful!!";
        return $message;
        
    }


    public function find_contact()
    {
        $query="SELECT * FROM tbl_contact LIMIT 0,1";
        $result=mysqli_query($this->conn,$query);
        return $result;
    }
    public function make_contact_request($data)
    {
        $query="INSERT into tbl_contact_request(name,email,phone,message) VALUES ('$data[name]','$data[email]','$data[phone]','$data[message]')";
        if(mysqli_query($this->conn,$query))
        {
            return "We will Contact you later!!";
        }
    }




//   Akash

    public function sign_in($data)
    {

        $query="SELECT * FROM tbl_login  WHERE email='$data[email]'  ";

        if(mysqli_query($this->conn,$query))
        {
            $resource_id=  mysqli_query($this->conn,$query);
            $result=  mysqli_fetch_assoc($resource_id);

            if($result)
            {
                $message='This Email Address is already used.Please Enter an unique email Address';
                return $message;
            }
            else
            {

                $sql="INSERT INTO tbl_login(first_name,last_name,email,password) VALUES('$data[first_name]','$data[last_name]' ,  '$data[email]'  ,   '$data[password]' )";
                mysqli_query($this->conn,$sql);
                $message='Sing up Successfull';
                return $message;
            }

        }

    }
//    public function email_check($data)
//    {
//        $sql="SELECT email FROM tbl_login WHERE email='$data[email]' ";
//          $result=  mysqli_query($this->conn,$sql);
//        $num_rows = mysql_num_rows($result);
//    }
    public function logout()
    {
        unset($_SESSION['login_id']);
        unset($_SESSION['name']);
        header('Location:../index.php');
    }
    public function select_profile($a)
    {
        $data= $_SESSION['login_id'];

        $sql="SELECT * FROM tbl_login WHERE login_id=$data ";
        $a1=  mysqli_query($this->conn,$sql);
        return $a1;
    }
    public function  select_education($data)
    {
        $sql="SELECT * FROM tbl_education WHERE login_id=$data LIMIT 0,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }

    public function  select_education1($data)
    {
        $sql="SELECT * FROM tbl_education WHERE login_id=$data    LIMIT 1,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }


    public function  select_education2($data)
    {
        $sql="SELECT * FROM tbl_education WHERE login_id=$data LIMIT 2,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }

    public function  select_expreience($data)
    {
        $sql="SELECT * FROM tbl_experience WHERE login_id=$data LIMIT 0,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }

    public function  select_expreience1($data)
    {
        $sql="SELECT * FROM tbl_experience WHERE login_id=$data  LIMIT 1,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }


    public function  select_expreience2($data)
    {
        $sql="SELECT * FROM tbl_experience WHERE login_id=$data LIMIT 2,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }

    public function  select_reference($data)
    {

        $sql="SELECT * FROM tbl_reference WHERE login_id=$data   LIMIT 0,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }
    public function  select_reference1($data)
    {

        $sql="SELECT * FROM tbl_reference WHERE login_id=$data   LIMIT 1,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }

    public function  select_qualification($data)
    {

        $sql="SELECT * FROM tbl_qualification WHERE login_id=$data LIMIT 0,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }


    public function  select_qualification1($data)
    {
        $sql="SELECT * FROM tbl_qualification WHERE login_id=$data LIMIT 1,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }


    public function  select_qualification2($data)
    {
        $sql="SELECT * FROM tbl_qualification WHERE login_id=$data LIMIT 2,1 ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();
        return $a1;
    }
    public function  select_basic($data)
    {
        $sql="SELECT * FROM tbl_basic WHERE login_id=$data ";
        $a1=  mysqli_query($this->conn,$sql);
//        echo '<pre>';
//        print_r($a1);
//        exit();

        return $a1;
    }
    public function  update_profile($data)
    {

        $sql1="SELECT *  FROM tbl_login WHERE email='$data[email]' AND login_id='$data[login_id]' "  ;

        $resource_id=  mysqli_query($this->conn,$sql1);
        $result=  mysqli_fetch_assoc($resource_id);
        if($result)
        {
            $sql="UPDATE tbl_login SET first_name='$data[first_name]' ,last_name='$data[last_name]' , email='$data[email]'  WHERE login_id='$data[login_id]' ";
            if(mysqli_query($this->conn,$sql))
            {

                $messqge='Profiel Update Successfull';
                return  $messqge;
                //                 header('Location:profile_content.php');
            }
            else {
                die('Query Problem'.  mysql_error());
            }

        }
        else
        {
            $sql2="SELECT * FROM tbl_login WHERE email='$data[email]' ";
            $resource_id1=  mysqli_query($this->conn,$sql2);
            $result1=  mysqli_fetch_assoc($resource_id1);
            if($result1)
            {
                $messqge="Please Enter an unique email Address ";
                return  $messqge;
            }
            else
            {

                $sql="UPDATE tbl_login SET first_name='$data[first_name]' ,last_name='$data[last_name]' , email='$data[email]'  WHERE login_id='$data[login_id]' ";
                if(mysqli_query($this->conn,$sql))
                {

                    $messqge='Profiel Update Successfull';
                    return  $messqge;
                    //                 header('Location:profile_content.php');
                }
                else {
                    die('Query Problem'.  mysql_error());
                }
            }

        }


        // return  $a;
    }
    public function cv_status($login_id)
    {
        $query="SELECT * FROM tbl_basic WHERE login_id='$login_id'";
        $result=mysqli_query($this->conn,$query);
        return $result;
    }

    public  function  add_job_application($job_id, $template_id){
        $login_id = $_SESSION['login_id'];
        $sql="INSERT INTO tbl_job_application(tbl_job_circular_id,tbl_login_id,rating,template) VALUES('$job_id' , '$login_id' , '20.5',  '$template_id' )";
        if(mysqli_query($this->conn,$sql)){
            $_SESSION['message'] = 'Job successfully applied!';
            header('Location: ../list_applied_job.php');
        }
//        die(mysqli_error($this->conn));
        
    }

    public function find_all_applied_job($login_id)
    {
        $query="SELECT jc.*,o.* FROM tbl_job_application ja,tbl_organization o,tbl_job_circular jc  WHERE ja.tbl_job_circular_id=jc.id and jc.tbl_organization_id = o.id  and ja.tbl_login_id='$login_id'";
        $result=mysqli_query($this->conn,$query);
        return $result;
    }


}