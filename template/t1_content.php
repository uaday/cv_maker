<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require '../classes/application.php';
require '../classes/login.php';
$obj_login=new login();
$obj_app=new Application();
if(isset($_SESSION['type'])){
    $login_id = $_GET['applicant_id'];
}else{
    $login_id = $_SESSION['login_id'];

}
if (isset($_GET['status'])) {
    if (isset($_GET['logout']) == 'true') {
        $obj_app->logout();
    }
}
if ($login_id == NULL) {
    header('Location:../index.php');
}





$result=$obj_app->select_basic($login_id);
$row=  mysqli_fetch_assoc($result);

$resut_education=$obj_app->select_education($login_id);
$row_education=  mysqli_fetch_assoc($resut_education);

$resut_education1=$obj_app->select_education1($login_id);
$row_education1=  mysqli_fetch_assoc($resut_education1);

$resut_education2=$obj_app->select_education2($login_id);
$row_education2=  mysqli_fetch_assoc($resut_education2);


$result_exprience=$obj_app->select_expreience($login_id);
$row_exprience=  mysqli_fetch_assoc($result_exprience);


$result_exprience1=$obj_app->select_expreience1($login_id);
$row_exprience1=  mysqli_fetch_assoc($result_exprience1);


$result_exprience2=$obj_app->select_expreience2($login_id);
$row_exprience2=  mysqli_fetch_assoc($result_exprience2);


$result_reference=$obj_app->select_reference($login_id);
$row_reference=  mysqli_fetch_assoc($result_reference);

$result_reference1=$obj_app->select_reference1($login_id);
$row_reference1=  mysqli_fetch_assoc($result_reference1);

$result_qualification=$obj_app->select_qualification($login_id);
$row_qualification=  mysqli_fetch_assoc($result_qualification);

$result_qualification1=$obj_app->select_qualification1($login_id);
$row_qualification1=  mysqli_fetch_assoc($result_qualification1);

$result_qualification2=$obj_app->select_qualification2($login_id);
$row_qualification2=  mysqli_fetch_assoc($result_qualification2);

$rating = 0;
if($row){
    $rating = $rating+ 5;
}
if($row_education){
    $rating = $rating+ 10;
}if($row_education1){
    $rating = $rating+ 10;
}if($row_education2){
    $rating = $rating+ 10;
}if($row_exprience){
    $rating = $rating+ 10;
}if($row_exprience1){
    $rating = $rating+ 10;
}if($row_exprience2){
    $rating = $rating+ 10;
}if($row_reference){
    $rating = $rating+ 10;
}if($row_reference1){
    $rating = $rating+ 10;
}if($row_qualification){
    $rating = $rating+ 5;
}if($row_qualification1){
    $rating = $rating+ 5;
}if($row_qualification2){
    $rating = $rating+ 5;
}




if(isset($_POST['apply_job'])){
    $obj_app->add_job_application($_SESSION['applying_job_id'], 't1', $rating);
}
?>
<html>
<head>
    <title>Job Recruitment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--        <link rel="stylesheet" type="text/css" href="css/my_style.css">-->
    <link rel="stylesheet" type="text/css" href="../asset/front_end/contact/css/my_style_extra.css">
    <link rel="stylesheet" type="text/css" href="../asset/front_end/contact/css/bootstrap.min.css">
    <script src="../asset/front_end/contact/js/ajax_jquery.js"></script>
