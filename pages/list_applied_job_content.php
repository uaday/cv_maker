

<?php


$a=  $_SESSION['login_id'];


$result=$obj_app->find_all_applied_job($a);
?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
<?php while ($row = mysqli_fetch_assoc($result)){?>
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <h1 align="center"><strong><?= $row['job_name']?></strong></h1><br>
                        
                        <div class="form-group" align="center">
                            <label><?php echo   $row['name']?></label>
                        </div>
                        <div class="form-group" align="center">
                            <label>Applied Date: <?php   echo  $row['created_date']?></label>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>
