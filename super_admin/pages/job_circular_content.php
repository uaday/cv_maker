<?php
if (isset($_GET['delete'])) {
    $message = $obj_sup->delete_organization($_GET['id']);

}
$result = $obj_sup->select_all_organization();
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Job Circular</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Post Job</button>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Circular List
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div>
                            <?php
                            if (isset($message)) {
                                if ($message != 'Organization Successfully Deleted') {
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
                                    <th>Organization Type</th>
                                    <th>created Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr class="odd gradeX text-center">

                                        <td ><label style="margin-top: 10%"><?php echo $row['name'] ?></label></td>
                                        <td><label  style="margin-top: 10%"><?php echo $row['organization_type'] ?></label></td>
                                        <td><label  style="margin-top: 10%"><?php echo $row['created_date'] ?></label></td>
                                        <td><label  style="margin-top: 14%"><?php echo $row['status']== '1'? 'Active': 'De-active' ?></label></td>

                                        <td>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body text-center" align="center">
                                                <a style="margin-top: 10%" type="button" class="btn btn-warning btn-circle"
                                                   href="?delete=true&id=<?php echo $row['id']; ?>"
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


<div  class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="job_name" class="col-form-label">Job Name:</label>
                        <input type="text" class="form-control" id="job_name" name="job_name">
                    </div>
                    <div class="form-group">
                        <label for="summernote" class="col-form-label">Message:</label>
                        <textarea  id="summernote" name="editordata"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>


