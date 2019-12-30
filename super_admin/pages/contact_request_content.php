<?php
if (isset($_GET['delete'])) {
    $message = $obj_sup->delete_request_contact($_GET['request_id']);
}
$result = $obj_sup->select_request_contact();
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Requested Contact</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Request Form
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div>
                            <?php
                            if (isset($message)) {
                                if ($message != 'Contact Request Deleted Successful!!') {
                                    ?>
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
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr class="odd gradeX text-center">

                                        <td ><label style="margin-top: 10%"><?php echo $row['name'] ?></label></td>
                                        <td><label  style="margin-top: 14%"><?php echo $row['email'] ?></label></td>
                                        <td><label  style="margin-top: 10%"><?php echo $row['phone'] ?></label></td>

                                        <td>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body text-center" align="center">
                                                <a style="margin-top: 30%" type="button" class="btn btn-success btn-circle"
                                                   href="show_contact_message.php?request_id=<?php echo $row['request_id'];?>&type=0"
                                                   title="view"><i class="fa fa-user"></i>
                                                </a>
                                                <a style="margin-top: 30%" type="button" class="btn btn-warning btn-circle"
                                                   href="?delete=true&request_id=<?php echo $row['request_id']; ?>"
                                                   title="Delete" onclick="return check_delete_info();"><i
                                                        class="glyphicon glyphicon-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <div id="morris-area-chart" class="hidden"></div>

    <div id="morris-bar-chart" class="hidden"></div>

    <div id="morris-donut-chart" class="hidden"></div>
</div>

