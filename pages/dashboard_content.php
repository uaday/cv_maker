<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 8/29/2016
 * Time: 3:48 PM
 */
$result=$obj_app->cv_status($_SESSION['login_id']);
$row=mysqli_fetch_assoc($result);

?>
<div class="row">
    <div class="col-md-3 my_body">
        <?php  if($row){?>
            <a href="#"  style="align-content: center" >
                <img class="center-block" src="asset/front_end/contact/img/icon/untitled.png" style="height: 200px; width: 230px; ">
                <h3 class="text-center"  >Create</h3></a>
        <?php } else {?>
            <a href="create.php" style="align-content: center" >
                <img class="center-block" src="asset/front_end/contact/img/icon/untitled.png" style="height: 200px; width: 230px; ">
                <h3 class="text-center"  >Create</h3></a>
        <?php }?>

    </div>
    <div class="col-md-3 my_body">
        <a href="#"  style="align-content: center" >
            <img class="center-block" src="asset/front_end/contact/img/icon/59100-200.png" style="height: 200px; width: 230px;">
            <h3 class="text-center"  >Download</h3></a>
    </div>
    <div class="col-md-3 my_body">
        <a href="preview.php"  >
            <img class="center-block" src="asset/front_end/contact/img/icon/resume-icon-png-10.png" style="height: 200px; width: 230px; ">
            <h3 class="text-center"  >Preview</h3></a>
    </div>
    <div class="col-md-3 my_body">
        <a href="profile.php" >
            <img class="center-block" src="asset/front_end/contact/img/icon/profile.png" style="height: 200px; width: 230px; ">
            <h3 class="text-center"  >Profile</h3></a>
    </div>


</div>
