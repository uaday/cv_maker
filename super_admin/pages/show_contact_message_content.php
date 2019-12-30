<?php
if(isset($_GET))
{
    $result=$obj_sup->find_message_by_request_id($_GET['request_id']);
    $row=mysqli_fetch_assoc($result);
}
?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Member Form</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Member
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">

                            <form role="form" method="post" enctype="multipart/form-data">
                                <div>
                                    <?php if (isset($message)) {
                                        if ($message != 'Slider Update Successful!!') { ?>
                                            <div class="alert alert-danger">
                                                <h3><?php if (isset($message)) echo $message; ?></h3>
                                            </div>
                                        <?php } else { ?>
                                            <div class="alert alert-success">
                                                <h3><?php if (isset($message)) echo $message; ?></h3>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                                <div class="form-group ">
                                    <div class="col-lg-12">
                                        <br/>
                                        <br/>
                                        <label style="color: #1A5276;"><h4><b>নাম: </b></h4></label>
                                        <label style="color: #0E6655"><h4><b><?php echo $row['name'] ?></b></h4>
                                        </label>
                                        <hr/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label style="color: #1A5276;"><h4><b>ইমেইল: </b></h4></label>
                                        <label style="color: #E74C3C"><h4>
                                                <b><?php echo $row['email']?></b></h4>
                                        </label>
                                        <hr/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label style="color: #1A5276;"><h4><b>ফোন নাম্বার: </b></h4></label>
                                        <label style="color: #E74C3C"><h4>
                                                <b><?php echo $row['phone']?></b></h4>
                                        </label>
                                        <hr/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label style="color: #1A5276;"><h4><b>বার্তা: </b></h4></label>
                                        <label style="color: #E74C3C"><h4>
                                                <b><?php echo $row['message']?></b></h4>
                                        </label>
                                        <hr/>
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