<?php 
require_once '../classes/admin_login.php';
$obj_login=new sLogin();
if(isset($_POST['btn']))
{
    $message=$obj_login->admin_login_check($_POST);
}
if(isset($_SESSION['login_id']))
{
    $login_id=$_SESSION['login_id'];
    if($login_id!=NULL)
    {
        
       if($_SESSION['type']=='a'||$_SESSION['type']=='A'|| $_SESSION['type']=='O'|| $_SESSION['type']=='o')
        {
            header('Location: dashboard.php');
        }
        
        
    }
}
//if(isset($_POST['btn']))
//{
//    header('Location:dashboard.php');
//}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Recruitment</title>

    <!-- Bootstrap Core CSS -->
    <link href="../asset/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../asset/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../asset/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../asset/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="icon" href="../asset/front_end/img/title_logo/favicon.ico" type="image/x-icon">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<link rel="icon" href="../asset\front_end\title_logo\4.ico" type="image/x-icon">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Please Sign In</h2>
                        
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email_address" type="email" autofocus autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                             
                                <!-- Change this to a button or input when using this as a form -->
                                <button  type="submit" name="btn" class="btn btn-lg btn-success btn-block">Login</button>
				<?php
                                if(isset($message)){?>
                                    <br>
                                    <div class="alert alert-danger">
                                        <?php
                                        if(isset($message))
                                            echo $message;
                                        unset($message);
                                        ?>
                                    </div>
                                <?php }?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../asset/admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../asset/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../asset/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../asset/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>