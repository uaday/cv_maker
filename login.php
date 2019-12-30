<?php
require 'classes/application.php';
require_once './classes/login.php';
$obj_login=new login();
$obj_app=new Application();

if(isset($_POST['sbtn']))
{
    $message= $obj_app->sign_in($_POST);
//     if($message=='Sing up Successfull')
//     {
//         $m=$obj_app->email_check($data[email]);
//     }
}
if(isset($_POST['lbtn']))
{
    $message1=$obj_login->login_check($_POST);
}


if (isset($_SESSION['login_id'])) {
    $admin_id = $_SESSION['login_id'];
    if ($admin_id != NULL) {
        header('Location: dashboard.php');
    }
}

/**
 * Created by PhpStorm.
 * User: Uaday
 * Date: 8/29/2016
 * Time: 3:23 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cv Maker</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="asset/front_end/sign-up-login-form/css/normalize.css">


    <link rel="stylesheet" href="asset/front_end/sign-up-login-form/css/style.css">
<link rel="icon" href="asset\front_end\title_logo\4.ico" type="image/x-icon">


</head>

<body>

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>
                <?php if(isset($message)) {
                    echo $message;
                    unset($message);
                }?>
            </h1>
            <form action="" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text"   name="first_name" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text" name="last_name"  required autocomplete="off"/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" name="email"  required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password" required autocomplete="off"/>
                </div>

                <button type="submit"  name="sbtn" class="button button-block"/>
                Get Started</button>
            </form>
        </div>

        <div id="login">
            <h1>
                <?php if(isset($message1)) {
                    echo $message1;
                    unset($message1);
                }?>
            </h1>
            <form action="#" method="post">

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email"  name="email" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password" required autocomplete="off"/>
                </div>


                <button class="button button-block" name="lbtn" />
                Log In</button>

            </form>
        </div>
    </div><!-- tab-content -->
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="asset/front_end/sign-up-login-form/js/index.js"></script>
</body>
</html>