<link rel="icon" href="../asset\front_end\title_logo\4.ico" type="image/x-icon">

    <script src="../asset/front_end/contact/js/bootstrap.min.js"></script>
    <script>
        function printContent(el) {
            var restorepage=document.body.innerHTML;
            var printcontent=document.getElementById(el).innerHTML;
            document.body.innerHTML=printcontent;
            window.print();
            document.body.innerHTML=restorepage;

        }
    </script>
    <style media="all">
        @page  {
            size: auto;
            margin: 0mm;
        }
        html{
            margin: 0px;
        }
        body{
            margin: 10mm 15mm 10mm 15mm;
        }

        h4{
            background: #347235 !important ;
            height: 30px;
        }
        h1
        {
            color: #347235 !important;
        }


        .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
            float: left;
        }
        .col-sm-12 {
            width: 100%;
        }
        .col-sm-11 {
            width: 91.66666667%;
        }
        .col-sm-10 {
            width: 83.33333333%;
        }
        .col-sm-9 {
            width: 75%;
        }
        .col-sm-8 {
            width: 66.66666667%;
        }
        .col-sm-7 {
            width: 58.33333333%;
        }
        .col-sm-6 {
            width: 50%;
        }
        .col-sm-5 {
            width: 41.66666667%;
        }
        .col-sm-4 {
            width: 33.33333333%;
        }
        .col-sm-3 {
            width: 25%;
        }
        .col-sm-2 {
            width: 16.66666667%;
        }
        .col-sm-1 {
            width: 8.33333333%;
        }
        .col-sm-pull-12 {
            right: 100%;
        }
        .col-sm-pull-11 {
            right: 91.66666667%;
        }
        .col-sm-pull-10 {
            right: 83.33333333%;
        }
        .col-sm-pull-9 {
            right: 75%;
        }
        .col-sm-pull-8 {
            right: 66.66666667%;
        }
        .col-sm-pull-7 {
            right: 58.33333333%;
        }
        .col-sm-pull-6 {
            right: 50%;
        }
        .col-sm-pull-5 {
            right: 41.66666667%;
        }
        .col-sm-pull-4 {
            right: 33.33333333%;
        }
        .col-sm-pull-3 {
            right: 25%;
        }
        .col-sm-pull-2 {
            right: 16.66666667%;
        }
        .col-sm-pull-1 {
            right: 8.33333333%;
        }
        .col-sm-pull-0 {
            right: auto;
        }
        .col-sm-push-12 {
            left: 100%;
        }
        .col-sm-push-11 {
            left: 91.66666667%;
        }
        .col-sm-push-10 {
            left: 83.33333333%;
        }
        .col-sm-push-9 {
            left: 75%;
        }
        .col-sm-push-8 {
            left: 66.66666667%;
        }
        .col-sm-push-7 {
            left: 58.33333333%;
        }
        .col-sm-push-6 {
            left: 50%;
        }
        .col-sm-push-5 {
            left: 41.66666667%;
        }
        .col-sm-push-4 {
            left: 33.33333333%;
        }
        .col-sm-push-3 {
            left: 25%;
        }
        .col-sm-push-2 {
            left: 16.66666667%;
        }
        .col-sm-push-1 {
            left: 8.33333333%;
        }
        .col-sm-push-0 {
            left: auto;
        }
        .col-sm-offset-12 {
            margin-left: 100%;
        }
        .col-sm-offset-11 {
            margin-left: 91.66666667%;
        }
        .col-sm-offset-10 {
            margin-left: 83.33333333%;
        }
        .col-sm-offset-9 {
            margin-left: 75%;
        }
        .col-sm-offset-8 {
            margin-left: 66.66666667%;
        }
        .col-sm-offset-7 {
            margin-left: 58.33333333%;
        }
        .col-sm-offset-6 {
            margin-left: 50%;
        }
        .col-sm-offset-5 {
            margin-left: 41.66666667%;
        }
        .col-sm-offset-4 {
            margin-left: 33.33333333%;
        }
        .col-sm-offset-3 {
            margin-left: 25%;
        }
        .col-sm-offset-2 {
            margin-left: 16.66666667%;
        }
        .col-sm-offset-1 {
            margin-left: 8.33333333%;
        }
        .col-sm-offset-0 {
            margin-left: 0%;
        }
        .visible-print {
            display: block !important;
        }

        .visible-xs {
            display: none !important;
        }
        .hidden-xs {
            display: block !important;
        }
        table.hidden-xs {
            display: table;
        }
        br.hidden-sm
        {
            display: none !important;
        }
        br.visible-sm
        {
            display: block; !important;
        }
        tr.hidden-xs {
            display: table-row !important;
        }
        th.hidden-xs,
        td.hidden-xs {
            display: table-cell !important;
        }
        .hidden-xs.hidden-print {
            display: none !important;
        }

        .hidden-sm {
            display: none !important;
        }
        .visible-sm {
            display: block !important;
        }
        table.visible-sm {
            display: table;
        }

        tr.visible-sm {
            display: table-row !important;
        }
        th.visible-sm,
        td.visible-sm {
            display: table-cell !important;
        }

    </style>

