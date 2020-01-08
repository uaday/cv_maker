<?php
$i= 0;
if (isset($_GET['delete'])) {
    $message = $obj_sup->delete_organization($_GET['id']);

}
if(isset($_POST['submit_job']))
{
    $message=$obj_sup->insert_job_circular($_POST);
}

$result = $obj_sup->select_all_job_circular();
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
                            if (isset($_SESSION['message'])) {
                                if ($_SESSION['message'] != 'Job Circular successfully added') {
                                    ?>
                                    <div class="alert alert-danger">
                                        <h3><?php if (isset($_SESSION['message'])) echo $_SESSION['message']; ?></h3>
                                    </div>
                                <?php } else { ?>
                                    <div class="alert alert-success">
                                        <h3><?php if (isset($_SESSION['message'])) echo $_SESSION['message']; ?></h3>
                                    </div>
                                <?php } ?>
                            <?php unset($_SESSION['message']); } ?>
                        </div>
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) { $i++; ?>
                                    <tr class="odd gradeX text-center">

                                        <td ><label style="margin-top: 10%"><?php echo $row['job_name'] ?></label></td>
                                        <td><label  style="margin-top: 10%"><?php echo $row['created_date'] ?></label></td>
                                        <td><label  style="margin-top: 14%"><?php echo $row['status']== '1'? 'Active': 'De-active' ?></label></td>

                                        <td>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body text-center" align="center">
                                                <a style="margin-top: 10%" type="button" class="btn btn-success btn-circle"
                                                   href="job_applicant.php?job_id=<?php echo $row['id']; ?>"
                                                   title="Delete" ><i
                                                        class="glyphicon glyphicon-list"></i>
                                                </a>

                                                <a style="margin-top: 10%" type="button" class="btn btn-primary btn-circle"
                                                   href="#" data-toggle="modal" data-target="#previewModal<?= $i?>" data-whatever="@mdo"
                                                   title="Preview" ><i
                                                            class="glyphicon glyphicon-file"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <div  class="modal fade bd-example-modal-lg" id="previewModal<?= $i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><?= $row['job_name']?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <?= $row['job_description']?>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

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
        <form role="form"  action="#" method="post" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="job_name" class="col-form-label">Job Name:</label>
                        <input type="text" class="form-control" id="job_name" name="job_name">
                        <input type="hidden" class="form-control" id="job_name" name="organization_id" value="<?= $_SESSION['organization_id']?>">
                    </div>

                    <div class="form-group">
                        <label for="skills" class="col-form-label">Skills:</label>
                        <br>
                        <select class="form-control"  multiple="multiple" data-role="tagsinput" id="skills" name="skills[]">
                        </select
                    </div>

                    <div class="form-group">
                        <label for="summernote" class="col-form-label">Job Details:</label>
                        <textarea  id="summernote" name="job_details"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="submit_job" type="submit" class="btn btn-primary">Send message</button>
            </div>
        </div>
        </form>
    </div>
</div>


