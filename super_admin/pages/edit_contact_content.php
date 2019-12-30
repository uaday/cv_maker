<?php

if(isset($_POST['btn']))
{
    $message=$obj_sup->update_contact($_POST);
}

$result=$obj_sup->select_contact_by_contact_id($_GET['contact_id']);
$row=mysqli_fetch_assoc($result);
?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Contact</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Contact Form
                </div>
                <div class="panel-body" >
                    <div class="row">
                        <div class="col-md-12" >

                            <form role="form" method="post" enctype="multipart/form-data">
                                <div>
                                    <?php
                                    if (isset($message)) {
                                        if ($message != 'Contact Update Successful!!') {
                                            ?>
                                            <div class="alert alert-danger">
                                                <h3 ><?php if (isset($message)) echo $message; ?></h3>
                                            </div>
                                        <?php } else { ?>
                                            <div class="alert alert-success">
                                                <h3><?php if (isset($message)) echo $message; ?></h3>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control " name="address" rows="3" placeholder="Enter Address"><?php if(isset($row['address'])) echo $row['address'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" maxlength="400" placeholder="Enter Phone Number" value="<?php if(isset($row['phone'])) echo $row['phone'];?>">
                                    <input type="hidden" class="form-control" name="contact_id" maxlength="400"  value="<?php if(isset($row['contact_id'])) echo $row['contact_id'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" maxlength="400" placeholder="Enter Email Address" value="<?php if(isset($row['email'])) echo $row['email'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Map Link</label>
                                    <textarea class="form-control " name="map_link" rows="5" placeholder="Enter Fb link"><?php if(isset($row['map_link'])) echo $row['map_link'];?></textarea>
                                </div>
                                <div class="panel-body" align="center">
                                    <div class="col-md-12">
                                        <button type="submit" name="btn" class="btn btn-outline btn-block btn-primary btn-sm">Update Contact</button>

                                    </div>

                                </div>

                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div id="morris-area-chart" class="hidden"></div>

    <div id="morris-bar-chart" class="hidden"></div>

    <div id="morris-donut-chart" class="hidden"></div>
</div>
<!-- /#page-wrapper -->