</head>
<body>
<?if(!isset($_SESSION['type'])){?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 my_menu ">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#my_menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" >
                        <img src="../asset/front_end/contact/img/logo/unnamed_converted.png" style="height: 70px; width: 70px; margin-left: 20px; margin-top: 5px" alt="logo">
                    </a>

                </div>
                <div class="collapse navbar-collapse" id="my_menu" style="margin:30px 0px 0px 20px;">
                    <ul class="nav navbar-nav">
                        <li ><a href="../dashboard.php">Home</a></li>
                        <li><a href="?status=logout&logout=true">Log Out</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<?php }?>
<div class="row text-center">
    <?php if(isset($_SESSION['applying_job_id']) && isset($_SESSION['applying_organization_id']) && !isset($_SESSION['type'])){?>
        <h3>Apply <?= $_SESSION['applying_job_name']?> job at <?= $_SESSION['applying_organization_name']?> using this cv.</h3>
        <form action="#" method="post">
            <button type="submit" name="apply_job" value="apply_job" class="btn btn-primary">APPLY</button>
        </form>
        <br>
        <br>
    <?php }?>
</div>
<div class="row">
    <div class="col-md-offset-8 col-md-4">
        <div class="panel-body" align="center">
            <button type="submit" name="btn" class="btn btn-outline btn-primary  " style="width: 100px"
                    onclick="printContent('print')"><i class="fa fa-print"></i> Print
            </button>
            <?php if(!isset($_SESSION['type'])){?>
                <a type="button" class="btn btn-outline btn-success " style="width: 100px" href="../preview.php"><i class="fa fa-image"> Template</a>
                <a type="button" class="btn btn-outline btn-warning " style="width: 100px" href="../edit.php"><i class="fa fa-edit"> Edit</a>
            <?php }?>
        </div>
    </div>
