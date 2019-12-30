<?php
if (isset($_GET['unpublished'])) {
    $obj_sup->block($_GET['login_id']);
}
if (isset($_GET['published'])) {
    $obj_sup->allowed($_GET['login_id']);
}
if (isset($_GET['delete'])) {
    $message = $obj_sup->delete_student($_GET['login_id']);
}
$result = $obj_sup->select_contact();
$row=  mysqli_fetch_assoc($result);
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Change Contact</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Contact
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div>
                            <?php
                            if (isset($message)) {
                                if ($message != 'Student Details Delete Successfully!!') {
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
                        <div class="dataTable_wrapper">
                            <table class="table  table-bordered table-responsive" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr class="odd gradeX text-center">
                                    <td><label ><?php echo $row['address']?></label></td>
                                    <td><label ><?php echo $row['phone']?></label></td>
                                    <td><label ><?php echo $row['email']?></label></td>
                                    <td>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body text-center" align="center">
                                            <a type="button" class="btn btn-primary " href="edit_contact.php?contact_id=<?php echo $row['contact_id']; ?>" title="Edit"><i class="fa fa-edit"> Edit Contact</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
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

