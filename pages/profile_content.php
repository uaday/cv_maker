

<?php

if(isset($_POST['ubtn']))
{
    $message=$obj_app->update_profile($_POST);
}

$a=  $_SESSION['login_id'];

//echo $a;

$result=$obj_app->select_profile($a);
$row=mysqli_fetch_assoc($result);



?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="row">
    <div class="col-md-offset-9 col-md-3">
        <div class="panel-body" align="center">
            <button type="reset" class="btn btn-outline btn-primary" style="width: 100px" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-edit"></i> Edit
            </button>

        </div>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <form role="form"  action="#" method="post" enctype="multipart/form-data">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Profile</h4>
                </div>
                <div class="modal-body">
           <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control" name="first_name" maxlength="200" required   value="<?php echo $row['first_name'];?>" placeholder="Enter First Name">
                        <input class="form-control" name="login_id"  type="hidden" maxlength="200" required   value="<?php echo $row['login_id'];?>" placeholder="Enter First Name">
                   
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control" name="last_name" maxlength="200" value="<?php echo $row['last_name'];?>" required
                               placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $row['email'];?>" maxlength="200" required
                               placeholder="Enter Your Email">
                    </div>

                </div>
                <div class="modal-footer">
               
                    <button  name="ubtn" type="submit"    class="btn btn-primary btn-outline">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
<div class="container">
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <h1 align="center"><strong>Profile</strong></h1><br>
                        
                        <div class="form-group" align="center">
                            <label>First Name:   <?php echo   $row['first_name']?></label>
                        </div>
                        <div class="form-group" align="center">
                            <label>Last Name: <?php   echo  $row['last_name']?></label>
                        </div>
                        <div class="form-group" align="center">
                            <label>Email Address:   <?php   echo  $row['email']?></label>
                        </div>
                        <?php if(isset($message))
                        { ?>
                            <h3 class="text-danger" align="center"><strong><?php echo $message; ?>  </strong></h3><br>

                            <?php unset($message);  }  ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