</div>
<div class="container" >
    <div >
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row" id="print">
                    <div style="margin-left: 20px; margin-right: 20px">
                        <div class="col-sm-12">
                            <div class="col-sm-offset-5 col-sm-4">
                                <br>
                                <br>
                                <br>
                                <h1 ><strong><?php echo $row['first_name'];?></strong></h1>
                                <h1 ><strong><?php echo $row['last_name'];?></strong></h1>
                            </div>
                            <div class=" col-sm-3">
                                <img src="../<?php echo $row['photo']?>" height="160px">
                            </div>
                        </div>

                        <div >
                            <h3><strong>Career Objective:</strong></h3><br>
                        </div>
                        <p><?php echo $row['career_object'] ?></p>
                        <div >
                            <br><h4><strong>Educational Background:</strong></h4>
                        </div>
                        <h5><strong><?php echo $row_education['name_of_degree'] ?></strong></h5>
                        <p>CGPA :  <?php echo  $row_education['cgpa']?></p>
                        <p>Passing Year: <?php echo  $row_education['passing_year']?></p>
                        <p><?php echo  $row_education['instituation']?></p><br>

                        <?php  if(isset($row_education1)) if($row_education1['name_of_degree']!=NULL) {  ?>

                            <h5><strong><?php echo $row_education1['name_of_degree'] ?></strong></h5>
                            <p>CGPA :  <?php echo  $row_education1['cgpa']?></p>
                            <p>Passing Year: <?php echo  $row_education1['passing_year']?></p>
                            <p><?php echo  $row_education1['instituation']?></p><br>
                        <?php  }  if(isset($row_education2))   if($row_education2['name_of_degree']!=NULL) {  ?>


                            <h5><strong><?php echo $row_education2['name_of_degree'] ?></strong></h5>
                            <p>CGPA :  <?php echo  $row_education2['cgpa']?></p>
                            <p>Passing Year: <?php echo  $row_education2['passing_year']?></p>
                            <p><?php echo  $row_education2['instituation']?></p><br>
                        <?php  } ?>
                        <div>
                            <h4><strong>Work Experience</strong></h4><br>
                        </div>
                        <h5><strong><?php echo  $row_exprience['org'] ?></strong></h5>
                        <p>Work as a <?php echo  $row_exprience['desig']?></p>
                        <p>Since <?php echo  $row_exprience['sdate']?></p>
                        <p><?php echo  $row_exprience['job_des']?><br>
                            <br></p>

                        <?php if(isset($row_education1)) if($row_exprience1['org']!=NULL)  { ?>
                            <h5><strong><?php echo  $row_exprience1['org'] ?></strong></h5>
                            <p>Work as a <?php echo  $row_exprience1['desig']?></p>
                            <p>Since <?php echo  $row_exprience1['sdate']?></p>
                            <p><?php echo  $row_exprience1['job_des']?><br>
                                <br></p><br>
                        <?php } if(isset($row_education2)) if($row_exprience2['org']!=NULL)  {   ?>

                            <h5><strong><?php echo  $row_exprience2['org'] ?></strong></h5>
                            <p>Work as a <?php echo  $row_exprience2['desig']?></p>
                            <p>Since <?php echo  $row_exprience2['sdate']?></p>
                            <p><?php echo  $row_exprience2['job_des']?><br>
                                <br></p><br>
                        <?php  } ?>

                        <div >
                            <h4><strong>Achievements:</strong></h4><br>
                        </div>

                        <h5><strong><?php echo  $row_qualification['qualification'] ?></strong></h5>
                        <br><br>

                        <?php if($row_qualification1)  if($row_qualification1['qualification']!=NULL)  {  ?>
                            <h5><strong><?php echo  $row_qualification1['qualification'] ?></strong></h5>
                            <br><br>

                        <?php  } if(isset($row_qualification2)) if($row_qualification2['qualification']!=NULL)  {  ?>

                            <h5><strong><?php echo  $row_qualification2['qualification'] ?></strong></h5>
                            <br><br>
                        <?php  } ?>
                        <div >
                            <h4><strong>Personal info:</strong></h4><br>
                        </div>
                        <p>First Name: <?php echo $row['first_name'];?></p>
                        <p>Last Name: <?php echo $row['last_name'];?></p>
                        <p>Email: <?php echo $row['email']?></p>
                        <p>Phone: <?php echo $row['phone']?></p>
                        <p>Address: <?php echo $row['address']?></p>
                        <p>Gender: <?php echo $row['gender']?></p>
                        <p>Date Of Birth: <?php echo $row['dob']?></p>

                        <br>
                        <div >
                            <h4><strong>References:</strong></h4><br>
                        </div>
                        <p> Name: <?php echo $row_reference ['namee'];?></p>
                        <p>Organization: <?php echo $row_reference ['org'];?></p>
                        <p>Designation: <?php echo $row_reference['desig']?></p>
                        <p>Phone: <?php echo $row_reference['email']?></p>
                        <p>Email: <?php echo $row_reference['phone']?></p>

                        <br>
                        <?php if($row_reference1['namee']!=NULL)
                        {
                            ?>

                            <p> Name: <?php echo $row_reference1 ['namee'];?></p>
                            <p>Organization: <?php echo $row_reference1 ['org'];?></p>
                            <p>Designation: <?php echo $row_reference1['desig']?></p>
                            <p>Phone: <?php echo $row_reference1['email']?></p>
                            <p>Email: <?php echo $row_reference1['phone']?></p>
                            <?php
                        }  ?>
                        <br>
                        <br>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>